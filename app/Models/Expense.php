<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = [
        'outlet_id',
        'expense_item_id',
        'person_name',
        'ammount',
        'image',
        'note',
        'added_by',
        
    ];

    // Expense Item relationships

    public function expense(){
        return $this->belongsTo(ExpenseItem::class,'expense_item_id','id');
        
    }
}
