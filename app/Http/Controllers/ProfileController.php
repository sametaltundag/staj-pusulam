<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index(){
        $sehirler = config('cities');
        $user = Auth::user();
        return view('frontend.pages.profile', compact('user', 'sehirler'));
    }

    public function update(Request $request){

        $user = User::find(Auth::id());

        if($request->hasFile('photo')){
            if ($user->photo && file_exists('images/users/'.$user->photo)) {
                unlink('images/users/' . $user->photo);
            }

            $file = $request->file('photo');
            $extension = $file->extension();
            $filename = uniqid().'.'.$extension;
            $file->move('images/users/', $filename);
            $user->photo = $filename;
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'city' => $request->city,
            'about' => $request->about,
            'photo' => $user->photo ?? null,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
            'university' => $request->university,
            'university_dep' => $request->university_dep,
            'degree' => $request->degree,
            'job_id' => $request->job_id,
            'age' => $request->age,
            'address' => $request->address,
        ]);

        return redirect()->route('profile')->with(['success' => 'Pusula profilin artık daha şık!']);

    }
}
