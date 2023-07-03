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
        $data = Danisman::find($id);
        return view('superadmin.pages.danisman.edit',compact('data'));
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
            "ulke_id" => "required",
        ],[
            "name.required" => "Departman ismi boş bırakılamaz.",
            "ulke_id.required" => "Ülke seçmeyi unuttunuz.",
        ]);
        Departman::where('id',$request->id)->update([
            "name" => $request->name,
            "ulke_id" => $request->ulke_id,
        ]);
        Alert::success('Başarılı','Departman güncelleme işlemi başarılı.');
        return redirect()->route('danisman.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Departman::where('id',$id)->delete();
        Alert::success('Başarılı','Departman silme işlemi başarılı.');
        return redirect()->route('danisman.list');
    }
}
