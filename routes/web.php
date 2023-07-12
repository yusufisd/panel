<?php

use App\Http\Controllers\Danisman\AkademikProgramController as DanismanAkademikProgramController;
use App\Http\Controllers\Danisman\AuthController as DanismanAuthController;
use App\Http\Controllers\Danisman\BasvuruController;
use App\Http\Controllers\Danisman\DilSinaviController as DanismanDilSinaviController;
use App\Http\Controllers\Danisman\EgitimProgramiController as DanismanEgitimProgramiController;
use App\Http\Controllers\Danisman\GenelProgramController as DanismanGenelProgramController;
use App\Http\Controllers\Danisman\HomeController as DanismanHomeController;
use App\Http\Controllers\Danisman\OgrMuhasebeController;
use App\Http\Controllers\Danisman\StudentController as DanismanStudentController;
use App\Http\Controllers\Ogrenci\AuthController as OgrenciAuthController;
use App\Http\Controllers\Ogrenci\HomeController as OgrenciHomeController;
use App\Http\Controllers\Superadmin\HomeController;
use App\Http\Controllers\Superadmin\AkademikProgramController;
use App\Http\Controllers\Superadmin\DepartmanController;
use App\Http\Controllers\Superadmin\DilSinaviController;
use App\Http\Controllers\Superadmin\EgitimProgramiController;
use App\Http\Controllers\Superadmin\GenelProgramController;
use App\Http\Controllers\Superadmin\AuthController;
use App\Http\Controllers\Superadmin\DanismanController;
use App\Http\Controllers\Superadmin\DanismanMuhasebeController;
use App\Http\Controllers\Superadmin\EkstreController;
use App\Http\Controllers\Superadmin\OgrMuhasebeController as SuperadminOgrMuhasebeController;
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

Route::post('/update-profile/{id}', [HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [HomeController::class, 'updatePassword'])->name('updatePassword');


// SÜPERADMİN CONTROLLER
Route::get('superadmin/giris-yap', [AuthController::class, 'login'])->name('superadmin.login');
Route::post('superadmin/giris-yap', [AuthController::class, 'login_post'])->name('superadmin.login.post');

Route::prefix('superadmin')->middleware('auth:admin')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('superadmin.logout');
    Route::get('/', [HomeController::class, 'index'])->name('superadmin.index');

    Route::get('/ayarlar',[AuthController::class,'setting'])->name('settings');
    Route::post('/ayarlar',[AuthController::class,'setting_post'])->name('settings.post');

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
        Route::get('/detay/{id?}', 'detail')->name('.detail');
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
    Route::controller(DanismanController::class)->name('superadmin.')->prefix('superadmin')->group(function(){
        Route::get('/danisman/ayarlari/{id?}','settings')->name('danisman.settings');
        Route::post('/danisman/ayarlari','settings_post')->name('danisman.settings.post');
    });

    
    // ÖĞRENCİ CONTROLLER 
    Route::controller(StudentController::class)->name('ogrenci')->prefix('ogrenci')->group(function () {
        Route::get('/liste', 'index')->name('.list');
        Route::get('/ekle', 'create')->name('.add');
        Route::get('/detay/{id?}', 'detail')->name('.detail');
        Route::post('/ekle', 'store')->name('.store');
        Route::get('/duzenle/{id?}', 'edit')->name('.edit');
        Route::post('/guncelle', 'update')->name('.update');
        Route::get('/sil/{id?}', 'destroy')->name('.destroy');

        Route::get('/guvenlik-ayarlari/{id?}','guvenlik_ayari')->name('.guvenlik');
        Route::post('/guvenlik-ayarlari','guvenlik_ayari_post')->name('.guvenlik.post');
    });
    Route::controller(StudentController::class)->group(function () {
        Route::get('ogrenci/uniler/{id?}', 'uni_getir')->name('uni.getir');
        Route::get('ogrenci/fakulteler/{id?}', 'fakulte_getir')->name('fakulte.getir');
    });

        // ÖĞRENCİ BORÇ İŞLEMLERİ
    Route::controller(SuperadminOgrMuhasebeController::class)->prefix('borc')->name('.borc')->group(function(){
        Route::get('/listesi','borc_list')->name('.list');
    });

       // ÖĞRENCİ TAHSİLAT İŞLEMLERİ
       Route::controller(SuperadminOgrMuhasebeController::class)->prefix('tahsilat')->name('.tahsilat')->group(function(){
        Route::get('/listesi','tahsilat_list')->name('.list');
    });


    // DANIŞMAN MUHASEBE İŞLEMLERİ
    Route::controller(DanismanMuhasebeController::class)->prefix('danisman/muhasebe')->name('danisman_muhasebe')->group(function(){
        Route::get('/odeme-yap','odeme_yap')->name('.odeme_yap');
        Route::get('/odeme-listesi','odeme_list')->name('.odeme_list');
        Route::post('/odeme-yap','odeme_yap_post')->name('.odeme_yap.post');
    });

    // EKSTRE İŞLEMLERİ
    Route::controller(EkstreController::class)->prefix('ekstre')->name('ekstre')->group(function(){
        Route::get('add','add')->name('.add');
        Route::post('list','list')->name('.list');
    });
});





