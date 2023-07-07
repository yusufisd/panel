<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\Danisman;
use App\Models\Departman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class DanismanController extends Controller
{
    public function index()
    {
        $data = Danisman::latest()->get();
        return view('superadmin.pages.danisman.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departman = Departman::orderBy('id','asc')->get();
        return view('superadmin.pages.danisman.add',compact('departman'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "surname" => "required",
            "phone" => "required",
            "email" => "required",
            "password" => "required",
            "departman_id" => "required",
        ],[
            "name.required" => "Danışman ismi boş bırakılamaz.",
            "surname.required" => "Danışman soyismi boş bırakılamaz.",
            "phone.required" => "Danışman telefonu boş bırakılamaz.",
            "email.required" => "Danışman email boş bırakılamaz.",
            "password.required" => "Danışman şifresi boş bırakılamaz.",
            "departman_id.required" => "Departman boş bırakılamaz.",
        ]);
        Danisman::create([
            "name" => $request->name,
            "surname" => $request->surname,
            "phone" => $request->phone,
            "department_id" => $request->departman_id,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);
        Alert::success('Başarılı','Danışman ekleme işlemi başarılı.');
        return redirect()->route('danisman.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departman = Departman::orderBy('name','asc')->get();
        $data = Danisman::where('id',$id)->get();
        return view('superadmin.pages.danisman.edit',compact('data','departman'));
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
        $request->validate([
            "name" => "required",
            "surname" => "required",
            "phone" => "required",
            "email" => "required",
            "departman_id" => "required",
        ],[
            "name.required" => "Danışman ismi boş bırakılamaz.",
            "surname.required" => "Danışman soyismi boş bırakılamaz.",
            "phone.required" => "Danışman telefonu boş bırakılamaz.",
            "email.required" => "Danışman email boş bırakılamaz.",
            "departman_id.required" => "Departman boş bırakılamaz.",
        ]);
        Danisman::where('id',$request->id)->update([
            "name" => $request->name,
            "surname" => $request->surname,
            "phone" => $request->phone,
            "department_id" => $request->departman_id,
            "email" => $request->email,
        ]);
        Alert::success('Başarılı','Danışman güncelleme işlemi başarılı.');
        return redirect()->route('danisman.list');
    }

    public function settings($id){
        $data = Danisman::find($id);
        return view('superadmin.pages.danisman.settings',compact('data'));
    }
    public function settings_post(Request $request){
        $auth = Danisman::find($request->id);
        $request->validate([
            "email" => "required",
            "old_password" => "required",
            "password" => "required",
        ],[
            "email.required" => "Email boş bırakılamaz.",
            "old_password.required" => "Önceki şifre boş bırakılamaz.",
            "password.required" => "Şifre boş bırakılamaz.",
        ]);

        if(Hash::check($request->old_password,$auth->password)){
            $auth->update([
                "email" => $request->email,
                "password" => Hash::make($request->password),
            ]);
            Alert::success('Danışman güvenlik ayarları değiştirildi.');
            return redirect()->route('danisman.list');
        }else{
            return back()->withErrors('Önceki şifre doğru değil.');
        }
    }
    public function destroy($id)
    {
        Departman::where('id',$id)->delete();
        Alert::success('Başarılı','Departman silme işlemi başarılı.');
        return redirect()->route('danisman.list');
    }
}
