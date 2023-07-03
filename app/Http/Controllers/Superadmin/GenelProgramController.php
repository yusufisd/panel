<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\GenelProgram;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class GenelProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = GenelProgram::latest()->get();
        return view('superadmin.pages.genel_program.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.pages.genel_program.add');
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
            "name.required" => "İçerik boş bırakılamaz!"
        ]);
        GenelProgram::create([
            "name" => $request->name
        ]);
        Alert::success('Başarılı','Genel program başarıyla eklendi.');
        return redirect()->route('genel_program.list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = GenelProgram::find($id);
        return view('superadmin.pages.genel_program.edit',compact('data'));
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
        GenelProgram::where('id',$request->id)->update([
            "name" => $request->name
        ]);
        Alert::success('Başarılı','Genel program başarıyla eklendi.');
        return redirect()->route('genel_program.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        GenelProgram::where('id',$id)->delete();
        Alert::success('Başarılı','Genel program başarıyla silindi.');
        return redirect()->route('genel_program.list');
    }
}
