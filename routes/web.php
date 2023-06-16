<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\SpotifyController;

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

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/posts/{post}', [PostsController::class, 'show'])->middleware('auth');

Route::get('/', [WelcomeController::class, 'show'])->name('home')->middleware('auth');;

Route::resource('/faq', FaqController::class)->middleware('auth');

Route::resource('/articles', ArticlesController::class)->middleware('auth');

Route::resource('/grades', GradeController::class)->middleware('auth');

Route::get('/blog',[BlogController::class, 'show'])->middleware('auth');

Route::resource('/spotify', SpotifyController::class)->middleware('auth');

require __DIR__.'/auth.php';
