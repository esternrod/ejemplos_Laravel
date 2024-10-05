<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\UserController;
/*
Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return view('galeria.index');
    });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Google Social Login */
Route::get('/login/google',[App\Http\Controllers\GoogleLoginController::class,'redirect']);
Route::get('/login/google.callback',[App\Http\Controllers\GoogleLoginController::class,'callback']);
/*->name('login.google-callback')
->name('login.google-redirect')
*/
Route::controller(UserController::class)->group(function(){
    Route::get('users', 'index');
    Route::get('users-export', 'export')->name('users.export');
    });
    