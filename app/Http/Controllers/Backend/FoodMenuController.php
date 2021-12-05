<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FoodMenu;
use Image;

class FoodMenuController extends Controller
{
    //Food Menu Add

    public function FoodMenuAdd(){

        return view('backend.foodmenu.foodmenu_add');
    }


    //Food Menu Store

    public function FoodMenuStore(Request $request){

        //Form Validation

        $request->validate(
            [    

                 'outlet_id'=>'required',
                 'name'=>'required',
                 'code'=>'required',
                 'category'=>'required',
                 'ingredient_consumtion'=>'required',
                 'sale_price'=>'required',
                 'vat'=>'required',
                 'description'=>'required',
                 'featured_photo'=>'required',
                 
              
            ],
            [
                'outlet_id.required'=>'input',
                'name.required'=>'input',
                'code.required'=>'input',
                'category.required'=>'input',
                'ingredient_consumptions.required'=>'input',
                'sale_price.required'=>'input',
                'vat.required'=>'input',
                'description.required'=>'input',
                'featured_photo.required'=>'input'
            ]
        );



        //Food Menu image upload & save

                $image = $request->file('featured_photo');
                
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(50,50)->save('upload/foodmenu_image/'.$name_gen);
                $save_url = 'upload/foodmenu_image/'.$name_gen;


        //Food Menu Start
        

        FoodMenu::insert([

                'outlet_id'=>$request->outlet_id,
                'name'=>$request->name,
                'code'=>$request->code,
                'category'=>$request->category,
                'ingredient_consumptions'=>$request->ingredient_consumtion,
                'sale_price'=>$request->sale_price,
                'vat'=>$request->vat,
                'description'=>$request->description,
                'featured_photo' =>$save_url,
        ]);
        return redirect()->back();


        }//End Method

        
        // View Supplier

        public function FoodMenuView(){
        $foodmenu_view = FoodMenu::latest()->get();
        return view('backend.foodmenu.foodmenu_view',compact('foodmenu_view'));


        }//End Method

    //Edit Method
    public function FoodmenuEdit($id){

    $foodmenu_edit=  FoodMenu::findOrfail($id);
    return view('backend.foodmenu.foodmenu_edit', compact('foodmenu_edit'));
    
    }//end method

    
}
