<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $fillable = [
        'sn',
        'reference',
        'date',
        'employee',
        'in_time',
        'out_time',
        'update_time',
        'time_count',
        'note',
        'added_by',
        
        
    ];



}
