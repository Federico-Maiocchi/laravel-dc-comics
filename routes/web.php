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

use App\Http\Controllers\Guest\PageController;

Route::get('/', [PageController::class, 'index'])->name('home');

use App\Http\Controllers\ComicController;

Route::get('/comics',[ComicController::class,'index'])->name('comics.index');

Route::get('/comics/{comic}',[ComicController::class,'show'])->name('comic.show');
