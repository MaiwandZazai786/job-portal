<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('contact', function () {
    return view('contact');
});


//Jobs
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->cursorPaginate(5);
    return view('jobs.index', compact(['jobs']));
});


//Create Job
Route::get('/jobs/create', function () {
    return view('jobs.create');
});


//Show Job
Route::get('/jobs/{job}', function (Job $job) {
    return view('jobs.show', compact(['job']));
});


//Store Job
Route::post('/jobs', function () {

    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required', 'min:3'],
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1,
    ]);

    return redirect('/jobs');
});

//Edit Job
Route::get('/jobs/{job}/edit', function (Job $job) {
    return view('jobs.edit', compact(['job']));
});

//Update Job
Route::PATCH('/jobs/{job}', function (Job $job) {
    //autorize the user to update the job {On Hold for now...}

    //validate the request
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required', 'min:3'],
    ]);

    //update the job
    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    return redirect('/jobs');
});

//Delete Job
Route::delete('/jobs/{job}', function (Job $job) {

    //autorize the user to update the job {On Hold for now...}

    //delete the job
    $job->delete();

    //redirect to jobs page
    return redirect('/jobs');
});
