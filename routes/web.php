<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Route::view('/', 'welcome')->name('welcome');
Route::view('/contact', 'contact')->name('contact');

Route::resource('blog', PostController::class, [
    'names' => 'posts',
    'parameters' => ['blog' => 'post']
]);

Route::view('/about', 'about')->name('about');

Route::get('/login', function () {
    return 'Login page';
})->name('login');

Route::get('/register', function () {
    return 'Register page';
})->name('register');
