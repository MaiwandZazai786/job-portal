<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

$jobs = [
    [
        'id' => 1,
        'title' => 'Teacher',
        'salary'    => '25,000',
    ],
    [
        'id' => 2,
        'title' => 'Programmer',
        'salary'    => '125,000',
    ],
    [
        'id' => 3,
        'title' => 'Director',
        'salary'    => '50,000',
    ],

];


Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () use ($jobs) {
    return view('jobs', compact(['jobs']));
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('job/{id}', function ($id) use ($jobs) {

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    return view('job', compact(['job']));
});
