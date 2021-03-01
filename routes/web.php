<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControlle;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;

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

Route::get('home',function() {
    return view('home');
});

Route::get('about-us',function() {
    return view('about-us');
});

Route::resource('contact-us',ContactController::class);

Route::group(['prefix' => 'program'], function () {
    Route::get('/', [ProgramController::class, 'index'])->name('program.index');
});

Route::group(['prefix' => 'product'], function () {
    Route::get('/', [ProductController::class, 'index'])->name('product.index');
});

Route::get('/news', [NewsController::class, 'index'])->name('news.index');