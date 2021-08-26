<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fire extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function crew()
    {
        return $this->belongsTo(Crew::class);
    }

    public function fire_medium()
    {
        return $this->hasMany(FireMediums::class, 'id');
    }
}
