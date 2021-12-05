<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ingredient;

class IngredientController extends Controller
{
    //Ingredient Add

    public function IngredientAdd(){

        return redirect()->back('view.ingredient');
    }

            //Ingredient Store
            public function IngredientStore(Request $request){



            //form validation
    
    
            $request->validate(
                [    

                     'outlet_id'=>'required',
                     'purchase_price'=>'required',
                     'alert_qty'=>'required',
                     'unit'=>'required',
                     'code'=>'required',
                     'name'=>'required',
                  
                ],

             );
  
            // Ingredient Insert    
                Ingredient::insert([
    
            'outlet_id' => $request->outlet_id,
            'purchase_price' => $request->purchase_price, 
            'alert_qty' => $request->alert_qty, 
            'unit' => $request->unit, 
            'code' => $request->code, 
            'name' => $request->name, 
           
            
            ]); 
               
    
            return redirect()->back();
    
    }//end method

    
    //Ingredient View

    public function IngredientView(){

    $ingredient_view = Ingredient::latest()->get();

    return view('backend.ingredient.ingredient_view',compact('ingredient_view'));
    }//end method


    //Ingredient Edit

    public function IngredientEdit($id){

    $ingredient_edit = Ingredient::findOrfail($id);

    return view('backend.ingredient.ingredient_edit', compact('ingredient_edit'));                
    
    }//end method

    //Ingredient Update

    public function IngredientUpdate(Request $request){

    $ingredient_update = $request->id;

    // update ingredient

    Ingredient::findOrfail($ingredient_update)->update(


    [
       
        'outlet_id'=>$request->outlet_id,
        'purchase_price'=>$request->purchase_price,
        'alert_qty'=>$request->alert_qty,
        'unit'=>$request->unit,
        'code'=>$request->code,
        'name'=>$request->name,
        
    ]);

    return redirect()->back('view.ingredient');
    }//end method


    //Ingredient Delete

    public function IngredientDelete($id){

    Ingredient::findOrfail($id)->delete();
    return redirect()->route('view.ingredient');

    }//end method

    
}//main method
