<?php

use Illuminate\Support\Facades\Route;

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

    $job = Job::find($id);
    return view('job', compact(['job']));
});
