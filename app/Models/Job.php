<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use HasFactory ,softDeletes;
    protected $fillable = [
        'title',
        'description',
        'min_salary',
        'max_salary',
        'work_model',
        'type',
        'level',
        'requestment_id',
        'skill_id',
        'company_id',
    ];

    public function requestments() : HasMany
    {
        return $this->hasMany(Requestment::class);
    }


    public function skills():HasMany
    {
        return $this->hasMany(Skill::class, 'job_skill');
    }

    // many to one
    public function company() : BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function favourite_users(): BelongsToMany
    {
        return $this->belongsToMany(Job::class, 'savejob', 'car_id', 'user_id');
    }
}
