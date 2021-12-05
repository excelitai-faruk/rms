

@include('admin.main_master')


<div class="box_p" style="margin-left: 450px;margin-top:150px" >
    <div class="box-header with-border">
      <h4 class="box-title">Add Customer</h4>
    </div>
    <!-- /.box-header -->
  
    <div class="box-body">
      <div class="row">
        <div class="col-8">
            
            <form action="{{ route('customer.store') }}" method="POST" >
                @csrf
            
            {{--  Oulet select code  --}}
            {{--  <div class="form-group">
                <h5>Category Select <span class="text-danger">*</span></h5>

                <div class="controls">

                <select name="category_id" class="form-control"  >

                    <option value="" selected="" disabled="">Select Category</option>

                    @foreach($categories as $category)
                     <option value="{{ $category->id }}"> {{ $category->category_name }}</option>	
                    @endforeach

                 </select>

                     @error('category_id') 
                     <span class="text-danger">{{ $message }}</span>
                     @enderror


                 </div>
                                        
                </div>  --}}


                {{--  APATOTO  --}}
                <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Outlet_id</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="outlet_id"  id="example-text-input">
              </div>
            </div>
            {{--  APATOTO  End for outlet id--}}

            <div class="form-group row">
              <label for="example-search-input" class="col-sm-2 col-form-label">Customer Name </label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="name"  id="name" placeholder="Enter Name" required="">
              </div>
            </div>
        
            <div class="form-group row">
              <label for="example-email-input" class="col-sm-2 col-form-label">Date Of Birth</label>
              <div class="col-sm-10">
                <input class="form-control" type="date" name="dob"  id="dob" placeholder="d/m/y" required="">
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-url-input" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="email"  id="email" placeholder="Enter Email" required="">
              </div>
            </div>
            
            <div class="form-group row"> 
              <label for="example-tel-input" class="col-sm-2 col-form-label">Contact no</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="phone"  id="phone" placeholder="Enter Contact no" required="">
              </div>
            </div>

            <div class="form-group row">
                <label for="example-tel-input" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" name="address"  id="address" placeholder="Enter Address">
                </div>
              </div>
            
            <div class="box-footer">
                <button type="submit" class="btn btn-success pull-right">Submit</button>
            </div>
        
        </form>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.box-body -->
  </div>