<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('/dashboard');
})->middleware('auth');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/videos', [App\Http\Controllers\DashboardController::class, 'videos'])->name('videos');
Route::get('/imgs', [App\Http\Controllers\DashboardController::class, 'images'])->name('images');

Route::get('/files', [App\Http\Controllers\DashboardController::class, 'files'])->name('files');
Route::get('/categorie-{id}', [App\Http\Controllers\DashboardController::class, 'categorie'])->name('categorie');

Route::get('/profile', [App\Http\Controllers\DashboardController::class, 'profile'])->name('profile');
Route::get('/uploadcontent', [App\Http\Controllers\DashboardController::class, 'uploadcontent'])->name('uploadcontent');

Route::get('/admin', [App\Http\Controllers\DashboardController::class, 'admin'])->name('admin');

Route::post('/storevideo', [App\Http\Controllers\DashboardController::class, 'storevideo'])->name('storevideo');

Route::post('/storeimages', [App\Http\Controllers\DashboardController::class, 'storeimages'])->name('storeimages');
Route::post('/storemedia', [App\Http\Controllers\DashboardController::class, 'storemedia'])->name('storemedia');


Route::post('/addcategory', [App\Http\Controllers\DashboardController::class, 'addcategory'])->name('addcategory');


