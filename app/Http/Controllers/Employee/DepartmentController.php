<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Department;

class DepartmentController extends Controller
{
    //Depmaretment add
    public  function DepAdd()
    {
        $deps = Department::latest()->get();
        return view ('backend.hrm.department.dep_view', compact('deps'));
    }

// Depmaretment Store
public function DepStore(Request $request){
    //validate

    // dd($request->all());

    $request->validate(
        
        
        
        [ 'dep_name'=> "required",],
    
        ['dep_name.required' => "Input",
            
    ]);


    Department::insert([
        
        'dep_name' => $request->dep_name,    

    ]);

    $notification = array(
        'message' => 'Inserted Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('dep.add')->with($notification);
}

// // Depmaretment View
// public function DepView(){
//     dd("mesba");
//     $deps = Department::latest()->get();
//     return view ('backend.hrm.department.dep_view', compact('deps'));
// }


// Dep Edit
public function DepEdit($id){
    $dep_edit = Department::findorFail($id);

    return view('backend.hrm.department.dep_edit',compact('dep_edit'));

}

 // Dep Update

 public function DepUpdate(Request $request){

    $dep_id = $request->id;

    Department::findOrFail($dep_id)->update([

        
        'dep_name' => $request-> dep_name,
    ]);

    $notification = array(
    'message' => ' Updated Successfully',
    'alert-type' => 'success'
  );

  return redirect()->route('dep.add')->with($notification);

  }  // end method

  // Expense_Item Delete

  public function DepDelete($id){

    Department::findOrFail($id)->delete();

    $notification = array(
    'message' => ' Deleted Successfully',
    'alert-type' => 'success'
  );

  return redirect()->back()->with($notification);

}

















}// main method end
