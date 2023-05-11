<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginPage(){
        if (Auth::check()){
            return view('dashboard');
        } else{
            return view('auth.login');
        }
    }
}
