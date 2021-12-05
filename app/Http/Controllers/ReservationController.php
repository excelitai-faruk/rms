<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;


class ReservationController extends Controller
{
    //Add Reservation
    public function ReservationAdd()
    {


        return view('backend.reservation.add_reservation');  

    }//end method

//Store Reservation
public function ReservationStore(Request $request){

   
    // dd($request->all());
        
    
        $validation = $request->validate(
            [
                'si'=>'required',
                'customer_name'=>'required',
                'table_no'=>'required',
                'person_number'=>'required',
                'start_time'=>'required',
                'end_time'=>'required',
                'date'=>'required',
                'status'=>'required',
                
                
            ]);

 
        
    //data insert
    Reservation::insert(
    
     [ 
         
        'si'=>$request->si,
        'customer_name'=>$request->customer_name,
        'table_no'=>$request->table_no,
        'person_number'=>$request->person_number,
       'start_time'=>$request->start_time,
       'end_time'=>$request->end_time,
        'date'=>$request->date,
        'status'=>$request->status,
        
     ]
    
     );

     $notification = array(
        'message' =>  'Table Add Sucessyfuly',
        'alert-type' => 'success'
    );

    
    return redirect('reservation/view')->with($notification);
        
         
    }//end method


    
    //View Reservation

    public function ReservationView(){
        $reservation_view = Reservation::latest()->get();
        return view('backend.reservation.view_reservation',compact('reservation_view'));
    }//end method


    //Edit Reservation
public function ReservationEdit($id){

    $reservation_edit= Reservation:: findOrfail($id);
    return view('backend.reservation.edit_reservation', compact('reservation_edit'));
    
    }//end method


//Update Reservation
public function ReservationUpdate(Request $request){
    $reservation_update = $request->id;
       
    //update date
    Reservation::findOrfail($reservation_update)->update(
        [  
            'si'=>$request->si,
        'customer_name'=>$request->customer_name,
        'table_no'=>$request->table_no,
        'person_number'=>$request->person_number,
       'start_time'=>$request->start_time,
       'end_time'=>$request->end_time,
        'date'=>$request->date,
        'status'=>$request->status,
     ]
    
    );


    $notification = array(
        'message' =>  'Stock Add Sucessyfuly',
        'alert-type' => 'success'
    );
    
    return redirect('reservation/view')->with($notification);
    
    }//end method


//Delete Reservation


public function ReservationDelete(Request $request){

    $reservation_delete = Reservation::findOrfail($request->p_id);
    $reservation_delete->delete();

    return redirect()->back();



    
    }//end method




}
