<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;

Route::get('/', function(){
    return view('index');
});

Route::controller(RegisterController::class)->group(function(){
  
    Route::get('/register', 'create')->name('register');
    Route::post('/register', 'store');
});  

Route::controller(LoginController::class)->group(function(){
        
    Route::get('/login', 'create')->name('login');
    Route::post('/login', 'store');
    Route::delete('/logout', 'destroy')->name('logout');
});  

Route::controller(PostController::class)
    ->middleware('auth')->group(function(){

        Route::get('/posts', 'index')->name('posts');

        Route::get('/posts/create', 'create')->name('create');

        Route::post('/posts/create', 'store')->name('store');

        Route::get('/posts/{post}/edit', 'edit')->name('edit'); 

        Route::patch('/posts/{post}/update', 'update')->name('update');
});

