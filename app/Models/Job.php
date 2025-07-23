<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'position_title',
        'company',
        'location',
        'start_date',
        'end_date',
        'description'
    ];
    
}
