<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\JabatanController;
//use App\Http\Controllers\LoginController;


//Route::get('/registrasi', [LoginController::class, 'registrasi'])->name('registrasi');
//Route::get('/login', [LoginController::class, 'halamanlogin'])->name('login');
//Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
//Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//Route::group(['middleware' => ['auth','ceklevel:admin,karyawan']], function () {
 //   Route::get('/home', [HomeController::class, 'index'])->name('home');
//});

Route::get('/', function () {
    return view('welcome');
  });

Route::get('/home', [HomeController::class, 'index']);
Route::get('/pegawai', [PegawaiController::class, 'pegawai'])->name('pegawai');
Route::get('/jabatan', [JabatanController::class, 'jabatan']);
Route::get('/pegawai/detail/{id_pegawai}', [PegawaiController::class, 'detail']);
Route::get('/pegawai/add', [PegawaiController::class, 'add']);
Route::post('/pegawai/insert', [PegawaiController::class, 'insert']);
Route::get('/pegawai/edit/{id_pegawai}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update/{id_pegawai}', [PegawaiController::class, 'update']);
Route::get('/pegawai/delete/{id_pegawai}', [PegawaiController::class, 'delete']);


Route::get('/jabatan/print', [JabatanController::class, 'print']);
Route::get('/pegawai/print', [PegawaiController::class, 'print']);
Route::get('/pegawai/printpdf', [PegawaiController::class, 'printpdf']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

