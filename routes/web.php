<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ChartController;

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

Route::get('/', function () {
    return view('beranda');
});

Route::get('/', [DashboardController::class, 'index']);
// Route::get('/', [DashboardController::class, 'apiberita']);
// Route::get('/artikel-detail/{id}', [DashboardController::class, 'details']);


// Route::resource('/profile', ProfileController::class);
Route::get('/testimoni', function () {
    return view('testimoni');
});

// Route::get('/artikel', function () {
//     return view('artikel');
// });
Route::get('/artikel', [DashboardController::class, 'artikelkesehatan']);
// Route::get('/artikel', [DashboardController::class, 'post_artikel']);
// Route::get('/artikel', [DashboardController::class, 'artikelkesehatan']);
// Route::get('/artikel-detail/{slug}', [DashboardController::class, 'show']);
Route::get('/artikel-detail/{slug}', [DashboardController::class, 'getpengunjungartikels']);
Route::get('whatsapp-link', [DashboardController::class, 'getwas']);
Route::get('/artikel-detail-db/{id}', [DashboardController::class, 'showartikeldb']);
// Route::get('/artikel-detail/{id}', [DashboardController::class, 'artikelkesehatan_detail']);

Route::get('/artikel-kesehatan', function () {
    return view('artikel-kesehatan');
});
// Route::get('/artikel-detail/{id}', [DashboardController::class, 'post_artikel']);


Route::get('/detail-artikel', function () {
    return view('artikel-detail');
});

//GRAFIKKKKKKKKKKKKKKKKKKKKKKKKK
Route::get('getgrafik', function () {
    return view('grafik');
});
// Route::get('/grafik', [DashboardController::class, 'getgrafik']);

Route::get('/grafik', [ChartController::class, 'index']);
// Route::get('/grafik', [ChartController::class, 'viewsWa']);

Route::get('/registrasi-pasien', [DashboardController::class, 'pasien_store']);



Route::get('/kontak', function () {
    return view('kontak');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('/logout');
    })->name('dashboard');
});
