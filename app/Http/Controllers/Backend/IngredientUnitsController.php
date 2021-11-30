<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IngredientUnit;

class IngredientUnitsController extends Controller
{
   //Ingredient Units Add

    public function IngredientUnitsAdd(){

    return view('backend.ingredientunits.ingredientunits_add');
}//end method


    //Ingredient Units Store

    public function IngredientCategoriesStore(Request $request){


            //form validation
    
    
             $request->validate(
                 [   'id'=>'required',
                      'outlet_id'=>'required',
                     'unit_name'=>'required',
                     'order_id'=>'required',
                     'description'=>'required',
                  
                 ],
                 [
                     'id.required'=>'input',
                      'outlet_id.required'=>'input',
                    'unit_name.required'=>'input',
                    'order_id.required'=>'input',
                     'description.required'=>'input',
                 
          ],  
         
             );
    
    
           // Ingredient Units Insert    
           IngredientUnit::insert([
    
    
            'id' => $request->id,    
            'outlet_id' => $request->outlet_id,
            'unit_name' => $request->unit_name, 
            'order_id' => $request->order_id, 
            'description' => $request->description, 
           
            
            ]); 
               
    
            return redirect()->back();
    
    }//end method
}
