<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OgrMuhasebe extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Ogrenci(){
        return $this->hasOne(Student::class,'id','ogr_id');
    }
}
