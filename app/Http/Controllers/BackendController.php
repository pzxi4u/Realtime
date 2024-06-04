<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function signUp(Request $rp){
        $usr = $rp ->  input('');
    }
    public function signIn(){

    }
}
