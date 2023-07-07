<?php

use App\Http\Controllers\Beranda;
use App\Http\Controllers\HitungController;
use App\Http\Controllers\Kasir;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});
Route::get('/portofolio', function () {
    return view('portofolio');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('login',[LoginController::class,'index'])->name('login');

Route::controller(LoginController::class)->group(function(){
    Route::get('login','index')->name('login');
    Route::post('login/proses','proses');
    Route::get('logout','logout');
});

Route::group(['middleware'=>['auth']],function(){
    Route::group(['middleware' => ['cekUserLogin:1']],function(){
        Route::resource('beranda',Beranda::class);
        Route::resource('kriteria',KriteriaController::class);
        // Route::get('hitung', [HitungController::class, 'index']);
        // Route::resource('hitung',Hitung::class);
    });
    Route::group(['middleware' => ['cekUserLogin:2']],function(){
        Route::resource('kasir',Kasir::class);
    });
});
Route::get('hitung',[HitungController::class,'hitung'])->name('hitung');