<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderList extends Model
{
    use HasFactory;


    protected $fillable = [
        

        'si',
        'invoice_no',
        
        'customer_name',
        'designation',
        'table_id',//table name
        'state',
        'order_date',
        'amount',
        
    ];
    


    
  
    // table relationship 
    public function table(){
    	return $this->belongsTo(Table::class,'table_id','id');
    
    }



    // public function employeers(){
    //     return $this->belongsTo(Employeer::class,'employeer_id','id');
    // }

    // public function users(){
    //     return $this->belongsTo(User::class,'customer_name','id');
    // }


    // public function table(){
    //     return $this->belongsTo(Table::class,'table_id','id');
    // }



   

    // $table->string('si');
    // $table->string('invoice_no');
    
   
    // $table->time('state');
    // $table->time('order_date');


}
