<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function signup(){
        return view('Loginpage.Sigup');
    }
    public function signin(){
        return view('Loginpage.Signip');
    }
    public function forgotpassword(){
        return view('Loginpage.FogotPassword');
    }
    public function HomePage(){
        return view('FristView.Homepage');
    }
}
