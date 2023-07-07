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
    
    public function create()
    {
        $ulkeler = CountriesList::orderBy('country_name', 'asc')->get();
        return view('danisman.pages.ulkeler.basvurulcak', compact('ulkeler'));
    }


    public function store(Request $request)
    {
        $request->validate([
            "ulke_id" => "required",
            "universite" => "required",
        ], [
            "ulke_id.required" => "Ülke seçmeyi unutmayın!"
        ]);
        BasvurulacakUniversiteler::create([
            "ulke_id" => $request->ulke_id,
            "universite" => $request->universite,
            "ogrenci_id" => $request->ogrenci_id,
            "bolum" => $request->bolum,
        ]);
        Alert::success('Başarılı', 'Üniversite başvurusu eklendi.');
        return redirect()->route('danisman.ogrenci.detay', $request->ogrenci_id);
    }

    public function statu_degis($id)
    {
        BasvurulacakUniversiteler::find($id)->update([
            "status" => 1
        ]);
        Alert::success('Başvurulan Üniversite Eklendi');
        return back();
    }

    public function durum_onayla($id){
        BasvurulacakUniversiteler::find($id)->update([
            "durum" => 1
        ]);
        Alert::success('Başvurulan Üniversite Durumu Onaylandı');
        return back();
    }

    public function durum_reddet($id){
        BasvurulacakUniversiteler::find($id)->update([
            "durum" => 2
        ]);
        Alert::success('Başvurulan Üniversite Durumu Reddedildi');
        return back();
    }

    public function edit($id)
    {
        $ulkeler = CountriesList::orderBy('country_name', 'asc')->get();
        $kisi = BasvurulacakUniversiteler::where('id', $id)->get();
        return view('danisman.pages.ulkeler.basvurulacak_edit', compact('kisi', 'ulkeler'));
    }

    
    public function update(Request $request)
    {
        $request->validate([
            "ulke_id" => "required",
            "universite" => "required",
        ], [
            "ulke_id.required" => "Ülke seçmeyi unutmayın!",
            "universite.required" => "Üniversite seçmeyi unutmayın!",
        ]);
        BasvurulacakUniversiteler::where('id', $request->id)->update([
            "ulke_id" => $request->ulke_id,
            "universite" => $request->universite,
            "bolum" => $request->bolum,
        ]);
        Alert::success('Başarılı', 'Üniversite başvurusu düzenlendi.');
        return redirect()->route('danisman.ogrenci.detay', $request->ogrenci_id);
    }

    
}
