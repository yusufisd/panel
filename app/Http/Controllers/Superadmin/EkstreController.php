<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\DanismanMuhasebe;
use App\Models\OgrMuhasebe;
use Exception;
use Illuminate\Http\Request;
use stdClass;

class EkstreController extends Controller
{
    public function add()
    {
        return view('superadmin.pages.ekstre.add');
    }

    public function list(Request $request)
    {
        if ($request->type == 0) {
            if ($request->baslangic != null) {

                if ($request->bitis != null) {

                    $data = OgrMuhasebe::where('type', '1')->where('created_at', '>', $request->baslangic)->where('created_at', '<', $request->bitis)->get();
                    return view('superadmin.pages.ekstre.list', compact('data'));
                }
                $data = OgrMuhasebe::where('type', '1')->where('created_at', '>', $request->baslangic)->get();
                return view('superadmin.pages.ekstre.list', compact('data'));
            }
            $data = OgrMuhasebe::where('type', '1')->latest()->get();
            return view('superadmin.pages.ekstre.list', compact('data'));
        }
        if ($request->type == 1) {

            if ($request->baslangic != null) {

                if ($request->bitis != null) {
                    $data = DanismanMuhasebe::where('created_at', '>', $request->baslangic)->where('created_at', '<', $request->bitis)->latest()->get();
                    return view('superadmin.pages.ekstre.list', compact('data'));
                }
                $data = DanismanMuhasebe::where('created_at', '>', $request->baslangic)->latest()->get();
                return view('superadmin.pages.ekstre.list', compact('data'));
            }

            $data = DanismanMuhasebe::latest()->get();
            return view('superadmin.pages.ekstre.list', compact('data'));
        }
        if ($request->type == 2) {
            // 0 gelir 1 gider 2 hepsi
            $gider = new DanismanMuhasebe();
            $gelir = OgrMuhasebe::orderBy('created_at', 'asc');
            if( isset($request->baslangic)){
                $gider = $gider->where('created_at', '>=', $request->baslangic);   
                $gelir = $gelir->where('created_at', '>=', $request->baslangic);   
            }
            if( isset($request->bitis)){
                $gider = $gider->where('created_at', '<=', $request->bitis);   
                $gelir = $gelir->where('created_at', '<=', $request->bitis);   
            }

            $totalgelir = $gelir->sum('tutar');
            $totalgider = $gider->sum('tutar');
            $total = $totalgelir - $totalgider;

            $gelir = $gelir->orderBy('created_at', 'asc')->get();
            $gider = $gider->orderBy('created_at', 'asc')->get();
            $data = [];
            $count = count($gelir) > count($gider) ? count($gelir) : count($gider);
            for ($i = 0; $i < $count; $i++){
                try{
                    /*
                    $giderex = new stdClass();
                    $giderex->type = "gider";
                    $giderex->data = $gider[$i];

                    $gelirex = new stdClass();
                    $gelirex->type = "gider";
                    $gelirex->data = $gelir[$i];

                    $data[] = $gelirex;
                    $data[] = $giderex;
                    */
                    $data[] = $gider[$i];
                }catch(Exception $e){
                    //pass
                }

                try{
                    $data[] = $gelir[$i];
                }catch(Exception $e){
                    //pass
                }
            }

            $data = array_merge($gelir->toArray() , $gider->toArray());
            return view('superadmin.pages.ekstre.list', compact('data', 'totalgelir', 'totalgider'));
        }

    }
}
