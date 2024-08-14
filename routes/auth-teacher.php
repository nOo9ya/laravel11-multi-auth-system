<?php

use App\Http\Controllers\Teacher\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Teacher\Auth\RegisteredTeacherController;
use App\Http\Controllers\Teacher\ProfileController;
use Illuminate\Support\Facades\Route;

Route::name('teacher.')->prefix('teacher')->group(function () {

    Route::middleware('guest:teacher')->group(function () {
        Route::get('register', [RegisteredTeacherController::class, 'create'])
            ->name('register');

        Route::post('register', [RegisteredTeacherController::class, 'store']);

        Route::get('login', [AuthenticatedSessionController::class, 'create'])
            ->name('login');

        Route::post('login', [AuthenticatedSessionController::class, 'store']);
    });


    Route::middleware('auth:teacher')->group(function () {
        Route::get('/dashboard', function () {
            return view('teacher.dashboard');
        })->middleware(['verified'])->name('dashboard');

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
            ->name('logout');
    });

});

