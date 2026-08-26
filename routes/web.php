<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;


Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::allJobs()
    ]);
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('job/{id}', function ($id) {

    $job = Arr::first(Job::allJobs(), fn($job) => $job['id'] == $id);

    return view('job', compact(['job']));
});
