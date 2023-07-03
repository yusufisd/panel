<?php

namespace App\Http\Controllers\Danisman;

use App\Http\Controllers\Controller;
use App\Models\BasvurulacakUniversiteler;
use App\Models\BasvurulanUniversiteler;
use App\Models\CountriesList;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BasvuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ulkeler = CountriesList::orderBy('country_name','asc')->get();
        return view('danisman.pages.ulkeler.basvurulcak',compact('ulkeler'));
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
            "ulke_id" => "required",
            "universite" => "required",
        ],[
            "ulke_id.required" => "Ülke seçmeyi unutmayın!"
        ]);
        BasvurulacakUniversiteler::create([
            "ulke_id" => $request->ulke_id,
            "universite" => $request->universite,
            "ogrenci_id" => $request->ogrenci_id,
            "bolum" => $request->bolum,
        ]);
        Alert::success('Başarılı','Üniversite başvurusu eklendi.');
        return redirect()->route('danisman.ogrenci.detay',$request->ogrenci_id);
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
        $ulkeler = CountriesList::orderBy('country_name','asc')->get();
        $kisi = BasvurulacakUniversiteler::where('id',$id)->get();
        return view('danisman.pages.ulkeler.basvurulacak_edit',compact('kisi','ulkeler'));
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
            "ulke_id" => "required",
            "universite" => "required",
        ],[
            "ulke_id.required" => "Ülke seçmeyi unutmayın!",
            "universite.required" => "Üniversite seçmeyi unutmayın!",
        ]);
        BasvurulacakUniversiteler::where('id',$request->id)->update([
            "ulke_id" => $request->ulke_id,
            "universite" => $request->universite,
            "bolum" => $request->bolum,
        ]);
        Alert::success('Başarılı','Üniversite başvurusu düzenlendi.');
        return redirect()->route('danisman.ogrenci.detay',$request->ogrenci_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
