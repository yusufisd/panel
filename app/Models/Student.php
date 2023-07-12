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
    
}
