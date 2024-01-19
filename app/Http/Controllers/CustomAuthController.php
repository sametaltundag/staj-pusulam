<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    public function login(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            $credentials = $request->only('email', 'password');

            if (auth()->attempt($credentials)) {
                $userName = explode(' ', $user->name);
                $userName = $userName[0];

                $request->session()->regenerate();

                return redirect()->route('stajyer-login')->with(['success' => 'Yönlendiriliyorsun...', 'name' => $userName]);
            } else {
                return redirect()->route('stajyer-login')->with('error', 'E-posta ya da şifre hatalı.');
            }
        } else {
            return redirect()->route('stajyer-login')->with('notFound', 'Pusulam kaydınız bulunamadı.');
        }
    }
}
