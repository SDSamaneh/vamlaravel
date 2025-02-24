<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\dashboard\CategoryController;
use Illuminate\Support\Facades\Route;

//Front Routes
Route::group([], function () {
    Route::view('/', 'front.index')->name('home');
    Route::view('/news', 'front.allNews')->name('News');
    Route::view('/manual', 'front.manual')->name('manual');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

//Dashboard Routes
Route::prefix('/dashboard')->middleware('auth')->group(function () {
    Route::middleware('role:admin')->group(function () {

        // Route::get('/', function () {
        //     return view('dashboard.index');
        // });
        // Route::get('/news', function () {
        //     return view('dashboard.allNews');
        // });
        Route::view('/news/create', 'dashboard.createNews')->name('createNews');

        Route::view('/news/edit', 'dashboard.editNews')->name('editNews');


        Route::get('/news/category', [CategoryController::class, 'index'])->name('categoryNews.index');
        Route::post('/news/category', [CategoryController::class, 'store']);

        Route::get('/news/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('/news/category/edit/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('/news/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');


        Route::view('/user', 'dashboard.users')->name('users');
    });

    Route::middleware('role:author|admin')->group(function () {

        Route::view('/', 'dashboard.index')->name('index');
        Route::view('/news', 'dashboard.allNews')->name('allNews');
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
