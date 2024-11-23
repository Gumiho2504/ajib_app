<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Skill extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public $timestamps = false;

    public function jobs() : BelongsTo{
        return $this->belongsTo(Job::class);
    }

}
