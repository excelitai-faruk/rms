<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FoodVarient;
use App\Models\Food;

class FoodVarientController extends Controller
{


            
//food varient

        public function FoodVarientAdd(){
            
            $foodvar = FoodVarient::latest()->get();
           
     
            $foodvarient = Food::orderBy('food_name','ASC')->get();
            
            return view('backend.food.food_varient',compact('foodvarient','foodvar'));

            }//end method

            // store outlet
    public function FoodVarientStore(Request $request){   
    //   dd($request);
    // validation 
        $request->validate([
            // 'outlet_id' => 'required',
            'food_name' => 'required',
            'food_varient' => 'required',
            'price' => 'required',
                 
          ],[ 
            // 'outlet_id.required' => 'Input',
            'food_name.required' => 'Input',
            'food_varient.required' => 'Input',
            'price.required' => 'Input',
    

          ]);
       // Brand Insert    
         FoodVarient::insert([
           'outlet_id' => $request->outlet_id,
           'food_name' => $request->food_name,
           'food_varient' => $request->food_varient,
           'price' => $request->price,

          ]);

          $notification = array(
            'message' =>  'food varient Add Sucessyfuly',
            'alert-type' => 'success'
        ); 
          return redirect()->back()->with($notification);
      

  } // end method


            // foodvarient View
            public function FoodVarientView(){
                $foodvarient = FoodVarient::latest()->get();
                dd($foodvarient);
                return view ('backend.food.food_varient',compact('foodvarient'));
            }//end mathod


               //foodvarient Delete
               public function FoodVarientDelete(Request $request){
                $outlet = FoodVarient::findOrfail($request->p_id);
                $outlet->delete();
                return redirect()->back();
                }//end method






                 //Edit foodvarient
            public function FoodVarientEdit($id){
                $foodvarient_edit= FoodVarient:: findOrfail($id);
                $notification = array(
                    'message' =>  'edit Sucessyfuly',
                    'alert-type' => 'error'
                );
               
                return view('backend.food.edit_foodvarient', compact('foodvarient_edit'))->with($notification);
                }
                

            //Update foodvarient
            public function FoodVarientUpdate(Request $request){
                $foodvarient_update = $request->id;
                //update date
                FoodVarient::findOrfail($foodvarient_update)->update(
                [
                    // 'outlet_id'=>$request->outlet_id,
                    'food_name'=>$request->food_name,
                    'food_varient'=>$request->food_varient,
                    'price'=>$request->price,
               
            ]);

            $notification = array(
                'message' =>  'update Sucessyfuly',
                'alert-type' => 'error'
            );

                return redirect('food/varient/view')->with($notification);
            }//end method

}//main end


// sub category edit
public function SubCategoryEdit($id){
    $category = Category::orderBy('category_name', 'ASC')->get();
    $foodvarient_edit = SubCategory::findOrFail($id);
    return view('backend.category.subcategory_edit', compact('subcategory', 'category'));
    } // end mathod 
 
   public function SubCategoryUpdate(Request $request){
     $subcat_id = $request->id;

        // Sub Category Update    
        SubCategory::findOrFail($subcat_id)->update([
          'category_id' => $request->category_id,         
          'sub_category_name' => $request->sub_category_name,         
          'sub_category_slug_name' => strtolower(str_replace(' ', '-', $request->sub_category_slug_name)),   
      
          ]);    
          $notification = array(
              'message' =>  'Sub Category Update Sucessyfuly',
              'alert-type' => 'success'
          );     
          return redirect()->route('all.subcategory')->with($notification); 
   } // end mathod 




