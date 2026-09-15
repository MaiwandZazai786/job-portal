<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use App\Mail\JobPosted;
use Illuminate\Support\Facades\Mail;

// Home page
Route::view('/', 'home');

// Contact page
Route::view('contact', 'contact');

// Jobs resource routes 
// Route::resource('jobs', JobController::class)
//     ->except(['index', 'show'])
//     ->middleware('auth');

Route::get('/jobs', [JobController::class, 'index'])
    ->name('jobs.index');

Route::get('/jobs/create', [JobController::class, 'create'])
    ->middleware('auth')
    ->name('jobs.create');

Route::post('/jobs', [JobController::class, 'store'])
    ->middleware('auth')
    ->name('jobs.store');

Route::get('/jobs/{job}', [JobController::class, 'show'])
    ->name('jobs.show');

Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
    ->middleware('auth')
    ->can('edit', 'job')
    ->name('jobs.edit');

Route::put('/jobs/{job}', [JobController::class, 'update'])
    ->middleware('auth')
    ->can('edit', 'job')
    ->name('jobs.update');

Route::delete('/jobs/{job}', [JobController::class, 'destroy'])
    ->middleware('auth')
    ->name('jobs.destroy');

// Register page
Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

// Login page
Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);

Route::post('/logout', [SessionController::class, 'destroy']);
