<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PendapatanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\ChartController;

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
Route::get('/belanja', function () {
    return view('landing_page/belanja');
});

Route::get('/belanja', function () {return view('landing_page/belanja');});
Route::get('/chart', [ChartController::class, 'index']);
Route::get('/chart/data', [ChartController::class, 'getData']);
Route::get('/chart/dataa', [ChartController::class, 'getDataa']);


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

Route::get('/forum_diskusi', function () {return view('forum_diskusi/index');});
Route::get('/forum_diskusi2', function () {return view('forum_diskusi/index cadangan');});
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/pendapatan', [PendapatanController::class, 'index'])->name('admin.pendapatan.anggaran');
Route::get('/admin/pendapatan/filter', [PendapatanController::class, 'filter'])->name('pendapatan.filter');
Route::delete('/admin/pendapatan/{id}', [PendapatanController::class, 'destroy'])->name('pendapatan.destroy');
Route::put('/admin/pendapatan/{id}', [PendapatanController::class, 'update'])->name('pendapatan.update');
Route::get('/admin/pendapatan', [PendapatanController::class, 'index'])->name('pendapatan.per-tahun');
Route::get('/admin/pendapatan/add', [PendapatanController::class, 'create'])->name('admin.tambahpendapatan.anggaran');
Route::post('/admin/pendapatan', [PendapatanController::class, 'store'])->name('pendapatan.store');

Route::get('/admin/pengeluaran', [PengeluaranController::class, 'index'])->name('admin.pengeluaran.anggaran');
Route::get('/admin/pengeluaran/filter', [PengeluaranController::class, 'filter'])->name('pengeluaran.filter');
Route::delete('/admin/pengeluaran/{id}', [PengeluaranController::class, 'destroy'])->name('pengeluaran.destroy');
Route::put('/admin/pengeluaran/{id}', [PengeluaranController::class, 'update'])->name('pengeluaran.update');
Route::get('/admin/pengeluaran', [PengeluaranController::class, 'index'])->name('pengeluaran.per-tahun');
Route::get('/admin/pengeluaran/add', [PengeluaranController::class, 'create'])->name('admin.tambahpengeluaran.anggaran');
Route::post('/admin/pengeluaran', [PengeluaranController::class, 'store'])->name('pengeluaran.store');