<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;


class TableController extends Controller
{
    //Add Table
    public function TableAdd()
    {


        return view('backend.table.add_table');  

    }//end method


//Store Table
public function TableStore(Request $request){

   
    // dd($request->all());
        
    
        $validation = $request->validate(
            [
                'outlet_id'=>'required',
                'table_name'=>'required',
                'seat_capacity'=>'required',
                'description'=>'required',
                'position'=>'required',
                
            ]);

            // $table->id();
            // $table->string('outlet_id');
            // $table->string('table_name');
            // $table->string('seat_capacity');
            // $table->string('description');
            // $table->string('position');
            // $table->timestamps();
       
        
    //data insert
    Purchase::insert(
    
     [ 
         
        'outlet_id'=>$request->outlet_id,
        'table_name'=>$request->reference_no,
        'seat_capacity'=>$request->supplier,
        'description'=>$request->ingredients,
       'position'=>$request->date,
        
     ]
    
     );

     $notification = array(
        'message' =>  'Table Add Sucessyfuly',
        'alert-type' => 'success'
    );

    
     return redirect()->back->with($notification);
    
         
    }//end method


















}
