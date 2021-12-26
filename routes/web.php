<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuruController;
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

Route::get('/', [HomeController::class,'index']);
Route::get('/home/about/{id}', [HomeController::class,'about']);
Route::get('/guru', [HomeController::class,'index']);

Route::get('/guru', function () {
    return view('v_guru');
});
Route::get('/siswa', function () {
    return view('v_siswa');
});
Route::get('/user', function () {
    return view('v_user');
});

// Route::view('/guru'.'v_guru');
// Route::view('/siswa'.'v_siswa');
// Route::view('/user'.'v_user');