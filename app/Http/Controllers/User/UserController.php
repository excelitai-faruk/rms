<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function create(Request $request){
          //Validate Inputs
          $request->validate([
              'name'=>'required',
              'email'=>'required|email|unique:users,email',
              'password'=>'required|min:5|max:30',
              'cpassword'=>'required|min:5|max:30|same:password'
          ]);

          $user = new User();
          $user->name = $request->name;
          $user->email = $request->email;
          $user->password = \Hash::make($request->password);
          $save = $user->save();

          if( $save ){
              return redirect()->back()->with('success','You are now registered successfully');
          }else{
              return redirect()->back()->with('fail','Something went wrong, failed to register');
          }
    }

    function check(Request $request){
        //Validate inputs
        $request->validate([
           'email'=>'required|email|exists:users,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists on users table'
        ]);

        $creds = $request->only('email','password');
        if( Auth::guard('web')->attempt($creds) ){
            return redirect()->route('user.home');
        }else{
            return redirect()->route('user.login')->with('fail','Incorrect credentials');
        }
    }

    function logout(){
        Auth::guard('web')->logout();
        return redirect('/');
    }


    
    ////////// Customer/user Crud method start //////////
    
    //Cutomer Add 
    public function CustomerAdd(){
        

        return view('backend.customer.customer_add');
    }



    // Customer Store
    public function CustomerStore(Request $request){
        //validate

        // dd($request->all());

        $request->validate([
            'outlet_id'=> "required",
            'name'=> "required",
            'email'=> "required",
            'dob'=> "required",
            'address'=> "required",
            'phone'=> "required",
        ],
        [
            'outlet_id.required' => "Input",
            'name.required' => "Input",
            'email.required' => "Input",
            'dob.required' => "Input",
            'address.required' => "Input",
            'phone.required' => "Input",
        ]);


        User::insert([
            'outlet_id' => $request->outlet_id,
            'name' => $request->name,
            'email' => $request->email,
            'dob' => $request->dob,
            'address' => $request->address,
            'phone' => $request->phone,
            'email_verified_at' =>$request->email_verified_at
            

        ]);

        $notification = array(
			'message' => 'Inserted Successfully',
			'alert-type' => 'success'
		);

        return redirect()->route('customer.view')->with($notification);
    }

    // Customer View
    public function CustomerView(){
        $customers = User::latest()->get();
        dd($customers);
        return view ('backend.customer.customer_view',compact('customers'));
    }


// Customer Edit
public function CustomerEdit($id){
    $customer_edit = User::findorFail($id);

    return view('backend.customer.customer_edit',compact('customer_edit'));

}

// Customer Update

  public function CustomerUpdate(Request $request){

    $customer_id = $request->id;

    User::findOrFail($customer_id)->update([

        'outlet_id' => $request->outlet_id,
        'name' => $request->name,
        'email' => $request->email,
        'dob' => $request->dob,
        'address' => $request->address,
        'phone' => $request->phone,
  

    ]);

    $notification = array(
    'message' => 'Customer Updated Successfully',
    'alert-type' => 'success'
  );

  return redirect()->route('customer.view')->with($notification);

  }  // end method

// Customer Delete

    public function CustomerDelete($id){

        User::findOrFail($id)->delete();
  
        $notification = array(
        'message' => ' Deleted Successfully',
        'alert-type' => 'success'
      );
  
      return redirect()->back()->with($notification);

}

}
