<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\OgrMuhasebe;
use Illuminate\Http\Request;

class OgrMuhasebeController extends Controller
{
    public function borc_list(){
        $data = OgrMuhasebe::where('type','0')->get();
        return view('superadmin.pages.muhasebe.borc_listesi',compact('data'));
    }
    
    public function tahsilat_list(){
        $data = OgrMuhasebe::where('type','1')->get();
        return view('superadmin.pages.muhasebe.tahsilat_listesi',compact('data'));
    }
}
