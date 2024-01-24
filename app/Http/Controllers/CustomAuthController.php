<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CustomAuthController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->where('status', '1')->first();

        if ($user) {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                return redirect()->route('dashboard')->with(['success' => 'Hoşgeldin, '.Auth::user()->name]);
            } else {
                return redirect()->route('stajyer-login')->with('error', 'E-posta ya da şifre hatalı.');
            }
        } else {
            return redirect()->route('stajyer-login')->with('notFound', 'Pusulam kaydınız bulunamadı.');
        }
    }

    
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:9',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'password2' => 'required|same:password',
            'gender' => 'required'
        ], [
            'name.required' => 'Adınızı giriniz.',
            'name.min' => 'Adınız en az 5 karakter olmalı.',
            'email.required' => 'E-posta adresinizi giriniz.',
            'email.email' => 'Girdiğiniz e-posta adresi geçersiz.',
            'email.unique' => 'Bu e-posta adresi zaten kayıtlı.',
            'password.required' => 'Şifrenizi giriniz.',
            'password.min' => 'Şifreniz en az 6 karakter olmalı.',
            'password2.required' => 'Şifre tekrarınızı giriniz.',
            'password2.same' => 'Şifreler uyumlu değil.',
            'gender.required' => 'Cinsiyetinizi seçiniz.'
        ]);

        if ($validator->fails()) {
            return redirect()
            ->route('stajyer-register')
            ->withErrors($validator);
        }

        if($validator){
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'gender' => $request->gender,
                'phone' => $request->phone
            ]);

            if($user){
                return redirect()->route('stajyer-login')->with('created', 'Artık Pusulan burada!');
            }
        }
    }


    public function logout(){
        if(Auth::check()){
            Auth::logout();
            return redirect()->route('stajyer-login')->with('logout', 'Güvenli çıkış yapıldı.');
        } else {
            return redirect()->route('home');
        }
    }
    public function dashboard(){
        if(Auth::check()){
            return view('frontend.pages.dashboard');
        } else {
            return redirect()->route('home');
        }
    }
}
