<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){

        if(Auth::check()){
            if(Auth::user()->role == 'employer'){
                return redirect()->intended('employer/dashboard');
            }
            return redirect()->intended('user/dashboard');
        }

        return view('home');
    }
    public function stajyerlogin(){
        return view('frontend.pages.stajyer-login');
    }

    public function stajyerregister(){
        return view('frontend.pages.stajyer-register');
    }

    public function stajverenlogin(){
        return view('frontend.pages.stajveren-login');
    }

    public function adverts(){
        return view('frontend.pages.adverts');
    }
}
