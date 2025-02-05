<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


//Front Route
Route::view('/', 'front.index')->name('home');

//Dashboard Route
Route::group(['prefix' => '/dashboard'], function () {
    Route::get('/', function () {
        return view('dashboard.index');
    });
});
//Auth

Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', function () {
    return view('auth.login');
});
