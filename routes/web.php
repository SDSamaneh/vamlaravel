<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\dashboard\ArticleController;
use App\Http\Controllers\dashboard\CategoryController;
use Illuminate\Support\Facades\Route;

//Front Routes
Route::group([], function () {
    Route::view('/', 'front.index')->name('home');
    Route::view('/article', 'front.allNews')->name('News');
    Route::view('/manual', 'front.manual')->name('manual');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

//Dashboard Routes
Route::prefix('/dashboard')->middleware('auth')->group(function () {
    Route::middleware('role:admin')->group(function () {

        Route::view('/article/edit', 'dashboard.editNews')->name('editNews');

        Route::get('/article/category', [CategoryController::class, 'index'])->name('categoryNews.index');
        Route::post('/article/category', [CategoryController::class, 'store']);

        Route::get('/article/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('/article/category/edit/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('/article/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');


        Route::resource('article', ArticleController::class);

        Route::view('/user', 'dashboard.users')->name('users');
    });

    Route::middleware('role:author|admin')->group(function () {

        Route::view('/', 'dashboard.index')->name('index');
        Route::view('/article', 'dashboard.allNews')->name('allNews');
    });
});

Route::middleware('role:author|admin|subscriber')->group(
    function () {
        Route::view('/profile', 'dashboard.profile')->name('profile');
    }
);
//Front Auth Routes
Route::prefix('/auth')->middleware('guest')->group(function () {
    //Auth Route
    Route::view('/register', 'auth.register')->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});
