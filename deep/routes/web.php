<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\DiscoveriesController;
use App\Http\Controllers\IdeasController;
use App\Http\Controllers\IdeaDiscoveryController;
use App\Http\Controllers\CommentsController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::put('/user/{user}', [UserController::class, 'update'])->name('user.update');
    Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::get('/user', [UserController::class, 'index'])->name('user.index'); 
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user', [UserController::class, 'store'])->name('user.store');
});

Route::middleware(['auth'])->group(function () {
    Route::put('/discoveries/{discoveries}', [DiscoveriesController::class, 'update'])->name('discoveries.update');
    Route::get('/discoveries/{discoveries}/edit', [DiscoveriesController::class, 'edit'])->name('discoveries.edit');
    Route::delete('/discoveries/{discoveries}', [DiscoveriesController::class, 'destroy'])->name('discoveries.destroy');
    Route::get('/discoveries', [DiscoveriesController::class, 'index'])->name('discoveries.index'); 
    Route::get('/discoveries/create', [DiscoveriesController::class, 'create'])->name('discoveries.create');
    Route::post('/discoveries', [DiscoveriesController::class, 'store'])->name('discoveries.store');
});

Route::middleware(['auth'])->group(function () {
    Route::put('/ideas/{ideas}', [IdeasController::class, 'update'])->name('ideas.update');
    Route::get('/ideas/{ideas}/edit', [IdeasController::class, 'edit'])->name('ideas.edit');
    Route::delete('/ideas/{ideas}', [IdeasController::class, 'destroy'])->name('ideas.destroy');
    Route::get('/ideas', [IdeasController::class, 'index'])->name('ideas.index'); 
    Route::get('/ideas/create', [IdeasController::class, 'create'])->name('ideas.create');
    Route::post('/ideas', [IdeasController::class, 'store'])->name('ideas.store');
});

Route::middleware(['auth'])->group(function () {
    Route::put('/idea_discovery/{idea_discovery}', [IdeaDiscoveryController::class, 'update'])->name('idea_discovery.update');
    Route::get('/idea_discovery/{idea_discovery}/edit', [IdeaDiscoveryController::class, 'edit'])->name('idea_discovery.edit');
    Route::delete('/idea_discovery/{idea_discovery}', [IdeaDiscoveryController::class, 'destroy'])->name('idea_discovery.destroy');
    Route::get('/idea_discovery', [IdeaDiscoveryController::class, 'index'])->name('idea_discovery.index'); 
    Route::get('/idea_discovery/create', [IdeaDiscoveryController::class, 'create'])->name('idea_discovery.create');
    Route::post('/idea_discovery', [IdeaDiscoveryController::class, 'store'])->name('idea_discovery.store');
});

Route::middleware(['auth'])->group(function () {
    Route::put('/comments/{comments}', [CommentsController::class, 'update'])->name('comments.update');
    Route::get('/comments/{comments}/edit', [CommentsController::class, 'edit'])->name('comments.edit');
    Route::delete('/comments/{comments}', [CommentsController::class, 'destroy'])->name('comments.destroy');
    Route::get('/comments', [CommentsController::class, 'index'])->name('comments.index'); 
    Route::get('/comments/create', [CommentsController::class, 'create'])->name('comments.create');
    Route::post('/comments', [CommentsController::class, 'store'])->name('comments.store');
});

require __DIR__.'/auth.php';