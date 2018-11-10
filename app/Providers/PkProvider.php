<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\ServiceProvider;

class PkProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('pk.user.allUsers',function($view){
            $allUsers = User::all();
            $view->with('allUser',$allUsers);
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
