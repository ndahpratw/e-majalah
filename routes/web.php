<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('pages/admin/dashboard');
});
Route::get('/daftar-isi', function () {
    return view('pages/user/daftarisi');
});

Route::get('/layout1', function () {
    return view('pages/user/layout-majalah/layout1');
});
Route::get('/layout11', function () {
    return view('pages/user/layout-majalah/layout_satu');
});
Route::get('/layout2', function () {
    return view('pages/user/layout-majalah/layout2');
});
Route::get('/layout3', function () {
    return view('pages/user/layout-majalah/layout3');
});
Route::get('/layout4', function () {
    return view('pages/user/layout-majalah/layout4');
});
Route::get('/layout5', function () {
    return view('pages/user/layout-majalah/layout5');
});
Route::get('/layout6', function () {
    return view('pages/user/layout-majalah/layout6');
});

Route::resource('/data-user', UserController::class)->names('data-user');
