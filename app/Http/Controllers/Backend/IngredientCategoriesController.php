<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IngredientCatergory;

class IngredientCategoriesController extends Controller
{
    //Ingredient Categories Add

    public function IngredientCategoriesAdd(){

        return view('backend.ingredientcategories.ingredientcategories_add');
    }


       //Ingredient Categories Store
    public function IngredientCategoriesStore(Request $request){



        //form validation


         $request->validate(
             [   'id'=>'required',
                 'outlet_id'=>'required',
                 'category_name'=>'required',
                 'description'=>'required',
              
             ],
             [
                 'id.required'=>'input',
                 'outlet_id.required'=>'input',
                 'category_name.required'=>'input',
                 'description.required'=>'input',
             
      ],  
     
         );


       // Ingredient Categories Insert    
       IngredientCatergory::insert([


        'id' => $request->id,    
        'outlet_id' => $request->outlet_id,
        'category_name' => $request->category_name, 
        'description' => $request->description, 
       
        
        ]); 
           

        return redirect()->back();

}//end method

//Ingredient Categories View

    public function IngredientCategoriesView(){

        $ingredientcategory_view = IngredientCatergory::latest()->get();

        return view('backend.ingredientcategories.ingredientcategories_view',compact('ingredientcategory_view'));
}//end method


//Ingredient Categories Edit

    public function IngredientCategoriesEdit($id){

        $ingredientcategory_edit = IngredientCatergory::findOrfail($id);

        return view('backend.ingredientcategories.ingredientscategories_edit', compact('ingredientcategory_edit'));                
        
     }//end method

              
//Ingredients Categories Update

    public function IngredientCategoriesUpdate(Request $request){

        $ingredientcategory_update = $request->id;

    // update ingredients categories

    IngredientCatergory::findOrfail($ingredientcategory_update)->update(


        [
            'id'=>$request->id,
            'outlet_id'=>$request->outlet_id,
            'category_name'=>$request->category_name,
            'description'=>$request->description,
        ]);

        return redirect()->back();
 }//end method

//Ingredient Categories Delete

    public function IngredientCategoriesDelete($id){

        IngredientCatergory::findOrfail($id)->delete();
        return redirect()->route('view.ingredientcategories');

}//end method


}

