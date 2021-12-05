<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderList;
use App\Models\Table;



class OrderListController extends Controller
{
    //




//Add OrderList
public function OrderListAdd()
{



    $tables = Table::orderBy('table_name','ASC')->get();

   	$order_list = OrderList::latest()->get();

    return view('backend.order.add_order');  

}//end method

//Store Table
public function OrderListStore(Request $request){

   
    // dd($request->all());
        
    
        $validation = $request->validate(
            [


                'si'=>'required',
                'invoice_no'=>'required',
                'customer_name'=>'required',
                'designation'=>'required',
                'table_id'=>'required',//table_name
                'state'=>'required',
                'order_date'=>'required',
                'amount'=>'required',
                
                
                
            ]);

            
           
    //data insert
    OrderList::insert(
    
     [ 
         
        'si'=>$request->si,
        'invoice_no'=>$request->invoice_no,
        'customer_name'=>$request->customer_name,
        'designation'=>$request->designation,

        
       'table_name'=>$request->table_name,
       'state'=>$request->state,
       'order_date'=>$request->order_date,
      'amount'=>$request->amount,
        
     ]


    //  $table->string('user_id');
    //  $table->string('table_id');
    //  $table->string('employeers_id');
      //  $table->string('si');
    //  $table->string('invoice_no');
    //  $table->string('customer_name');
    //  $table->string('waiter');
    //  $table->time('table');
    //  $table->time('state');
    //  $table->time('order_date');




    
     );

     $notification = array(
        'message' =>  'Table Add Sucessyfuly',
        'alert-type' => 'success'
    );

    
    return redirect()->back()->with ($notification);
        
         
    }//end method



}
