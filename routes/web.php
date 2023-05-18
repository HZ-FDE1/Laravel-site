<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\SpotifyController;
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

Route::get('/posts/{post}', [PostsController::class, 'show']);

Route::get('/', [WelcomeController::class, 'show'])->name('home');

Route::get('/profile', [ProfileController::class, 'show']);

Route::resource('/dashboard', DashboardController::class);

Route::resource('/faq', FaqController::class);

Route::resource('/articles', ArticlesController::class);

Route::resource('/grades', GradeController::class);

Route::get('/blog',[BlogController::class, 'show']);

Route::resource('/spotify', SpotifyController::class);


Route::get('/test-500', function () {
    throw new Exception("Test 500 Exception");
});


