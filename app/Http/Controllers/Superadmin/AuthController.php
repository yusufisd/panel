<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function login(){
        return view('superadmin.auth.login');
    }

    public function login_post(Request $request){
        $request->validate([
            "email" => "required",
            "password" => "required",
        ],[
            "email.required" => "Email boş bırakıldı!",
            "password.required" => "Email boş bırakıldı!",
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password,])) {
            return redirect()->route('index');
        }else{
            return back()->withErrors("Böyle bir kullanıcı yok!");
        }

    }

    public function logout(){
        Auth::guard('admin')->logout();
        Alert::success('Çıkış Başarılı');
        return redirect()->route('superadmin.login');
    }
}
