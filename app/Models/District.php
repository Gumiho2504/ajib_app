<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class District extends Model
{
    use HasFactory;
    protected $table = 'districts';
    public $timestamps = false;
    protected $fillable = [
        'name',
    ];

    public function city():BelongsTo{
        return $this->belongsTo(City::class);
    }
    public function companies():HasMany{
        return $this->hasMany(Company::class);
    }
}
