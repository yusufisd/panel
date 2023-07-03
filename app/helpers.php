<?php

use App\Models\AkademikProgram;
use App\Models\Danisman;
use App\Models\Departman;
use App\Models\DilSinavi;
use App\Models\EgitimProgram;
use App\Models\Student;

if (! function_exists('departmanCount')) {
    function departmanCount() {
        return Departman::count();
    }
}

if (! function_exists('danismanCount')) {
    function danismanCount() {
        return Danisman::count();
    }
}

if (! function_exists('ogrenciCount')) {
    function ogrenciCount() {
        return Student::count();
    }
}

if (! function_exists('akademikCount')) {
    function akademikCount() {
        return AkademikProgram::count();
    }
}

if (! function_exists('dilCount')) {
    function dilCount() {
        return DilSinavi::count();
    }
}

if (! function_exists('egitimCount')) {
    function egitimCount() {
        return EgitimProgram::count();
    }
}





?>