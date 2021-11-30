<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Outlet;

class OutletController extends Controller
{
    //outlet deshbord
    public function OutletDeshbord(){
        return view('backend.outlet.outlet_deshboard');
    }//end method

    //outlet add
    public function OutletAdd(){
        return view('backend.outlet.add_outlet');
    }//end method

// store outlet
public function OutletStore(Request $request){   
      
    // validation 
        $request->validate([
            'outlet_name' => 'required',
            'address' => 'required',
            'phone' => 'required',  
            'collect_vat' => 'required', 
            'invoice_print' => 'required',      
          ],[ 
            'outlet_name.required' => 'Input The outlet Name in Cats Eye',
            'address.required' => 'Input The outlet address in Easy',
            'phone.required' => 'Input The outlet phone in Easy',
            'collect_vat.required' => 'Input The outlet collect in Easy',
            'invoice_print.required' => 'Input The outlet invoice in Easy',
           
         
          ]);
       // Brand Insert    
          Outlet::insert([
           'outlet_name' => $request->outlet_name,
           'address' => $request->address,
           'phone' => $request->phone,
           'collect_vat' => $request->collect_vat,
           'invoice_print' => $request->invoice_print,

          ]);

          $notification = array(
            'message' =>  'Outlet Add Sucessyfuly',
            'alert-type' => 'success'
        ); 

        return redirect('outlet/view')->with($notification);

  } // end method

            //View outlet
            public function OutletView(){
                $outlet_view = Outlet::latest()->get();
                return view('backend.outlet.view_outlet',compact('outlet_view'));
            }//end method

          




//Purchase Delete
public function OutletDelete(Request $request){
    $outlet = Outlet::findOrfail($request->p_id);
    $outlet->delete();
    return redirect()->back();
    }//end method




                //Edit outlet
            public function OutletEdit($id){
                $outlet_edit= Outlet:: findOrfail($id);
                $notification = array(
                    'message' =>  'edit Sucessyfuly',
                    'alert-type' => 'error'
                );
                return view('backend.outlet.edit_outlet', compact('outlet_edit'))->with($notification);
                }

            //Update outlet
            public function OutletUpdate(Request $request){
                $Outlet_update = $request->id;
                //update date
            Outlet::findOrfail($Outlet_update)->update(
                [
                    'outlet_name'=>$request->outlet_name,
                    'address'=>$request->address,
                    'phone'=>$request->phone,
                    'collect_vat'=>$request->collect_vat,
                    'invoice_print'=>$request->invoice_print,
                
            ]);

            $notification = array(
                'message' =>  'update Sucessyfuly',
                'alert-type' => 'error'
            );

                return redirect('outlet/view')->with($notification);
            }//end method





           







}
