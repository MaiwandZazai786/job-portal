<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job extends Model
{
    public static function allJobs(): array
    {
        return  [
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
    }

    public static function find(string $id)
    {
        $job = Arr::first(Job::allJobs(), fn($job) => $job['id'] == $id);
        return $job;
    }
}
