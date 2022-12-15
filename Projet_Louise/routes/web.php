<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BioController;

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

//it allows to create routes => sail artisan route:list --name

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::resource('posts', PostController::class)->except('index');
    Route::resource('bio', BioController::class)->except('index');
    //posts
    Route::get('/posts', [PostController::class, 'index'])->name('post.index');
    //biographie
    Route::get('/bio', [BioController::class, 'index'])->name('bio.index');
    Route::get('/bio/{bio}', [BioController::class, 'indexBio'])->name('bio.indexBio');
    //authors
    Route::get('/authors/{author:name}', [PostController::class, 'indexByAuthor'])->name('post.indexByAuthor');
    //categories
    Route::get('/categories/{category}', [PostController::class, 'indexByCategory'])->name('post.indexByCategory');
    //dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
