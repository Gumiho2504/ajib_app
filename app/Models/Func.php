<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Func extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'icon',
    ];

    public function jobs(): BelongsToMany
    {
        return $this->belongsToMany(Job::class, 'job_functions', 'func_id', 'job_id');
    }

}
