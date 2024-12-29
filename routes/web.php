<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ImagesGaleriController;
use App\Http\Controllers\ImagesMenuController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Arr;
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


Route::get('/', [HomeController::class, 'index'])->name('sliders.index');
Route::get('/tentang', [TentangController::class, 'index']);
Route::get('/menu', [MenuController::class, 'index']);
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeries.index');
Route::get('/blog', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blogs.show');
Route::get('/contact', [ContactController::class, 'index']);

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('/sliders', SliderController::class)->middleware('auth');
Route::resource('/galeries', ImagesGaleriController::class)->middleware('auth');
Route::resource('/blogs', BlogsController::class)->middleware('auth');
// Route::get('/blogs/checkSlug', [BlogsController::class, 'checkSlug'])->middleware('auth');
Route::resource('/menus', ImagesMenuController::class)->middleware('auth');