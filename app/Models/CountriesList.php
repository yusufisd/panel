<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountriesList extends Model
{
    use HasFactory;
    protected $table = "countries_list";
    protected $guarded = [];
}
