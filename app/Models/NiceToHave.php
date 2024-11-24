<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NiceToHave extends Model
{
    use HasFactory;
    protected $table = 'nice_to_have';
    protected $fillable = ['name'];
    public $timestamps = false;

    public function job():BelongsTo{
        return $this->belongsTo(Job::class);
    }
}
