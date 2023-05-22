<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;

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
    return view('welcome');
});
// Route::get('/', function () {
//     return view('landing_page/landing');
// });
Route::get('/landing', function () {
    return view('landing_page/landing');
});

Route::get('/login',[ AuthController::class, 'login'])->name('login');
Route::post('/login_masuk',[ AuthController::class, 'loginMasuk'])->name('login_masuk');

Route::get('/register',[ AuthController::class, 'register'])->name('register');                       //view untuk register
Route::post('/simpan_register', [AuthController::class, 'registerPost'])->name('simpan_register');   //untuk menyimpan

Route::get('/pengajuan', function () {return view('pengajuan/index');});
Route::get('/form', function () {return view('pengajuan/form');})->name('form');
Route::get('/galeri', function () {return view('galeri/index');});
Route::get('/forum_diskusi', function () {return view('forum_diskusi/index');});
Route::get('/forum_diskusi2', function () {return view('forum_diskusi/index cadangan');});

Route::get('/wisata', function () {return view('wisata/index');});

// Route::get('/landingpage', function () {
//     return view('landing_page/landing');
// });

//untuk halaman admin
Route::get('/admin', function() {return view('admin/index');});
Route::get('/admin/charts', function () {
    return view('admin.charts');
})->name('charts');

Route::get('/admin/perangkatdesa', function() {return view('admin/perangkat_desa/show');});
Route::get('/admin/tambah/perangkat', function() {return view('admin/perangkat_desa/tambah');});
Route::post('/submit-form', 'FormController@submit')->name('submit-form');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
