<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;

// Home page
Route::view('/', 'home');

// Contact page
Route::view('contact', 'contact');

// Jobs resource routes 
Route::resource('jobs', JobController::class);

// Register page
Route::get('/register', [RegisterUserController::class, 'create'])->name('register');

// Login page
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
