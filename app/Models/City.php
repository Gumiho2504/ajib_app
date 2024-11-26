<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    use HasFactory;
    protected $table = 'cities';
    protected $fillable = [
        'name',
        'city_id',
    ];
    public $timestamps = false;

    public function districts(): HasMany{
        return $this->hasMany(District::class);
    }
}
