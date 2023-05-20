<?php

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
    return view('welcome');
});
// Route::get('/', function () {
//     return view('landing_page/landing');
// });
Route::get('/landing', function () {
    return view('landing_page/landing');
});

Route::get('/auth', function () {return view('auth/login');});

Route::get('/pengajuan', function () {return view('pengajuan/index');});
Route::get('/form', function () {return view('pengajuan/form');})->name('form');
Route::get('/galeri', function () {return view('galeri/index');});
Route::get('/forum_diskusi', function () {return view('forum_diskusi/index');});
Route::get('/forum_diskusi2', function () {return view('forum_diskusi/index cadangan');});
<<<<<<< HEAD
Route::get('/admin', function() {return view('admin/index');});
=======

Route::get('/wisata', function () {return view('wisata/index');});
>>>>>>> 21c0cc2f2debc9648342e8f5be9a22ff4775b8a4

// Route::get('/landingpage', function () {
//     return view('landing_page/landing');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
