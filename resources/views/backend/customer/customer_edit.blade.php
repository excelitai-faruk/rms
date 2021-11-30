@extends('admin.main_master')






<div class="box_p" style="margin-left: 450px;margin-top:150px" >
    <div class="box-header with-border">
      <h4 class="box-title">Edit Customer Info</h4>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <div class="col-8">
           
            <form action="{{ route('customer.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <input type="hidden" name="id" value="{{$customer_edit->id}}">
            
                <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Outlet_Name</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="outlet_id" value="{{$customer_edit->outlet_id}}" id="example-text-input">
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-search-input" class="col-sm-2 col-form-label"> Customer Name</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="name" value="{{$customer_edit->name}}" id="example-search-input">
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-email-input" class="col-sm-2 col-form-label">Date of Birth</label>
              <div class="col-sm-10">
                <input class="form-control" type="date" name="dob" value="{{$customer_edit->dob}}" id="example-email-input">
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-url-input" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="email" value="{{$customer_edit->email}}" id="example-url-input">
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-tel-input" class="col-sm-2 col-form-label">Contact_no</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="phone" value="{{$customer_edit->phone}}" id="example-tel-input">
              </div>
            </div>

            <div class="form-group row">
                <label for="example-tel-input" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" name="address" value="{{$customer_edit->address}}" id="example-tel-input">
                </div>
              </div>
            
            
            
            <div class="box-footer">          
                <button type="submit" class="btn btn-success pull-right">Update</button>
            </div>      
        </form>    
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.box-body -->
  </div>