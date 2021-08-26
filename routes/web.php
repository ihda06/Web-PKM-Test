<?php

use App\Models\Tim;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ComblanginController;

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

//auth
Route::get('/signin', [SigninController::class, 'index']);
Route::post('/signin', [SigninController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
