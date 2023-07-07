<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
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
