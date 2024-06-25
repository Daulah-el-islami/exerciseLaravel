<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
//     return view('posts.index');
// });

Route::get('/', [PostController::class, 'index']);

// Route untuk resource post
Route::resource('/posts', PostController::class);

// Route untuk halaman statis
Route::get('/view/{code}', [PostController::class, 'view'])->name('posts.view');
Route::get('/add', [PostController::class, 'add'])->name('posts.add');
Route::get('/edit/{code}', [PostController::class, 'edit'])->name('posts.edit');
Route::get('/login', [PostController::class, 'login'])->name('posts.login');

