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
    
    public function Fakulte(){
        return $this->hasOne(Fakulteler::class,'id','fakulte_id');
    }

    public function Sehir(){
        return $this->hasOne(Iller::class,'id','uni_il_id');
    }

    public function Universite(){
        return $this->hasOne(Uniler::class,'uni_id','uni_id');
    }
    
}
