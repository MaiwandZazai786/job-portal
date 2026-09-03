<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use PhpParser\Node\Expr\FuncCall;

class Job extends Model
{
    use HasFactory;
    protected $table = 'job_listing';
    protected $fillable = ['title', 'salary', 'employer_id'];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
