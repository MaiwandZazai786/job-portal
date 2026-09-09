<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

// Home page
Route::view('/', 'home');

// Contact page
Route::view('contact', 'contact');

// Jobs resource routes 
Route::resource('jobs', JobController::class);
