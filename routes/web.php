<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\dashboard\CategoryController;
use App\Http\Controllers\dashboard\DepartmanController;
use App\Http\Controllers\dashboard\SupervisorController;
use App\Http\Controllers\dashboard\UserController;
use App\Http\Controllers\dashboard\VamController;
use App\Http\Controllers\front\IndexController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// event(new \App\Events\UserSubscribed());

//Front Routes
Route::group([], function () {
    Route::resource('/', IndexController::class);

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

//Dashboard Routes
Route::prefix('/dashboard')->middleware('auth')->group(function () {
    Route::middleware('role:admin')->group(function () {

        Route::resource('category', CategoryController::class);
        Route::resource('departman', DepartmanController::class);
        Route::resource('supervisor', SupervisorController::class);
        // Route::resource('users', UserController::class);

    });

    Route::middleware('role:author|admin')->group(function () {
        // Route::resource('vam', VamController::class);
    });

    Route::middleware('role:author|manager|admin')->group(function () {
        Route::view('/', 'dashboard.index')->name('dashboard');
        Route::resource('users', UserController::class);
        Route::get('/users/edit', [UserController::class, 'edit'])->name('users.edit');
    });
});

Route::middleware('role:author|admin|humanResources|manager|subscriber')->group(
    function () {
        Route::resource('/vam', VamController::class);
    }
);

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

//Front Auth Routes
Route::prefix('/auth')->middleware('guest')->group(function () {
    //Auth Route
    Route::get('/register', [AuthController::class, 'index'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});
