<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;

    protected $fillable = [
        'outlet_name',
        'address',
        'phone',
        'collect_vat',
        'invoice_print',
    ];

}

