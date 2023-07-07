<?php

namespace App\Http\Controllers\Danisman;

use App\Http\Controllers\Controller;
use App\Models\OgrMuhasebe;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;
use RealRashid\SweetAlert\Facades\Alert;
use ReflectionFunctionAbstract;

class OgrMuhasebeController extends Controller
{
    public function borc_list()
    {
        $auth_id = Auth::guard('danisman')->user()->id;

        $data = OgrMuhasebe::where('type', '0')->where('danisman_id', $auth_id)->get();
        return view('danisman.pages.muhasebe.borc_listesi', compact('data'));
    }

    public function tahsilat_list()
    {
        $auth_id = Auth::guard('danisman')->user()->id;

        $data = OgrMuhasebe::where('type', '1')->where('danisman_id', $auth_id)->get();
        return view('danisman.pages.muhasebe.tahsilat_listesi', compact('data'));
    }

    public function borc_ekle()
    {
        $auth_id = Auth::guard('danisman')->user()->id;
        $ogr = Student::where('danisman_id', $auth_id)->orderBy('name', 'asc')->get();
        return view('danisman.pages.muhasebe.borc_ekle', compact('ogr'));
    }

    public function borc_ekle_post(Request $request)
    {
        $request->validate([
            "ogr_id" => "required",
            "tutar" => "required",
        ], [
            "ogr_id.required" => "Öğrenci seçilmedi.",
            "tutar.required" => "Tutar girilmedi.",
        ]);
        $ogr = Student::find($request->ogr_id);
        OgrMuhasebe::create([
            "ogr_id" => $request->ogr_id,
            "tutar" => $request->tutar,
            "type" => 0,
            "description" => $request->description,
            "danisman_id" => Auth::guard('danisman')->user()->id
        ]);
        Student::where('id', $ogr->id)->update([
            "bakiye" => $ogr->bakiye + $request->tutar
        ]);
        Alert::success('Öğrenci Bakiyesi Artırıldı');
        return redirect()->route('danisman.borc.list');
    }

    public function borc_duzenle($id)
    {
        $auth_id = Auth::guard('danisman')->user()->id;
        $ogr = Student::where('danisman_id', $auth_id)->get();
        $data = OgrMuhasebe::where('id', $id)->get();
        return view('danisman.pages.muhasebe.borc_edit', compact('ogr', 'data'));
    }

    public function borc_duzenle_post(Request $request)
    {
        $request->validate([
            "ogr_id" => "required",
            "tutar" => "required",
        ], [
            "ogr_id.required" => "Öğrenci seçilmedi.",
            "tutar.required" => "Tutar girilmedi.",
        ]);
        $veri = OgrMuhasebe::find($request->borc_id);
        $ogr = Student::find($veri->ogr_id);


        $ogr->update([
            "bakiye" => $ogr->bakiye - $veri->tutar
        ]);
        $veri->update([
            "ogr_id" => $request->ogr_id,
            "tutar" => $request->tutar,
            "description" => $request->description,
        ]);
        $yeni_ogr = Student::find($request->ogr_id);
        $yeni_ogr->update([
            "bakiye" => $yeni_ogr->bakiye + $request->tutar
        ]);
        Alert::success('Borç Düzenlendi');
        return redirect()->route('danisman.borc.list');
    }

    public function borc_destroy($id)
    {
        $borc = OgrMuhasebe::find($id);
        $kisi = Student::find($borc->ogr_id);
        $kisi->update([
            "bakiye" => $kisi->bakiye - $borc->tutar
        ]);
        $borc->delete();
        Alert::success('Borç Silindi');
        return back();
    }

    public function tahsilat_ekle()
    {
        $auth_id = Auth::guard('danisman')->user()->id;
        $data = Student::where('danisman_id', $auth_id)->orderBy('name', 'asc')->get();
        return view('danisman.pages.muhasebe.tahsilat_ekle', compact('data'));
    }

    public function tahsilat_ekle_post(Request $request)
    {
        $request->validate([
            "ogr_id" => "required",
            "tutar" => "required",
        ], [
            "ogr_id.required" => "Öğrenci seçilmedi.",
            "tutar.required" => "Tutar girilmedi.",
        ]);
        $ogr = Student::find($request->ogr_id);
        OgrMuhasebe::create([
            "ogr_id" => $request->ogr_id,
            "tutar" => $request->tutar,
            "type" => 1,
            "description" => $request->description,
            "danisman_id" => Auth::guard('danisman')->user()->id

        ]);
        Student::where('id', $ogr->id)->update([
            "bakiye" => $ogr->bakiye - $request->tutar
        ]);
        Alert::success('Öğrenci Bakiyesi Düştü');
        return redirect()->route('danisman.tahsilat.list');
    }

    public function tahsilat_duzenle($id)
    {
        $auth_id = Auth::guard('danisman')->user()->id;
        $ogr = Student::where('danisman_id', $auth_id)->get();
        $data = OgrMuhasebe::where('id', $id)->get();
        return view('danisman.pages.muhasebe.tahsilat_edit', compact('ogr', 'data'));
    }

    public function tahsilat_duzenle_post(Request $request)
    {
        $request->validate([
            "ogr_id" => "required",
            "tutar" => "required",
        ], [
            "ogr_id.required" => "Öğrenci seçilmedi.",
            "tutar.required" => "Tutar girilmedi.",
        ]);
        $veri = OgrMuhasebe::find($request->tahsilat_id);
        $ogr = Student::find($veri->ogr_id);


        $ogr->update([
            "bakiye" => $ogr->bakiye + $veri->tutar
        ]);
        $veri->update([
            "ogr_id" => $request->ogr_id,
            "tutar" => $request->tutar,
            "description" => $request->description,
        ]);
        $yeni_ogr = Student::find($request->ogr_id);
        $yeni_ogr->update([
            "bakiye" => $yeni_ogr->bakiye - $request->tutar
        ]);
        Alert::success('Tahsilat Düzenlendi');
        return redirect()->route('danisman.tahsilat.list');
    }

    public function tahsilat_sil($id)
    {
        $tahsilat = OgrMuhasebe::find($id);
        $kisi = Student::find($tahsilat->ogr_id);
        $kisi->update([
            "bakiye" => $kisi->bakiye + $tahsilat->tutar
        ]);
        $tahsilat->delete();
        Alert::success('Tahsilat Silindi');
        return back();
    }
}
