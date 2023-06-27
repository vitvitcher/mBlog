<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
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
Route::resource('users',UserController::class);
Route::resource('news',NewsController::class);
Route::resource('categories',CategoryController::class);
Route::resource('comments',CommentController::class);
Route::resource('posts',PostController::class);
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\NewsController::class, 'index'])->name('home');

Auth::routes();
