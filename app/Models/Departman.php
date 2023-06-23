<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departman extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Ulke(){
        return $this->hasOne(CountriesList::class,'id','ulke_id');
    }
}
