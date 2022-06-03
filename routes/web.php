<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\KontakController;
use App\Http\Controllers\Frontend\LayananController;
use App\Http\Controllers\Frontend\PortofolioController;
use App\Http\Controllers\Frontend\TentangController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\DetailsController;

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

// Route::get('/', function () {
//     return view('home');
// });

// Auth::routes();


Route::namespace('Home')->group(function() {

    Route::get('/', [HomeController::class, 'index']);
    Route::get('/tentang', [TentangController::class, 'index']);
    Route::get('/layanan', [LayananController::class, 'index']);
    Route::get('/portofolio', [PortofolioController::class, 'index']);
    Route::get('/blog', [BlogController::class, 'index']);
    Route::get('/blog/details', [DetailsController::class, 'index']);
    Route::get('/kontak', [KontakController::class, 'index']);

});


// Route::namespace('Dashboard')->group(function(){
//     Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');


// });