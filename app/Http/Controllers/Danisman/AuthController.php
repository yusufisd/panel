<?php

namespace App\Http\Controllers\Danisman;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function login(){
        return view('danisman.auth.login');
    }


    public function login_post(Request $request){
        $request->validate([
            "email" => "required",
            "password" => "required",
        ],[
            "email.required" => "Email boş bırakıldı!",
            "password.required" => "Email boş bırakıldı!",
        ]);
        if (Auth::guard('danisman')->attempt(['email' => $request->email, 'password' => $request->password,])) {
            return redirect()->route('danisman.index');
        }else{
            return back()->withErrors("Email veya şifre yanlış!");
        }

    }

    public function logout(){
        Auth::guard('danisman')->logout();
        Alert::success('Çıkış Başarılı');
        return redirect()->route('danisman.login');
    }
}
