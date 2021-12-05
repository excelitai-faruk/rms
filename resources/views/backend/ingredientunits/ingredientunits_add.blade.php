
@include('admin.main_master')
<div class="box_p" style="margin-left:450px" >
    <div class="box-header with-border">
      
    </div>
    <!-- /.box-header -->
    
    <div class="box-body">
      <div class="row">
        <div class="col-6"><br><br><br>
      
          <form action="{{route('store.ingredientunits')}}" method="POST">
            
                @csrf
                <h3 class="box-title">Add Unit</h3>
            <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">ID</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" value="" name="id" id="">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-search-input" class="col-sm-2 col-form-label">Outlet ID</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="outlet_id" id="">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-email-input" class="col-sm-2 col-form-label">Unit Name</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" value="" name="unit_name" id="">
              </div>
            </div>
            <div class="form-group row">
                <label for="example-email-input" class="col-sm-2 col-form-label">Order ID</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" value="" name="order_id" id="">
                </div>
              </div>
            <div class="form-group row">
              <label for="example-email-input" class="col-sm-2 col-form-label">Description</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" value="" name="description" id="">
              </div>
            </div>
         
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.box-body -->
  </div>