<?php

use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\NewsArticleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TextController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');
Route::get('/nieuws', [WelcomeController::class, 'news'])->name('news');
Route::get('/nieuws/{article}', [WelcomeController::class, 'article'])->name('article');

Auth::routes();

Route::middleware('auth')->prefix('admin')->as('admin.')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
   
    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::post('/settings', [SettingController::class, 'store'])->name('settings.store');
    
    Route::resource('news-articles', NewsArticleController::class)->except('show');
    Route::resource('comments', CommentController::class);
    Route::resource('texts', TextController	::class)->except('show');
    Route::resource('users', UserController::class)->except('show');
});