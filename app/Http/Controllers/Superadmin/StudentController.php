<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\AkademikProgram;
use App\Models\BasvurulacakUniversiteler;
use App\Models\Danisman;
use App\Models\Departman;
use App\Models\DilSinavi;
use App\Models\EgitimProgram;
use App\Models\Fakulteler;
use App\Models\GenelProgram;
use App\Models\Iller;
use App\Models\Student;
use App\Models\Uniler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Ui\Presets\React;
use RealRashid\SweetAlert\Facades\Alert;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Student::latest()->get();
        return view('superadmin.pages.ogrenci.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $danisman = Danisman::orderBy('name', 'asc')->get();
        $iller = Iller::OrderBy('id', 'asc')->get();
        $genel_program = GenelProgram::OrderBy('id', 'asc')->get();
        $akademik_program = AkademikProgram::OrderBy('id', 'asc')->get();
        $egitim_programi = EgitimProgram::OrderBy('id', 'asc')->get();
        $dil_sinavi = DilSinavi::OrderBy('id', 'asc')->get();
        return view('superadmin.pages.ogrenci.add', compact('danisman', 'iller', 'genel_program', 'akademik_program', 'egitim_programi', 'dil_sinavi'));
    }

    public function detail($id)
    {
        $basvurulan = BasvurulacakUniversiteler::where('status', 1)->where('ogrenci_id', $id)->get();
        $basvurulacak = BasvurulacakUniversiteler::where('status', 0)->where('ogrenci_id', $id)->get();
        $data = Student::where('id', $id)->get();
        return view('superadmin.pages.ogrenci.detail', compact('data', 'basvurulacak', 'basvurulan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "surname" => "required",
            "tc_no" => "required",
            "birthday" => "required",
            "phone" => "required",
            "passport_no" => "required",
            "father_name" => "required",
            "mother_name" => "required",
            "okul_il" => "required",
            "okul" => "required",
            "sinif" => "required",
            "email" => "required",
            "password" => "required",
        ],[
            "name.required" => "İsim boş bırakılamaz!",
            "surname.required" => "Soy isim boş bırakılamaz!",
            "tc_no.required" => "TC kimlik numarası boş bırakılamaz!",
            "birthday.required" => "Doğum tarihi boş bırakılamaz!",
            "phone.required" => "Telefon numarası boş bırakılamaz!",
            "passport_no.required" => "Pasaport numarası boş bırakılamaz!",
            "father_name.required" => "Baba adı boş bırakılamaz",
            "mother_name.required" => "Anne adı boş bırakılamaz",
            "okul_il.required" => "Okuduğu şehir boş bırakılamaz",
            "okul.required" => "Okul boş bırakılamaz",
            "sinif.required" => "Sınıf boş bırakılamaz",
            "email.required" => "Email boş bırakılamaz",
            "password.required" => "Şifre boş bırakılamaz",
        ]);
        $new = new Student();
        $new->name = $request->name;
        $new->surname = $request->surname;
        $new->tc_no = $request->tc_no;
        $new->birthday = $request->birthday;
        $new->phone = $request->phone;
        $new->passport_no = $request->passport_no;
        $new->father_name = $request->father_name;
        $new->mother_name = $request->mother_name;
        $new->okul_il = $request->okul_il;
        $new->okul = $request->okul;
        $new->sinif = $request->sinif;
        $new->genel_program = $request->genel_program;
        $new->akademik_prgram_id = $request->akademik_program;
        $new->egitim_program_id = $request->egitim_programi;
        $new->dil_sinavi_id = $request->dil_sinavi;
        $new->prosedur = $request->prosedur;
        $new->email = $request->email;
        $new->danisman_id = $request->danisman_id;
        $new->password = Hash::make($request->dil_sinavi);

        $new->save();
        Alert::success('Başarılı','Öğrenci ekleme işlemi başarılı.');
        return redirect()->route('ogrenci.list');

    }

    public function guvenlik_ayari($id)
    {
        $data = Student::find($id);
        return view('superadmin.pages.ogrenci.guvenlik_ayarlari', compact('data'));
    }
    public function guvenlik_ayari_post(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required|min:6",
        ], [
            "email.required" => "Email boş bırakıldı.",
            "password.required" => "Şifre boş bırakıldı.",
            "email.email" => "Email tipi hatalı.",
            "password.min" => "Şifre en az 6 karakter olmalı.",
        ]);
        Student::where('id', $request->id)->update([
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);
        Alert::success('Ayarlar Başarıyla Düzenlendi');
        return redirect()->route('ogrenci.detail',['id'=>$request->id]);
    }
    public function edit($id)
    {
        $genel_program = GenelProgram::OrderBy('id', 'asc')->get();
        $akademik_program = AkademikProgram::OrderBy('id', 'asc')->get();
        $egitim_programi = EgitimProgram::OrderBy('id', 'asc')->get();
        $dil_sinavi = DilSinavi::OrderBy('id', 'asc')->get();
        $iller = Iller::orderBy('il_name', 'asc')->get();
        $departman = Departman::orderBy('name', 'asc')->get();
        $data = Student::where('id', $id)->get();
        return view('superadmin.pages.ogrenci.edit', compact('data', 'departman', 'genel_program', 'akademik_program', 'egitim_programi', 'dil_sinavi', 'iller'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::where('id', $id)->delete();
        Alert::success('Başarılı', 'Silme işlemi başarılı.');
        return redirect()->route('ogrenci.list');
    }

    
}
