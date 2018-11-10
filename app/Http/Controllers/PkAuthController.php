<?php

namespace App\Http\Controllers;

use App\PkUser;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PkAuthController extends Controller
{
    public function signup(Request $request){
    	$this->validate($request,[
    		'first_name' => 'required|string|max:255',
    		'last_name'  => 'required|string|max:255',
    		'mobile'     => 'required|max:11|unique:users',
    		'password'   => 'required|string|min:6|confirmed',
    		'union'      => 'required',
    		'blood'      => 'required',
    		'password_confirmation' => 'required'
    	]);

    	$password   = $request->get('password');
    	$con_pass   = $request->get('password_confirmation');
    	$mobile     = $request->get('mobile');
    	$mob = substr($mobile, 0,3);

    	if($mob == '017' || $mob == '018' || $mob == '019' || $mob == '016' || $mob == '015' || $mob == '011'){
    		if(strlen($mobile) != 11){
    			return redirect()->back()->withinput()->with('err_msg','Mobile Number Must be 11 Character');
    		}else{
    			if(strlen($password) > 5 && strlen($password) < 19){
    				if($password === $con_pass){
    					// $register = PkUser::create([
    					// 	'first_name' => $request->get('first_name'),
    					// 	'last_name'  => $request->get('last_name'),
    					// 	'union'      => $request->get('union'),
    					// 	'blood'      => $request->get('blood'),
    					// 	'mobile'     => $mobile,
    					// 	'password'   => $password
    					// ]);
                        $register = Sentinel::registerAndActivate($request->all());
    					if($register){
    						return redirect('/pk-login')->with('suc_msg','Registration Successfully You Can Sign in now');
    					}else{
                           return redirect()->back()->withinput()->with('err_msg','Something went Wrong, please contact with system administrator'); 
                        }
    				}else{
    					return redirect()->back()->withinput()->with('err_msg','Password Does not match');
    				}
    			}else{
    				return redirect()->back()->withinput()->with('err_msg','Password Should be 6 to 18 chracter');
    			}
    		}
    	}else{
    		return redirect()->back()->withinput()->with('err_msg','Mobile Number is not Valid');
    	}
    	return $mob;
    }

    public function signin(Request $request){
    	$this->validate($request,[
    		'mobile' => 'required|string|max:11',
    		'password' => 'required|max:18',
    	]);
        $password   = $request->get('password');
        $mobile     = $request->get('mobile');
        $mob = substr($mobile, 0,3);

        try {

            if($mob == '017' || $mob == '018' || $mob == '019' || $mob == '016' || $mob == '015' || $mob == '011'){
                if(strlen($mobile) != 11){
                    return redirect()->back()->withInput()->with('err_msg','Mobile Number Must be 11 Character');
                }else{
                    if(strlen($password) > 5 && strlen($password) < 19){
                        $request->password = $password;
                        $request->mobile   = substr($mobile, 1);
                        // $signin = PkUser::where('mobile',$mobile)
                        //                  ->where('password',$password)
                        //                  ->count(); 
                        $signin = Sentinel::authenticate($request->all());
                        if($signin){
                            return redirect('/pk-friends');
                        }else{
                            return redirect()->back()->with('err_msg','Credentials does,t match');
                        }
                    }
                } 
            }else{
                return redirect()->back()->withinput()->with('err_msg','Invalid Mobile Number');
            } 

        } catch (ThrottlingException $e) {
            $delay =  $e->getDelay();
            return redirect()->back()->withinput()->with('err_msg',"Don,t cheatting , You are banned for $delay seconds" );
        }

    	
    }
    public function signout(Request $request){
        Sentinel::logout();
        return redirect('/pk-login');
    }
}
