<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function registerPage(){
        if (Auth::check()){
            return view('dashboard');
        } else{
            return view('auth.register');
        }
    }

    public function registerNewUser(RegistrationRequest $request){


        return redirect()->route('login');
    }
}
