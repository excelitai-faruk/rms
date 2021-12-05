<?php

namespace App\Http\Controllers;
use App\Models\Attendance;


use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    
    //Add Attendance
    public function AttendanceAdd()
    {


        return view('backend.attendance.add_attendance');  

    }//end method


//Store Table
public function AttendanceStore(Request $request){

   
    // dd($request->all());
        
    
        $validation = $request->validate(
            [
                'sn'=>'required',
                'reference'=>'required',
                'seat_capacity'=>'required',
                'description'=>'required',
                'position'=>'required',
                'outlet_id'=>'required',
                'table_name'=>'required',
                'seat_capacity'=>'required',
                'description'=>'required',
                'position'=>'required',
                
            ]);

          
            // $table->string('sn');
            // $table->string('reference');
            // $table->string('date');
            // $table->string('employee');
            // $table->string('in_time');
            // $table->string('out_time');
            // $table->string('update_time');
            // $table->string('time_count');
            // $table->string('note');
            // $table->string('added_by');
        
    //data insert
    Attendance::insert(
    
     [ 
         
        'outlet_id'=>$request->outlet_id,
        'table_name'=>$request->table_name,
        'seat_capacity'=>$request->seat_capacity,
        'description'=>$request->description,
       'position'=>$request->position,
        
     ]
    
     );

     $notification = array(
        'message' =>  'Table Add Sucessyfuly',
        'alert-type' => 'success'
    );

    
    return redirect()->back()->with ($notification);
        
         
    }//end method















}
