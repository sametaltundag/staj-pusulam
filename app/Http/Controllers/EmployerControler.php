<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
                $request->session()->regenerate();
                $user = Auth::user();
                return redirect()->route('employer.index')->with(['success' => 'Hoşgeldiniz, '.Auth::user()->name]);
            } else {
                return redirect()->route('stajveren-login')->with('error', 'E-posta ya da şifre hatalı.');
            }
        } else {
            return redirect()->route('stajveren-login')->with('notFound', 'Pusulam kaydınız bulunamadı.');
        }
    }

    public function update(Request $request){

        $user = User::find(Auth::id());

        if($request->hasFile('photo')){
            if ($user->photo && file_exists('images/employers/'.$user->photo)) {
                unlink('images/employers/' . $user->photo);
            }

            $file = $request->file('photo');
            $extension = $file->extension();
            $filename = uniqid().'.'.$extension;
            $file->move('images/employers/', $filename);
            $user->photo = $filename;
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'city' => $request->city,
            'about' => $request->about,
            'photo' => $user->photo ?? null,
            'job_id' => $request->job_id,
            'address' => $request->address,
        ]);

        return redirect()->route('employer.profile')->with(['success' => 'Firma bilgileri güncellendi!']);

    }

    public function index(){
        $employer = Auth::user();
        return view('frontend.pages.employer-dash',compact('employer'));
    }

    public function profile(){
        $employer = Auth::user();
        return view('frontend.pages.profile-employer',compact('employer'));
    }
}
