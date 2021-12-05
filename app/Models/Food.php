<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $fillable = [
        'outlet_id',
        'category_name',
        'kichen',
        'food_name',
        'component',
        'notes',
        'description',
        'start_date',
        'end_date',
        'cooking_time',
        'vat',
        'offer_rate',
        'status',
        'image',   
        'manu_type',
       
        
    ];



}


