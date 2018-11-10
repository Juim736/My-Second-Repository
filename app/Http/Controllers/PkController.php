<?php

namespace App\Http\Controllers;

use App\PkUser;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class PkController extends Controller
{
    public function pk(){
    	return view('pk.home');
    }
    public function pkBlood(){
    	return view('pk.blood.blood');
    }
    public function pkEducation(){
    	return view('pk.education.education2');
    }
    public function groupBlood($group){
        $availableDonar = PkUser::where('lastGivingBlood', '<', date('Y-m-d'))
                                  ->where('blood',$group)->get();
    	return view('pk.blood.groupBlood',compact('availableDonar'));
    }
    public function medicalCare(){
        return view('pk.medical.medical');
    }
    public function emergency(){
        return view('pk.emergency.emergency');
    }
    public function support(){
        return view('pk.support.support');
    }
    public function createEvent(){
        return view('pk.event.createEvent');
    }
    public function pkTeam(){
        return view('pk.team.pkTeam');
    }
    public function userProfile(){
        return view('pk.profile.userProfile');
    }
    // public function pkUsers(){
    // 	return view('pk.user.allUser',compact('allUser'));
    // }
    public function pkUsers()
    {
        return view('pk.user.allUser');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAllUser()
    {
        return Datatables::of(User::all())->make(true);
    }
}
