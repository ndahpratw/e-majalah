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
    return view('pages/user/main');
});

Route::get('/dashboard', function () {
    return view('pages/admin/dashboard');
});
Route::get('/daftarisi', function () {
    return view('pages/user/daftarisi');
});
Route::get('/content1', function () {
    return view('pages/user/content1');
});
Route::get('/content2', function () {
    return view('pages/user/content2');
});
Route::get('/layout1', function () {
    return view('pages/user/layout1');
});
Route::get('/layout2', function () {
    return view('pages/user/layout2');
});
Route::get('/layout3', function () {
    return view('pages/user/layout3');
});
Route::get('/layout4', function () {
    return view('pages/user/layout4');
});
Route::resource('/data-user', UserController::class)->names('data-user');
