<?php

use App\Http\Controllers\Danisman\AkademikProgramController as DanismanAkademikProgramController;
use App\Http\Controllers\Danisman\AuthController as DanismanAuthController;
use App\Http\Controllers\Danisman\BasvuruController;
use App\Http\Controllers\Danisman\DilSinaviController as DanismanDilSinaviController;
use App\Http\Controllers\Danisman\EgitimProgramiController as DanismanEgitimProgramiController;
use App\Http\Controllers\Danisman\GenelProgramController as DanismanGenelProgramController;
use App\Http\Controllers\Danisman\HomeController as DanismanHomeController;
use App\Http\Controllers\Danisman\StudentController as DanismanStudentController;
use App\Http\Controllers\Superadmin\HomeController;
use App\Http\Controllers\Superadmin\AkademikProgramController;
use App\Http\Controllers\Superadmin\DepartmanController;
use App\Http\Controllers\Superadmin\DilSinaviController;
use App\Http\Controllers\Superadmin\EgitimProgramiController;
use App\Http\Controllers\Superadmin\GenelProgramController;
use App\Http\Controllers\Superadmin\AuthController;
use App\Http\Controllers\Superadmin\DanismanController;
use App\Http\Controllers\Superadmin\StudentController;
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
Route::get('index/{locale}', [HomeController::class, 'lang']);

Route::get('/', [HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [HomeController::class, 'updatePassword'])->name('updatePassword');

// SÜPERADMİN CONTROLLER
Route::get('superadmin/giris-yap', [AuthController::class, 'login'])->name('superadmin.login');
Route::post('superadmin/giris-yap', [AuthController::class, 'login_post'])->name('superadmin.login.post');

Route::prefix('superadmin')->middleware('auth:admin')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('superadmin.logout');

    Route::get('/', [HomeController::class, 'index'])->name('index');

    // AKADEMİK PROGRAM CONTROLLER
    Route::controller(AkademikProgramController::class)->name('akademik_program')->prefix('akademik-program')->group(function () {
        Route::get('/ekle', 'create')->name('.add');
        Route::get('/liste', 'index')->name('.list');
        Route::get('/duzenle/{id?}', 'edit')->name('.edit');
        Route::post('/ekle', 'store')->name('.store');
        Route::post('/guncelle', 'update')->name('.update');
        Route::get('/sil/{id?}', 'destroy')->name('.destroy');
    });

    // GENEL PROGRAM CONTROLLER
    Route::controller(GenelProgramController::class)->name('genel_program')->prefix('genel-program')->group(function () {
        Route::get('/liste', 'index')->name('.list');
        Route::get('/ekle', 'create')->name('.add');
        Route::post('/ekle', 'store')->name('.store');
        Route::get('/duzenle/{id?}', 'edit')->name('.edit');
        Route::post('/guncelle', 'update')->name('.update');
        Route::get('/sil/{id?}', 'destroy')->name('.destroy');
    });
    /// DİL SINAVI CONTROLLER
    Route::controller(EgitimProgramiController::class)->name('egitim_programi')->prefix('egitim-programi')->group(function () {
        Route::get('/liste', 'index')->name('.list');
        Route::get('/ekle', 'create')->name('.add');
        Route::post('/ekle', 'store')->name('.store');
        Route::get('/duzenle/{id?}', 'edit')->name('.edit');
        Route::post('/guncelle', 'update')->name('.update');
        Route::get('/sil/{id?}', 'destroy')->name('.destroy');
    });
    // DİL SINAVI CONTROLLER
    Route::controller(DilSinaviController::class)->name('dil_sinavi')->prefix('dil-sinavi')->group(function () {
        Route::get('/liste', 'index')->name('.list');
        Route::get('/ekle', 'create')->name('.add');
        Route::post('/ekle', 'store')->name('.store');
        Route::get('/duzenle/{id?}', 'edit')->name('.edit');
        Route::post('/guncelle', 'update')->name('.update');
        Route::get('/sil/{id?}', 'destroy')->name('.destroy');
    });
    // DEPARTMAN CONTROLLER
    Route::controller(DepartmanController::class)->name('departman')->prefix('departman')->group(function () {
        Route::get('/liste', 'index')->name('.list');
        Route::get('/ekle', 'create')->name('.add');
        Route::post('/ekle', 'store')->name('.store');
        Route::get('/duzenle/{id?}', 'edit')->name('.edit');
        Route::post('/guncelle', 'update')->name('.update');
        Route::get('/sil/{id?}', 'destroy')->name('.destroy');
    });
    // DANIŞMAN CONTROLLER 
    Route::controller(DanismanController::class)->name('danisman')->prefix('danisman')->group(function () {
        Route::get('/liste', 'index')->name('.list');
        Route::get('/ekle', 'create')->name('.add');
        Route::post('/ekle', 'store')->name('.store');
        Route::get('/duzenle/{id?}', 'edit')->name('.edit');
        Route::post('/guncelle', 'update')->name('.update');
        Route::get('/sil/{id?}', 'destroy')->name('.destroy');
    });
    // ÖĞRENCİ CONTROLLER 
    Route::controller(StudentController::class)->name('ogrenci')->prefix('ogrenci')->group(function () {
        Route::get('/liste', 'index')->name('.list');
        Route::get('/ekle', 'create')->name('.add');
        Route::post('/ekle', 'store')->name('.store');
        Route::get('/duzenle/{id?}', 'edit')->name('.edit');
        Route::post('/guncelle', 'update')->name('.update');
        Route::get('/sil/{id?}', 'destroy')->name('.destroy');
    });
    Route::controller(StudentController::class)->group(function () {

        Route::get('ogrenci/uniler/{id?}', 'uni_getir')->name('uni.getir');
        Route::get('ogrenci/fakulteler/{id?}', 'fakulte_getir')->name('fakulte.getir');
    });
});


