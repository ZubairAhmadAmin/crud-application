<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TemplateController;
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

// Route::get('/', [HomeController::class, 'index']);

Route::post('/store', [HomeController::class, 'store']);

Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('edit');

Route::put('/update/{id}', [HomeController::class, 'update'])->name('update');

Route::get('/delete/{id}', [HomeController::class, 'delete'])->name('delete');

Route::resource('home', HomeController::class) ;

Route::resource('about', AboutController::class);

Route::get('/contact', [ContactController::class, 'index']);

// Second Project
Route::get('/', [PostController::class, 'index'])->name('post');

Route::get('post/{slug}', [PostController::class, 'show'])->name('post.show');

Route::resource('admin', AdminController::class);

Route::get('admin/delete/{id}', [AdminController::class, 'destroy'])->name('delete');




// Route::get('/', function() {
//     return 'Get Method';
// });

// Route::get('/post', function() {
//     return 'Post Method';
// });

// Route::get('/put', function() {
//     return 'Put Method';
// });

// Route::get('/delete', function() {
//     return 'Delete Method';
// });

// Route::get('/post/{id?}', function($id = null) {
//     if($id == null) {
//         return 'All Posts';
//     }

//     return "This is Post '{$id}'";
// });

// Route::get('/', [
//     TemplateController::class,
//     'getAllPost'
// ]);

// Route::get('/post', [
//     TemplateController::class,
//     "SinglePost"
// ]);

// Route::get('/', [
//     TemplateController::class,
//     'home'
// ]);
