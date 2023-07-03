<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\AkademikProgram;
use App\Models\Danisman;
use App\Models\Departman;
use App\Models\DilSinavi;
use App\Models\EgitimProgram;
use App\Models\Fakulteler;
use App\Models\GenelProgram;
use App\Models\Iller;
use App\Models\Student;
use App\Models\Uniler;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Student::latest()->get();
        return view('superadmin.pages.ogrenci.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $danisman = Danisman::orderBy('name','asc')->get();
        $iller = Iller::OrderBy('id','asc')->get();
        $genel_program = GenelProgram::OrderBy('id','asc')->get();
        $akademik_program = AkademikProgram::OrderBy('id','asc')->get();
        $egitim_programi = EgitimProgram::OrderBy('id','asc')->get();
        $dil_sinavi = DilSinavi::OrderBy('id','asc')->get();
        return view('superadmin.pages.ogrenci.add',compact('danisman','iller','genel_program','akademik_program','egitim_programi','dil_sinavi'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $data = Student::where('id',$id)->get();
        return view('superadmin.pages.ogrenci.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::where('id',$id)->delete();
        Alert::success('Başarılı','Silme işlemi başarılı.');
        return redirect()->route('ogrenci.list');
    }

    public function uni_getir(Request $request){
        $data = Uniler::where('il_id',$request->id)->get();
        return $data;
    }

    public function fakulte_getir(Request $request){
        $data = Fakulteler::where('uni_id',$request->id)->get();
        return $data;
    }
}
