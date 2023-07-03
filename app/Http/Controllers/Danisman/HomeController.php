<?php

namespace App\Http\Controllers\Danisman;

use App\Http\Controllers\Controller;
use App\Models\Danisman;
use App\Models\Departman;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $id = Auth::guard('danisman')->user()->id;
        $danismanlar = Danisman::latest()->get();
        $departmanlar = Departman::latest()->get();
        $ogrenciler = Student::where('danisman_id',$id)->latest()->get();
        return view('danisman.index',compact('danismanlar','departmanlar','ogrenciler'));
    }
}
