<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function stajyerlogin(){
        return view('frontend.pages.stajyer-login');
    }

    public function stajyerregister(){
        return view('frontend.pages.stajyer-register');
    }
}
