<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;


    protected $fillable = [
        'si',
        'customer_name',
        'table_no',
        'person_number',
        'start_time',
        'end_time',
        'date',
        'status',
        
    ];





}
