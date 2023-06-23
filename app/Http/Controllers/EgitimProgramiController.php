<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EgitimProgram;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class EgitimProgramiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = EgitimProgram::latest()->get();
        return view('pages.egitim_programi.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.egitim_programi.add');
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
        EgitimProgram::create([
            "name" => $request->name
        ]);
        Alert::success('Başarılı','İçerik başarıyla eklendi.');
        return redirect()->route('egitim_programi.list');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = EgitimProgram::find($id);
        return view('pages.egitim_programi.edit',compact('data'));
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
            "name.required" => "İçerik boş bırakılamaz."
        ]);
        EgitimProgram::where('id',$request->id)->update([
            "name" => $request->name
        ]);
        Alert::success('Başarılı','İçerik başarıyla güncellendi.');
        return redirect()->route('egitim_programi.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        EgitimProgram::where('id',$id)->delete();
        Alert::success('Başarılı','İçerik başarıyla silindi.');
        return redirect()->route('egitim_programi.list');
    }
}