// DANIŞMAN İŞLEMLERİ
Route::get('danisman/login', [DanismanAuthController::class, 'login'])->name('danisman.login');
Route::post('danisman/login', [DanismanAuthController::class, 'login_post'])->name('danisman.login.post');

Route::prefix('danisman')->name('danisman')->middleware('auth:danisman')->group(function () {
    Route::get('/logout', [DanismanAuthController::class, 'logout'])->name('.logout');

    Route::get('/', [DanismanHomeController::class, 'index'])->name('.index');

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
        Route::get('/sil/{id?}', 'destroy')->name('.destroy');
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
    Route::controller(BasvuruController::class)->name('.basvurulcak')->prefix('basvurulacak')->group(function(){
        Route::get('/degistir/{id?}','statu_degis')->name('.statu.degis');
        Route::get('/durum/onayla/{id?}','durum_onayla')->name('.durum.onayla');
        Route::get('/durum/reddet/{id?}','durum_reddet')->name('.durum.reddet');
    });


    // ÖĞRENCİ BORÇ İŞLEMLERİ
    Route::controller(OgrMuhasebeController::class)->prefix('borc')->name('.borc')->group(function(){
        Route::get('/ekle','borc_ekle')->name('.ekle');
        Route::post('/ekle','borc_ekle_post')->name('.ekle.post');
        Route::get('/listesi','borc_list')->name('.list');
        Route::get('/duzenle/{id?}','borc_duzenle')->name('.duzenle');
        Route::post('/duzenle','borc_duzenle_post')->name('.duzenle.post');
        Route::get('/sil/{id?}','borc_destroy')->name('.sil');
    });

    // TAHSİLAT İŞEMLERİ
    Route::controller(OgrMuhasebeController::class)->prefix('tahsilat')->name('.tahsilat')->group(function(){
        Route::get('/liste','tahsilat_list')->name('.list');
        Route::get('/ekle','tahsilat_ekle')->name('.ekle');
        Route::post('/ekle','tahsilat_ekle_post')->name('.ekle.post');
        Route::get('/duzenle/{id?}','tahsilat_duzenle')->name('.duzenle');
        Route::post('/duzenle','tahsilat_duzenle_post')->name('.duzenle.post');
        Route::get('/sil/{id?}','tahsilat_sil')->name('.sil');
    });
});




// ÖĞRENCİ İŞLEMLERİ
Route::get('/ogrenci',[OgrenciAuthController::class,'login'])->name('ogrenci.login');
Route::post('/ogrenci',[OgrenciAuthController::class,'loginPost'])->name('ogrenci.login.post');
Route::get('/',[OgrenciHomeController::class,'index'])->middleware('auth:ogrenci')->name('ogrenci.index');
