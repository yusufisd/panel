<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\CountriesList;
use App\Models\Departman;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DepartmanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Departman::latest()->get();
        return view('superadmin.pages.departman.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ulkeler = CountriesList::orderBy('id','asc')->get();
        return view('superadmin.pages.departman.add',compact('ulkeler'));
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
            "ulke_id" => "required",
        ],[
            "name.required" => "Departman ismi boş bırakılamaz.",
            "ulke_id.required" => "Ülke seçmeyi unuttunuz.",
        ]);
        Departman::create([
            "name" => $request->name,
            "ulke_id" => $request->ulke_id,
        ]);
        Alert::success('Başarılı','Departman ekleme işlemi başarılı.');
        return redirect()->route('departman.list');
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
        $data = Departman::find($id);
        return view('superadmin.pages.departman.edit',compact('data'));
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
        return redirect()->route('departman.list');
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
        return redirect()->route('departman.list');
    }
}
