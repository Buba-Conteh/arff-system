<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function rank()
    {
       return $this->hasOne(Rank::class,'id');
    }

    public function crew()
    {
       return $this->belongsTo(Crew::class);
    }
}
