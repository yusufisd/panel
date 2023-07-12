<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function login()
    {
        return view('superadmin.auth.login');
    }

    public function login_post(Request $request)
    {
        $request->validate([
            "email" => "required",
            "password" => "required",
        ], [
            "email.required" => "Email boş bırakıldı!",
            "password.required" => "Email boş bırakıldı!",
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password,])) {
            return redirect()->route('superadmin.index');
        } else {
            return back()->withErrors("Böyle bir kullanıcı yok!");
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        Alert::success('Çıkış Başarılı');
        return redirect()->route('superadmin.login');
    }

    public function setting()
    {
        $auth = Auth::guard('admin')->user();
        return view('superadmin.auth.setting', compact('auth'));
    }

    public function setting_post(Request $request)
    {
        $request->validate([
            "email" => "required",
            "old_password" => "required",
            "password" => "required",
        ], [
            "email.required" => "Email adı boş bırakıldı.",
            "password.required" => "Şifre boş bırakıldı.",
            "old_password.required" => "Önceki şifre boş bırakıldı.",
        ]);
        $id = Auth::guard('admin')->user()->id;
        $auth = Admin::find($id);
        if (Hash::check($request->old_password, $auth->password)) {
            $auth->update([
                "email" => $request->email,
                "password" => Hash::make($request->password),
            ]);
            Alert::success('Ayarlar Başarıyla Güncellendi');
            return redirect()->route('index');
        }else{
            return redirect()->route('settings')->withErrors('Önceki şifre yanlış.');

        }
    }
}
