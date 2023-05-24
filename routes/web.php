<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PerangkatDesaController;
use App\Http\Controllers\PostController;
use App\Models\PerangkatDesa;
use Illuminate\Contracts\Cache\Store;

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

Route::get('/tes', function () {
    return view('landing_page/tes');
});
// Route::get('/', function () {
//     return view('landing_page/landing');
// });
Route::get('/landing', function () {
    return view('landing_page/landing');
});

Route::get('/auth', function () {return view('auth/login');});

Route::get('/register',[ AuthController::class, 'register'])->name('register');                       //view untuk register
Route::post('/simpan_register', [AuthController::class, 'registerPost'])->name('simpan_register');   //untuk menyimpan

Route::get('/login',[ AuthController::class, 'login'])->name('login');                       //view untuk register
Route::post('/login_masuk', [AuthController::class, 'loginMasuk'])->name('login_masuk');   //untuk menyimpan

Route::get('/pengajuan', function () {return view('pengajuan/index');});
Route::get('/pengajuan2', function () {return view('pengajuan/index cadangan');});
Route::get('/form', function () {return view('pengajuan/form');})->name('form');
Route::get('/galeri', function () {return view('galeri/index');});

Route::get('/admin', function() {return view('admin/index');});

Route::get('/wisata', function () {return view('wisata/index');});


// Route::get('/forum_diskusi', function () {return view('forum_diskusi/index');});
Route::get('/forum_diskusi2', function () {return view('forum_diskusi/index cadangan');});

Route::get('/forum_diskusi', [PostController::class, 'index'])->name('posts.index');
// cara panggil {{ route('posts.index') }}
Route::get('/forum_diskusi/{id}', [PostController::class, 'show'])->name('posts.show');
Route::post('/forum_diskusi/store', [PostController::class, 'store'])->name('posts.store');


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

Route::get('/admin/wisata', function() {return view('admin/wisata_desa/daftarwisata');});
Route::get('/admin/tambah/wisata', function() {return view('admin/wisata_desa/tambahwisata');});
// Route::post('/submit-form', 'FormController@submit')->name('submit-form');

Route::get('/navbar', function() {return view('admin/layouts/navbar');});
Route::get('/navbar2', function() {return view('newadmin/layouts/navsidebar');});
Route::get('/test', function() {return view('newadmin/layouts/tes');});
Route::get('/newadmin', function() {return view('newadmin/index');});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//CRUD Perangkat Desa
Route::get('/perangkat-desa/create-multiple', 'PerangkatDesaController@createMultiple')->name('perangkat-desa.create-multiple');
Route::post('/perangkat-desa/store-multiple', 'PerangkatDesaController@storeMultiple')->name('perangkat-desa.store-multiple');

Route::post('/admin/perangkatdesa', [PerangkatDesaController::class, 'store'])->name('perangkatdesa.store');

