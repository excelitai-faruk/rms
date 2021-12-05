<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'opening_time',
        'close_time',
        'max_reserve_person',
        
    ];


}
