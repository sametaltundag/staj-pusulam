<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use App\Models\Appeal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppealController extends Controller
{

    public function index(){
        if(Auth::check()){
            //Appeal tablosundan users_id verisi auth id ile uyuşan verileri son ekleme tarihine göre getir
            $appeals = Appeal::where('users_id', Auth::id())->orderBy('created_at', 'desc')->get();

            //$appeals = Appeal::where('users_id', Auth::id())->get();
            return view('frontend.pages.myappeals', compact('appeals'));
        } else {
            return redirect()->route('adverts')->with('error', 'Hata oluştu!');
        }
    }

    public function makeappeal(Request $req, $id) {
        if(Auth::check()){
            $advert = Advert::find($id);

            Appeal::create([
                'name' => $advert->title,
                'email' => Auth::user()->email,
                'phone' => Auth::user()->phone,
                'users_id' => Auth::id(),
                'adverts_id' => $id
            ]);

            return redirect()->route('adverts')->with('success', 'Başvurunuz kaydedildi..');
        } else {
            return redirect()->route('adverts')->with('error', 'Başvuru yapabilmek için giriş yapmalısınız..');
        }
    }

    public function delete($id){
        if(Auth::check()){
            $appeal = Appeal::find($id);
            $appeal->delete();
            return redirect()->route('myappeals')->with('success', 'Başvurunuz silindi..');
        }
    }
}
