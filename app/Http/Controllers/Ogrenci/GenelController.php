<?php

namespace App\Http\Controllers\Ogrenci;

use App\Http\Controllers\Controller;
use App\Models\BasvurulacakUniversiteler;
use App\Models\Danisman;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GenelController extends Controller
{
    public function programlar(){
        $ogr = Auth::guard('ogrenci')->user()->id;
        $ogrenci = Student::find($ogr);
        return view('ogrenci.pages.programlar',compact('ogrenci'));
    }
    
    public function danismanim(){
        $auth = Auth::guard('ogrenci')->user();
        $danisman = Danisman::find($auth->danisman_id);
        return view('ogrenci.pages.danismanim',compact('danisman'));
    }

    public function basvurulacak(){
        $auth = Auth::guard('ogrenci')->user();
        $data = BasvurulacakUniversiteler::where('ogrenci_id',$auth->id)->where('status',0)->get();
        return view('ogrenci.pages.basvurulacak',compact('data'));
    }

    public function basvurulan(){
        $auth = Auth::guard('ogrenci')->user();
        $data = BasvurulacakUniversiteler::where('ogrenci_id',$auth->id)->where('status',1)->get();
        return view('ogrenci.pages.basvurulan',compact('data'));
    }

    public function onaylanan(){
        $auth = Auth::guard('ogrenci')->user();
        $data = BasvurulacakUniversiteler::where('ogrenci_id',$auth->id)->where('durum',1)->get();
        return view('ogrenci.pages.onaylanan',compact('data'));
    }

    public function reddedilen(){
        $auth = Auth::guard('ogrenci')->user();
        $data = BasvurulacakUniversiteler::where('ogrenci_id',$auth->id)->where('durum',2)->get();
        return view('ogrenci.pages.reddedilen',compact('data'));
    }

    public function profil(){
        $auth = Auth::guard('ogrenci')->user();
        $data = Student::find($auth->id);
        return view('ogrenci.pages.profil',compact('data'));
    }
}
