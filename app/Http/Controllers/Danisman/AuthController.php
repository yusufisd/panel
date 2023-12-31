<?php

namespace App\Http\Controllers\Danisman;

use App\Http\Controllers\Controller;
use App\Models\Danisman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function login()
    {
        return view('danisman.auth.login');
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
        if (Auth::guard('danisman')->attempt(['email' => $request->email, 'password' => $request->password,])) {
            return redirect()->route('danisman.index');
        } else {
            return back()->withErrors("Email veya şifre yanlış!");
        }
    }

    public function logout()
    {
        Auth::guard('danisman')->logout();
        Alert::success('Çıkış Başarılı');
        return redirect()->route('danisman.login');
    }

    public function sifre_degis()
    {
        $auth = Auth::guard('danisman')->user();
        return view('danisman.pages.ayar.sifre_degistir', compact('auth'));
    }

    public function sifre_degis_post(Request $request)
    {
        $request->validate([
            "old_password" => "required",
            "password" => "required",
            "password_confirm" => "required",
        ], [
            "password.required" => "Şifre boş bırakıldı.",
            "old_password.required" => "Önceki şifre boş bırakıldı.",
            "password_confirm.required" => "Şifre tekrarı boş bırakıldı.",
        ]);



        $id = Auth::guard('danisman')->user()->id;
        $auth = Danisman::find($id);
        if (Hash::check($request->old_password, $auth->password)) {
            if ($request->password == $request->password_confirm) {

                $auth->update([
                    "password" => Hash::make($request->password),
                ]);
                Alert::success('Ayarlar Başarıyla Güncellendi');
                return redirect()->route('danisman.index');
            } else {
                return back()->withErrors('Şifre tekrarı uyuşmuyor.');
            }
        } else {
            return back()->withErrors('Önceki şifre yanlış.');
        }
    }
}
