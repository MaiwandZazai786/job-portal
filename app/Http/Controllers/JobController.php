<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->cursorPaginate(5);
        return view('jobs.index', compact(['jobs']));
    }

    public function create()
    {

        return view('jobs.create');
    }

    public function store()
    {

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
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function edit(Job $job)
    {



        if (Auth::user()->cannot('edit-job', $job)) {
            abort(403, 'You are not authorized to edit this job.');
        }

        // Gate::authorize('edit-job', $job);

        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job)
    {
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
    }

    public function destroy(Job $job)
    {
        //autorize the user to update the job {On Hold for now...}

        //delete the job
        $job->delete();

        //redirect to jobs page
        return redirect('/jobs');
    }
}
