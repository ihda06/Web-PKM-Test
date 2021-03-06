<?php

use App\Models\Tim;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ComblanginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;

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
    return view('homepage', [
        "title" => "Home"
    ]);
});

Route::get('/coaching', function () {
    return view('coaching', [
        "title" => "Coaching"
    ]);
});

Route::get('/comblangin', [ComblanginController::class, 'index']);

Route::get('/blog', [PostController::class, 'index']);

Route::get('/comingsoon', function () {
    return view('comingsoon', [
        "title" => "coming soon",
    ]);
});

//single post
Route::get('/blog/{post:slug}', [PostController::class, 'show']);

//logout
Route::middleware('auth')->group(function(){
    Route::post('/logout', LogoutController::class);
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::get('/tim', [ProfileController::class, 'tim']);
    Route::get('/daftar', [ComblanginController::class, 'register']);
});

//auth
Route::middleware('guest')->group(function(){
    Route::get('/login', [LoginController::class, 'index']);
    Route::post('/login', [LoginController::class, 'store']);
    
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/daftar', [ComblanginController::class, 'daftar']);
});
