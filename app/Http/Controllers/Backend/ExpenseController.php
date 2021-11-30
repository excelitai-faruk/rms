<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ExpenseItem;
use App\Models\Expense;

use Image;

class ExpenseController extends Controller
{
    // Expense Items Crud operation ////

    //Expense_Item Add 
    public function ExpenseItemAdd(){
        

        return view('backend.expense.expenseitems_view');
    }


    // Expense_Item Store
    public function ExpenseItemStore(Request $request){
        //validate

        // dd($request->all());

        $request->validate([
            'outlet_id'=> "required",
            'expense_item_name'=> "required",
            'description'=> "required",
           
        ],
        [
            'outlet_id.required' => "Input",
            'expense_item_name.required' => "Input",
            'description.required' => "Input",
            
        ]);


        ExpenseItem::insert([
            'outlet_id' => $request->outlet_id,
            'expense_item_name' => $request->expense_item_name,
            'description' => $request->description,
            
            

        ]);

        $notification = array(
            'message' => 'Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('expenseitem.view')->with($notification);
    }

    // Expense_Item View
    public function ExpenseItemView(){
        $expenseitems = ExpenseItem::latest()->get();
        return view ('backend.expense.expenseitems_view',compact('expenseitems'));
    }


    // Expense_Item Edit
    public function ExpenseItemEdit($id){
        $expenseitems_edit = ExpenseItem::findorFail($id);

        return view('backend.expense.expenseitems_edit',compact('expenseitems_edit'));

    }


    // Expense_Item Update

  public function ExpenseItemUpdate(Request $request){

    $expenseitems_id = $request->id;

    ExpenseItem::findOrFail($expenseitems_id)->update([

        'outlet_id' => $request->outlet_id,
        'expense_item_name' => $request->expense_item_name,
        'description' => $request->description,


    ]);

    $notification = array(
    'message' => 'Customer Updated Successfully',
    'alert-type' => 'success'
  );

  return redirect()->route('expenseitem.view')->with($notification);

  }  // end method


  // Expense_Item Delete

  public function ExpenseItemDelete($id){

    ExpenseItem::findOrFail($id)->delete();

    $notification = array(
    'message' => ' Deleted Successfully',
    'alert-type' => 'success'
  );

  return redirect()->back()->with($notification);

}

// ****************************** Expense Crud start****************************//

// Expense Add
public function ExpenseAdd(){
    $expenseitems = ExpenseItem::orderBy('expense_item_name','ASC')->get();  
    return view('backend.expense.expense_add',compact('expenseitems'));
}

// Expense_Item Store
public function ExpenseStore(Request $request){
    //validate

    // dd($request->all());

    $request->validate([
        'outlet_id'=> "required",
        'expense_item_id'=> "required",
        'person_name'=> "required",
        'ammount'=> "required",
        'image'=> "required",
        'note'=> "required",
        'added_by'=> "required",
        
    ],
    [
        'outlet_id.required' => "Input",
        'expense_item_id.required' => "Input",
        'person_name.required' => "Input",
        'ammount.required' => "Input",
        'image.required' => "Input",
        'note.required' => "Input",
        'added_by.required' => "Input",
        
    ]);

     // image upload & save
     $image = $request->file('image');
     $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
     Image::make($image)->resize(50,50)->save('upload/expense/image/'.$name_gen);
     $save_url = 'upload/expense/image/'.$name_gen;
     // return $save_url;


     Expense::insert([
        'outlet_id' => $request->outlet_id,
        'expense_item_id' => $request->expense_item_id,
        'person_name' => $request->person_name,
        'ammount' => $request->ammount,
        'image' => $save_url,
        'note' => $request->note,
        'added_by' => $request->added_by,
        
        

    ]);

    $notification = array(
        'message' => 'Inserted Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('expense.view')->with($notification);
}


// Expense View
public function ExpenseView(){
    $expenses = Expense::latest()->get();
    return view ('backend.expense.expense_view',compact('expenses'));
}


 // Expense Edit
 public function ExpenseEdit($id){
    $expense_edit = Expense::findorFail($id);
    $expenseitems = ExpenseItem::orderBy('expense_item_name','ASC')->get(); 
    return view('backend.expense.expense_edit',compact('expense_edit','expenseitems'));

}


//  Expense Update
public function ExpenseUpdate(Request $request){

    $expense_id = $request->id;
    $old_img  = $request->old_image;

    if ($request->file('image')) {

        unlink($old_img);
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/expense/image'.$name_gen);
        $save_url = 'upload/expense/image'.$name_gen;

        
     Expense::findOrFail($expense_id)->update([
        'outlet_id' => $request->outlet_id,
        'expense_item_id' => $request->expense_item_id,
        'person_name' => $request->person_name,
        'ammount' => $request->ammount,
        'image' => $save_url,
        'note' => $request->note,
        'added_by' => $request->added_by,

        ]);

        $notification = array(
          'message' =>  'Brand Update Sucessyfully',
          'alert-type' => 'success'
      ); 

      return redirect()->route('expense.view')->with($notification);


    }else{
        Expense::findOrFail($expense_id)->update([
            'outlet_id' => $request->outlet_id,
            'expense_item_id' => $request->expense_item_id,
            'person_name' => $request->person_name,
            'ammount' => $request->ammount,
            // 'image' => $save_url,
            'note' => $request->note,
            'added_by' => $request->added_by,
          
 
           ]);
 
           $notification = array(
             'message' =>  'Brand Update Sucessyfully',
             'alert-type' => 'info'
         ); 
 
         return redirect()->route('expense.view')->with($notification);
 

    } // else end

} // method end

// Expense Delete

public function ExpenseDelete($id){

    Expense::findOrFail($id)->delete();

    $notification = array(
    'message' => ' Deleted Successfully',
    'alert-type' => 'success'
  );

  return redirect()->back()->with($notification);

}



}// main method end
