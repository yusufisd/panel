<?php

use App\Http\Controllers\AkademikProgramController;
use App\Http\Controllers\DepartmanController;
use App\Http\Controllers\DilSinaviController;
use App\Http\Controllers\EgitimProgramiController;
use App\Http\Controllers\GenelProgramController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

// AKADEMİK PROGRAM CONTROLLER
Route::controller(AkademikProgramController::class)->prefix('akademik-program')->group(function(){
    Route::get('/ekle','create')->name('akademik_program.add');
    Route::get('/liste','index')->name('akademik_program.list');
    Route::get('/duzenle/{id?}','edit')->name('akademik_program.edit');
    Route::post('/ekle','store')->name('akademik_program.store');
    Route::post('/guncelle','update')->name('akademik_program.update');
    Route::get('/sil/{id?}','destroy')->name('akademik_program.destroy');
});

// GENEL PROGRAM CONTROLLER
Route::controller(GenelProgramController::class)->prefix('genel-program')->group(function(){
    Route::get('/liste','index')->name('genel_program.list');
    Route::get('/ekle','create')->name('genel_program.add');
    Route::post('/ekle','store')->name('genel_program.store');
    Route::get('/duzenle/{id?}','edit')->name('genel_program.edit');
    Route::post('/guncelle','update')->name('genel_program.update');
    Route::get('/sil/{id?}','destroy')->name('genel_program.destroy');
});

/// DİL SINAVI CONTROLLER
Route::controller(EgitimProgramiController::class)->prefix('egitim-programi')->group(function(){
    Route::get('/liste','index')->name('egitim_programi.list');
    Route::get('/ekle','create')->name('egitim_programi.add');
    Route::post('/ekle','store')->name('egitim_programi.store');
    Route::get('/duzenle/{id?}','edit')->name('egitim_programi.edit');
    Route::post('/guncelle','update')->name('egitim_programi.update');
    Route::get('/sil/{id?}','destroy')->name('egitim_programi.destroy');
});

// DİL SINAVI CONTROLLER
Route::controller(DilSinaviController::class)->prefix('dil-sinavi')->group(function(){
    Route::get('/liste','index')->name('dil_sinavi.list');
    Route::get('/ekle','create')->name('dil_sinavi.add');
    Route::post('/ekle','store')->name('dil_sinavi.store');
    Route::get('/duzenle/{id?}','edit')->name('dil_sinavi.edit');
    Route::post('/guncelle','update')->name('dil_sinavi.update');
    Route::get('/sil/{id?}','destroy')->name('dil_sinavi.destroy');
});

// DEPARTMAN CONTROLLER
Route::controller(DepartmanController::class)->prefix('departman')->group(function(){
    Route::get('/liste','index')->name('departman.list');
    Route::get('/ekle','create')->name('departman.add');
    Route::post('/ekle','store')->name('departman.store');
    Route::get('/duzenle/{id?}','edit')->name('departman.edit');
    Route::post('/guncelle','update')->name('departman.update');
    Route::get('/sil/{id?}','destroy')->name('departman.destroy');
});








