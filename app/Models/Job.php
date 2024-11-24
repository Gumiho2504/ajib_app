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
        'open_count',
        'apply_count',
        'expired_at',
        'company_id',
    ];

    public function requestments() : HasMany
    {
        return $this->hasMany(Requestment::class);
    }




    // many to one
    public function company() : BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function responsibilities() : HasMany
    {
        return $this->hasMany(Responsibility::class);
    }

    public function nicetohaves() : HasMany{
        return $this->hasMany(NiceToHave::class,'job_id');
    }

    public function job_functions(): BelongsToMany
    {
        return $this->belongsToMany(Func::class, 'job_functions', 'job_id', 'func_id');
    }


    public function apply_users() : BelongsToMany{
        return $this->belongsToMany(User::class,'apply_jobs','job_id','user_id');
    }

    public function favourite_users(): BelongsToMany
    {
        return $this->belongsToMany(Job::class, 'savejob', 'job_id', 'user_id');
    }
}
