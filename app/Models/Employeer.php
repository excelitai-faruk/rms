<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employeer extends Model
{
    use HasFactory;

    protected $fillable = [
        'outlet_id',
        'name',
        'description',
        'designation',
        'phone',
        'email',
        'image',
        'nid_number',

        
    ];


   
}
