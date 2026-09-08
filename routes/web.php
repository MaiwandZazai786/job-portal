<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

// Home page
Route::view('/', 'home');

// Contact page
Route::view('contact', 'contact');

//Jobs
Route::get('/jobs', [JobController::class, 'index']);

//Create Job
Route::get('/jobs/create', [JobController::class, 'create']);

//Show Job
Route::get('/jobs/{job}', [JobController::class, 'show']);

//Store Job
Route::post('/jobs', [JobController::class, 'store']);

//Edit Job
Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);

//Update Job
Route::PATCH('/jobs/{job}', [JobController::class, 'update']);

//Delete Job
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);
