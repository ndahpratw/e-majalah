<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KontenController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\Layout1Controller;
use App\Http\Controllers\Layout2Controller;
use App\Http\Controllers\Layout3Controller;
use App\Http\Controllers\Layout4Controller;
use App\Http\Controllers\Layout5Controller;
use App\Http\Controllers\Layout6Controller;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DetailKontenController;
use App\Http\Controllers\PengajuanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages/user/index');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/daftar-isi', [KontenController::class, 'index_user']);


Route::group(['middleware' => 'cekrole:Admin,Mitra'], function() {
    Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
    Route::resource('/komplain', ContactUsController::class)->names('komplain');
    
    Route::resource('/detail-konten', DetailKontenController::class)->names('detail-konten');

    Route::resource('/pengajuan', PengajuanController::class)->names('pengajuan');
    Route::put('/pengajuan/admineditstatus/{id}', [PengajuanController::class, 'admineditstatus'])->name('pengajuan.admineditstatus');
    Route::put('/pengajuan/admineditbuktibayar/{id}', [PengajuanController::class, 'admineditbuktibayar'])->name('pengajuan.admineditbuktibayar');
    Route::put('/pengajuan/admineditvalidasipembayaran/{id}', [PengajuanController::class, 'admineditvalidasipembayaran'])->name('pengajuan.admineditvalidasipembayaran');
});
Route::group(['middleware' => 'cekrole:Admin'], function() {
    Route::resource('/data-user', UserController::class)->names('data-user');
    Route::resource('/konten', KontenController::class)->names('konten');
    Route::put('/pengajuan/{id}/update-status', [PengajuanController::class, 'updateStatus'])->name('pengajuan.admineditstatus');
});
Route::get('/layout/carijudul/{judul}', [LayoutController::class,'carijudul'])->name('layout.carijudul');
Route::resource('/layout', LayoutController::class)->names('layout');
Route::resource('/layout1', Layout1Controller::class)->names('layout1');
Route::resource('/layout2', Layout2Controller::class)->names('layout2');
Route::resource('/layout3', Layout3Controller::class)->names('layout3');
Route::resource('/layout4', Layout4Controller::class)->names('layout4');
Route::resource('/layout5', Layout5Controller::class)->names('layout5');
Route::resource('/layout6', Layout6Controller::class)->names('layout6');

