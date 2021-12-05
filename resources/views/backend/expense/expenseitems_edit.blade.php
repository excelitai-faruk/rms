@include('admin.main_master')






<div class="box_p" style="margin-left: 450px;margin-top:150px" >
    <div class="box-header with-border">
      <h4 class="box-title">Edit Expense Item Info</h4>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <div class="col-8">
           
            <form action="{{ route('expenseitem.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <input type="hidden" name="id" value="{{$expenseitems_edit->id}}">
            
                <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Outlet_id</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="outlet_id" value="{{$expenseitems_edit->outlet_id}}" id="example-text-input">
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-search-input" class="col-sm-2 col-form-label"> Expense_Item Name</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="expense_item_name" value="{{$expenseitems_edit->expense_item_name}}" id="example-search-input">
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-email-input" class="col-sm-2 col-form-label">Description</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="description" value="{{$expenseitems_edit->description}}" id="example-email-input">
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