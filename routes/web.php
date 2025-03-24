<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
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
Route::get('/', [PostController::class, 'index'])->name('post');

Route::get('post/{slug}', [PostController::class, 'show'])->name('post.show');

Route::resource('admin', AdminController::class);

Route::get('admin/delete/{id}', [AdminController::class, 'destroy'])->name('delete');
