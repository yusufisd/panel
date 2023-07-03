<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Danisman extends Authenticatable
{
    use HasFactory;
    protected $guarded = [];

    public function Departman(){
        return $this->hasOne(Departman::class,'id','department_id');
    }

    public function Ulke(){
        $id2 = Departman::find($this->department_id);
        $id = $id2->ulke_id;
        $data = CountriesList::find($id);
        return $data->country_name;
    }
}
