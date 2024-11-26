<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'address',
        'phone',
    ];
    public $timestamps = false;

    public function jobs() : HasMany
    {
        return $this->hasMany(Job::class);
    }
    public function district() : BelongsTo{
        return $this->belongsTo(District::class);
    }
}
