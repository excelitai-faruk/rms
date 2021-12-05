




@include('admin.main_master')


<div class="box_p" style="margin-left: 450px;margin-top:150px" >
    <div class="box-header with-border">
      <h4 class="box-title"> Add Expense </h4>
    </div>
    <!-- /.box-header -->
  
    <div class="box-body">
      <div class="row">
        <div class="col-8">
            
            <form action="{{ route('expense.store') }}" method="POST" enctype='multipart/form-data' >
                @csrf
            
            {{--  Expense Item select code  --}}
            <div class="form-group row">
                
                <label for="example-text-input" class="col-sm-2 col-form-label">Expense Item Select</label>

                <div class="col-sm-10">

                <select name="expense_item_id" class="form-control"  >

                    <option value="" selected="" disabled="">Select Expense Item</option>

                    @foreach($expenseitems as $item)
                     <option value="{{ $item->id }}"> {{ $item->expense_item_name }}</option>	
                    @endforeach

                 </select>


                 </div>
                                        
                </div>


                {{--  APATOTO  --}}
                <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Outlet_id</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="outlet_id"  id="example-text-input">
              </div>
            </div>
            {{--  APATOTO  End for outlet id--}}

            <div class="form-group row">
              <label for="example-search-input" class="col-sm-2 col-form-label">Person Name </label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="person_name"  id="person_name" placeholder="Enter Name" required="">
              </div>
            </div>
        
            <div class="form-group row">
              <label for="example-email-input" class="col-sm-2 col-form-label">Total Ammount</label>
              <div class="col-sm-10">
                <input class="form-control" type="int" name="ammount"  id="ammount" placeholder="Enter Ammount" required="">
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-url-input" class="col-sm-2 col-form-label">Expense Image</label>
              <div class="col-sm-10">
                <input class="form-control" type="file" name="image"  id="image" placeholder="Choose File" required="">
              </div>
            </div>
            
            <div class="form-group row"> 
              <label for="example-tel-input" class="col-sm-2 col-form-label"> Note </label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="note"  id="note" placeholder="Write here" >
              </div>
            </div>

            <div class="form-group row">
                <label for="example-tel-input" class="col-sm-2 col-form-label">Added by</label>
                <div class="col-sm-10">
                    <select class="form-select"  name = 'added_by' required="">
                        <option value="">Select</option>
                        <option value="admin">Admin</option>
                        <option value="super_admin">Super-Admin</option>
                        
                      </select>
                </div>
              </div>
            
            <div class="box-footer">
                <button type="submit" class="btn btn-success pull-right">Add Expense</button>
            </div>
        
        </form>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.box-body -->
  </div>