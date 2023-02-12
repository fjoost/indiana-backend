<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Route::view('/', 'welcome')->name('welcome');
Route::view('/contact', 'contact')->name('contact');
Route::get('/blog', [PostController::class, 'index'])->name('blog.index');
Route::get('/blog/{post}', [PostController::class, 'show'])->name('blog.show');
Route::view('/about', 'about')->name('about');
