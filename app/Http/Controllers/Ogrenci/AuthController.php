<?php

namespace App\Http\Controllers\Ogrenci;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('ogrenci.pages.auth.login');
    }

    public function loginPost(Request $request){
        $request->validate([
            "email" => "required",
            "password" => "required",
        ], [
            "email.required" => "Email boş bırakıldı!",
            "password.required" => "Email boş bırakıldı!",
        ]);

        if (Auth::guard('ogrenci')->attempt(['email' => $request->email, 'password' => $request->password,])) {
            return redirect()->route('ogrenci.index');
        } else {
            return back()->withErrors("Böyle bir kullanıcı yok!");
        }
    }

    public function logout(){
        Auth::guard('ogrenci')->logout();
        return redirect()->route('ogrenci.login');
    }
}
