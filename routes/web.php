<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\PesananController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TiketController;
use App\Models\Pesanan;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('tiket',[TiketController::class,'index'])->name('tiket');
Route::get('pesan',[TiketController::class,'pesan'])->middleware('auth')->name('pesan');
Route::get('tiket-anda',[TiketController::class,'tiketAnda'])->middleware('auth')->name('tiket.anda');
Route::get('tiket/{id}/datang',[TiketController::class,'tiketAnda'])->middleware('auth')->name('tiket.datang');
Route::post('pesan',[TiketController::class,'simpan']);
Route::post('pesan/bayar',[TiketController::class,'bayar'])->name('bayar.simpan');

Route::get('admin/dasboard', function(){
return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('admin/pesanan', [PesananController::class, 'index'])->name('admin.pesanan');

Auth::routes();

