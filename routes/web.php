<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;

// Home page
Route::view('/', 'home');

// Contact page
Route::view('contact', 'contact');

// Jobs resource routes 
Route::resource('jobs', JobController::class);

// Register page
Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

// Login page
Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
