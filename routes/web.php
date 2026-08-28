<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('/jobs', function () {
    $jobs = Job::all();
    return view('jobs', compact(['jobs']));
});

Route::get('job/{id}', function ($id) {
    $job = Job::find($id);
    return view('job', compact(['job']));
});
