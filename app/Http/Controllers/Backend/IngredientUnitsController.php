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

    public function IngredientUnitsStore(Request $request){


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
               
    
            return redirect()->route('view.ingredientunits');
    
    }//end method


    //Ingredient Units View

    public function IngredientUnitsView(){

        $ingredientunit_view = IngredientUnit::latest()->get();

        return view('backend.ingredientunits.ingredientunits_view',compact('ingredientunit_view'));
}//end method

//Ingredient Units Edit

    public function IngredientUnitsEdit($id){

        $ingredientunit_edit = IngredientUnit::findOrfail($id);

        return view('backend.ingredientunits.ingredientunits_edit', compact('ingredientunit_edit'));                
    
 }//end method


   //Ingredient Units Update

    public function IngredientUnitsUpdate(Request $request){

        $ingredientunit_update = $request->id;

        IngredientUnit::findOrfail($ingredientunit_update)->update(


    [
        'id'=>$request->id,
        'outlet_id'=>$request->outlet_id,
        'unit_id'=>$request->outlet_id,
        'category_name'=>$request->category_name,
        'description'=>$request->description,
    ]);

    return redirect()->back();
}//end method


//Ingredient Categories Delete

public function IngredientUnitsDelete($id){

    IngredientUnit::findOrfail($id)->delete();
    return redirect()->route('view.ingredientunits');

}//end method


}
