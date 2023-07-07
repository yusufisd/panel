<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\Danisman;
use App\Models\DanismanMuhasebe;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DanismanMuhasebeController extends Controller
{
    public function odeme_yap(){
        $danismanlar = Danisman::orderBy('name','asc')->get();
        return view('superadmin.pages.muhasebe_danisman.odeme_yap',compact('danismanlar'));
    }

    public function odeme_yap_post(Request $request){
        $request->validate([
            "danisman_id" => "required",
            "tutar" => "required",
        ],[
            "danisman_id.required" => "Danışman seçilmedi.",
            "tutar.required" => "Tutar girilmedi.",
        ]);
        DanismanMuhasebe::create([
            "danisman_id" => $request->danisman_id,
            "tutar" => $request->tutar,
            "type" => 1,
            "description" => $request->description,
        ]);
        Alert::success('Ödeme Ekleme Başarılı');
        return redirect()->route('danisman_muhasebe.odeme_list');
    }

    public function odeme_list(){
        $data = DanismanMuhasebe::latest()->get();
        return view('superadmin.pages.muhasebe_danisman.odeme_list',compact('data'));
    }
}
