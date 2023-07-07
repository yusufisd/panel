<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanismanMuhasebe extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Danisman(){
        return $this->hasOne(Danisman::class,'id','danisman_id');
    }
}
