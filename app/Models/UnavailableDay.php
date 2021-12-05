<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnavailableDay extends Model
{
    use HasFactory;

    protected $fillable = [
        'si',
        'unavailable_date',
        'available_time',
        
        
    ];



    
}
