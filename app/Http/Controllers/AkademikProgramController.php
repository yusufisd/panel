<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AkademikProgram;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AkademikProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $data = AkademikProgram::latest()->get();
        return view('pages.akademik_program.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.akademik_program.add');
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
        ], [
            "name.required" => "Akademik program içeriği boş bırakılamaz."
        ]);
        AkademikProgram::create([
            "name" => $request->name
        ]);
        Alert::success('Başarılı','Akademik program eklendi.');
        return redirect()->route('akademik_program.list');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = AkademikProgram::find($id);
        return view('pages.akademik_program.edit',compact('data'));
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
        ], [
            "name.required" => "Akademik program içeriği boş bırakılamaz."
        ]);
        AkademikProgram::where('id',$request->id)->update([
            "name" => $request->name
        ]);
        Alert::success('Başarılı','Akademik program düzenlendi.');
        return redirect()->route('akademik_program.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AkademikProgram::where('id',$id)->delete();
        Alert::success('Başarılı','İçerik silindi.');
        return redirect()->route('akademik_program.list');
    }
}
