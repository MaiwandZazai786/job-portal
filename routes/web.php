<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [

        'jobs' => [
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

        ]
    ]);
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('job/{id}', function ($id) {
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
    $job = [];
    foreach ($jobs as $curJob) {
        if ($curJob['id'] == $id)
            $job = $curJob;
    }

    return view('job', compact(['job']));
});
