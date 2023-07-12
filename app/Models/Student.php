<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Student extends Authenticatable
{
    use HasFactory;
    protected $guarded = [];

    public function Danisman()
    {
        return $this->hasOne(Danisman::class,'id','danisman_id');
    }
    
    public function sehir(){
        return $this->hasOne(Iller::class,'id','okul_il');
    }

    public function genelProgram(){
        return $this->hasOne(GenelProgram::class,'id','genel_program');
    }

    public function egitimProgrami(){
        return $this->hasOne(EgitimProgram::class,'id','egitim_program_id');
    }

    public function akademikProgram(){
        return $this->hasOne(AkademikProgram::class,'id','akademik_prgram_id');
    }

    public function dilSinavi(){
        return $this->hasOne(DilSinavi::class,'id','dil_sinavi_id');
    }
    
}
