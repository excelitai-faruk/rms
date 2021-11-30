<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FoodMenuCategory;

class FoodMenuCategoryController extends Controller
{
    //Food menu add

    public function FoodCategoryAdd(){

        return view('backend.managefood.foodmenucategory_add');
    }

    //Food Menu Category Store
    public function FoodCategoryStore(Request $request){



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


       // Food Menu Category Insert    
       FoodMenuCategory::insert([


        'id' => $request->id,    
        'outlet_id' => $request->outlet_id,
        'category_name' => $request->category_name, 
        'description' => $request->description, 
       
        
        ]); 
           

        return redirect()->route('view.foodmenucategory');

}//end method

//Food Menu View

        public function FoodCategoryView(){

            $foodmenu_view = FoodMenuCategory::latest()->get();
            return view('backend.managefood.foodmenucategory_view',compact('foodmenu_view'));
        }//end method

//Food Menu Edit

        public function FoodCategoryEdit($id){

        $foodmenu_edit = FoodMenuCategory::findOrfail($id);
    
        return view('backend.managefood.foodmenucategory_edit', compact('foodmenu_edit'));                
            
         }
         
//Food Menu Update

         public function FoodCategoryUpdate(Request $request){

            $foodmenu_update = $request->id;

            // update foodmenu

            FoodMenuCategory::findOrfail($foodmenu_update)->update(


                [
                    'id'=>$request->id,
                    'outlet_id'=>$request->outlet_id,
                    'category_name'=>$request->category_name,
                    'description'=>$request->description,
                ]);

                return redirect()->back();
         }//end method

//Food Menu Delete

        public function FoodCategoryDelete($id){

            FoodMenuCategory::findOrfail($id)->delete();
            return redirect()->route('view.foodmenucategory');

    }//end method
      
} 


