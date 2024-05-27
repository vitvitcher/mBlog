<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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
// Route::resource('news',NewsController::class);
Route::resource('categories',CategoryController::class);
Route::resource('comments',CommentController::class);
Route::resource('posts',PostController::class);

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\NewsController::class, 'index'])->name('home');
Route::get('/news/{id}', [App\Http\Controllers\NewsController::class, 'show'])->name('news.show');
Route::get('/complete-registration', [App\Http\Controllers\Auth\RegisterController::class, 'completeRegistration'])->name('complete-registration');
Route::middleware(['2fa'])->group(function () {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'],)->name('home');
    Route::post('/2fa', function () {
    return redirect(route('home'));
    })->name('2fa');
    });
    
    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->middleware('auth')->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
     
        return redirect('/home');
    })->middleware(['auth', 'signed'])->name('verification.verify');    
    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();
     
        return back()->with('message', 'Verification link sent!');
    })->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Auth::routes();