Route::get('danisman/login', [DanismanAuthController::class, 'login'])->name('danisman.login');
Route::post('danisman/login', [DanismanAuthController::class, 'login_post'])->name('danisman.login.post');


// DANIŞMAN İŞLEMLERİ
Route::prefix('danisman')->name('danisman')->middleware('auth:danisman')->group(function () {
    Route::get('/logout', [DanismanAuthController::class, 'logout'])->name('.logout');

    Route::get('', [DanismanHomeController::class, 'index'])->name('.index');

    // AKADEMİK PROGRAM CONTROLLER
    Route::controller(DanismanAkademikProgramController::class)->name('.akademik_program')->prefix('akademik-program')->group(function () {
        Route::get('/ekle', 'create')->name('.add');
        Route::get('/liste', 'index')->name('.list');
        Route::get('/duzenle/{id?}', 'edit')->name('.edit');
        Route::post('/ekle', 'store')->name('.store');
        Route::post('/guncelle', 'update')->name('.update');
        Route::get('/sil/{id?}', 'destroy')->name('.destroy');
    });

    // GENEL PROGRAM CONTROLLER
    Route::controller(DanismanGenelProgramController::class)->name('.genel_program')->prefix('genel-program')->group(function () {
        Route::get('/liste', 'index')->name('.list');
        Route::get('/ekle', 'create')->name('.add');
        Route::post('/ekle', 'store')->name('.store');
        Route::get('/duzenle/{id?}', 'edit')->name('.edit');
        Route::post('/guncelle', 'update')->name('.update');
        Route::get('/sil/{id?}', 'destroy')->name('.destroy');
    });
    /// EĞİTİM PROGRAMI CONTROLLER
    Route::controller(DanismanEgitimProgramiController::class)->name('.egitim_programi')->prefix('egitim-programi')->group(function () {
        Route::get('/liste', 'index')->name('.list');
        Route::get('/ekle', 'create')->name('.add');
        Route::post('/ekle', 'store')->name('.store');
        Route::get('/duzenle/{id?}', 'edit')->name('.edit');
        Route::post('/guncelle', 'update')->name('.update');
        Route::get('/sil/{id?}', 'destroy')->name('destroy');
    });
    // DİL SINAVI CONTROLLER
    Route::controller(DanismanDilSinaviController::class)->name('.dil_sinavi')->prefix('dil-sinavi')->group(function () {
        Route::get('/liste', 'index')->name('.list');
        Route::get('/ekle', 'create')->name('.add');
        Route::post('/ekle', 'store')->name('.store');
        Route::get('/duzenle/{id?}', 'edit')->name('.edit');
        Route::post('/guncelle', 'update')->name('.update');
        Route::get('/sil/{id?}', 'destroy')->name('.destroy');
    });

    // ÖĞRENCİ CONTROLLER 
    Route::controller(DanismanStudentController::class)->name('.ogrenci')->prefix('ogrenci')->group(function () {
        Route::get('/liste', 'index')->name('.list');
        Route::get('/ekle', 'create')->name('.add');
        Route::post('/ekle', 'store')->name('.store');
        Route::get('/duzenle/{id?}', 'edit')->name('.edit');
        Route::get('/detay/{id?}', 'detay')->name('.detay');
        Route::post('/guncelle', 'update')->name('.update');
        Route::get('/sil/{id?}', 'destroy')->name('.destroy');
    });

    // BASVURULCAK ÜLKELER İŞLEMLERİ
    Route::controller(BasvuruController::class)->name('.basvurulcak')->prefix('basvurulacak')->group(function(){
        Route::get('/ekle/{id?}','create')->name('.add');
        Route::post('/ekle','store')->name('.store');
        Route::get('/duzenle/{id?}','edit')->name('.edit');
        Route::post('/duzenle','update')->name('.update');
    });

    Route::controller(DanismanStudentController::class)->group(function () {

        Route::get('ogrenci/uniler/{id?}', 'uni_getir')->name('.uni.getir');
        Route::get('ogrenci/fakulteler/{id?}', 'fakulte_getir')->name('.fakulte.getir');
    });
});
