<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\DilSinavi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DilSinaviController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DilSinavi::latest()->get();
        return view('superadmin.pages.dil_sinavi.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.pages.dil_sinavi.add');
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
            "name" => "required"
        ],[
            "name.required" => "İçerik boş bırakılamaz."
        ]);
        DilSinavi::create([
            "name" => $request->name
        ]);
        Alert::success('Başarılı','Dil sınavı başarıyla eklendi.');
        return redirect()->route('dil_sinavi.list');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DilSinavi::find($id);
        return view('superadmin.pages.dil_sinavi.edit',compact('data'));
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
            "name" => "required"
        ],[
            "name.required" => "İçeril boş bırakılamaz."
        ]);
        DilSinavi::where('id',$request->id)->update([
            "name" => $request->name
        ]);
        Alert::success('Başarılı','Dil sınavi başarıyla güncellendi.');
        return redirect()->route('dil_sinavi.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DilSinavi::where('id',$id)->delete();
        Alert::success('Başarılı','Silme işlemi başarılı.');
        return redirect()->route('dil_sinavi.list');
    }
}
