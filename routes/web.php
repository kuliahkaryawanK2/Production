<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\KontakController;
use App\Http\Controllers\Frontend\LayananController;
use App\Http\Controllers\Frontend\PortofolioController;
use App\Http\Controllers\Frontend\TentangController;
use App\Http\Controllers\Frontend\BlogController;

use App\Http\Controllers\Backend\Dashboard;
use App\Http\Controllers\Backend\Portofolio;
use App\Http\Controllers\Backend\Service;
use App\Http\Controllers\Backend\Galeri;
use App\Http\Controllers\Backend\Kontak;
use App\Http\Controllers\Backend\Blog;

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

Auth::routes();


Route::namespace('Home')->group(function() {

    Route::get('/', [HomeController::class, 'index']);
    Route::get('/tentang', [TentangController::class, 'index']);
    Route::get('/layanan', [LayananController::class, 'index']);
    Route::get('/portofolio', [PortofolioController::class, 'index']);

    Route::get('/blog', [BlogController::class, 'index']);

    Route::get('/kontak', [KontakController::class, 'index']);

});


 Route::namespace('admin')->group(function(){
     // Routes Dashboard
     Route::get('/admin/dashboard', [Dashboard::class, 'index'])->name('dashboard');
     //Blog Routes
     Route::get('/admin/blog', [Blog::class, 'index'])->name('blog');
     Route::get('/admin/blog/add-blog', [Blog::class, 'addBlog'])->name('addBlog');
     Route::post('/admin/blog/add-data-blog', [Blog::class, 'addDataBlog'])->name('addDataBlog');
     Route::get('/admin/blog/detail-blog/{id}', [Blog::class, 'detailBlog'])->name('detailBlog');
     Route::get('/admin/blog/update-blog/{id}', [Blog::class, 'updateBlog'])->name('updateBlog');
     Route::post('/admin/blog/update-data-blog/{id}', [Blog::class, 'updateDataBlog'])->name('updateDataBlog');
     Route::get('/admin/blog/delete-blog/{id}', [Blog::class, 'deleteBlog'])->name('deleteBlog');
     // Routes Kontak Masuk
     Route::get('/admin/kontak-masuk', [Kontak::class, 'index'])->name('kontak');
     Route::get('/admin/kontak-masuk/detail-kontak/{id}', [Kontak::class, 'detailKontak'])->name('detailKontak');
     Route::get('/admin/kontak-masuk/delete-kontak/{id}', [Kontak::class, 'deleteKontak'])->name('deleteKontak');
     // Routes Galeri Portofolio
     Route::get('/admin/galeri-foto', [Galeri::class, 'index'])->name('galeri');
     Route::get('/admin/galeri/add-galeri', [Galeri::class, 'addGaleri'])->name('addGaleri');
     Route::post('/admin/galeri/add-data-galeri', [Galeri::class, 'addDataGaleri'])->name('addDataGaleri');
     Route::get('/admin/galeri/detail-galeri/{id}', [Galeri::class, 'detailGaleri'])->name('detailGaleri');
     Route::get('/admin/galeri/update-galeri/{id}', [Galeri::class, 'updateGaleri'])->name('updateGaleri');
     Route::post('/admin/galeri/update-data-galeri/{id}', [Galeri::class, 'updateDataGaleri'])->name('updateDataGaleri');
     Route::get('/admin/galeri/delete-galeri/{id}', [Galeri::class, 'deleteGaleri'])->name('deleteGaleri');
     //Routes Portofolio
     Route::get('/admin/portofolio', [Portofolio::class, 'index'])->name('portofolio');
     //Routes Service
     Route::get('/admin/service', [Service::class, 'index'])->name('service');

     Route::get('/admin/galeri-foto', [Galeri::class, 'index'])->name('galeri');




 });