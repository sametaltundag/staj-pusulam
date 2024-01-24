<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployerControler extends Controller
{
    public function login(Request $request){

        $request->validate([
            'empcode' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('empcode', $request->empcode)->where('status', '1')->first();

        if ($user) {
            $credentials = $request->only('empcode', 'password');
            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                return redirect()->route('employer.index')->with(['success' => 'Hoşgeldiniz, '.Auth::user()->name]);
            } else {
                return redirect()->route('stajveren-login')->with('error', 'E-posta ya da şifre hatalı.');
            }
        } else {
            return redirect()->route('stajveren-login')->with('notFound', 'Pusulam kaydınız bulunamadı.');
        }
    }

    public function index(){
        return view('frontend.pages.employer-dash');
    }
}
