<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnualLeave extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function personnel()
    {
       return $this->belongsTo(AnnualLeave::class, 'personnel_id');
    }

}
