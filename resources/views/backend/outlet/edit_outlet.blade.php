

@include('admin.main_master')
<div class="box_p" style="margin-left: 450px;margin-top:150px" >
    <div class="box-header with-border">
      <h4 class="box-title">Add Outlet</h4>
    </div>
    <!-- /.box-header -->
 
   
    <div class="box-body">
      <div class="row">
        <div class="col-8">
            <form action="{{ route('outlet.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$outlet_edit->id}}">
            <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Outlet_Name</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="outlet_name" value="{{$outlet_edit->outlet_name}}" id="example-text-input">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-search-input" class="col-sm-2 col-form-label">Address</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="address" value="{{$outlet_edit->address}}" id="example-search-input">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-email-input" class="col-sm-2 col-form-label">Phone</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="phone" value="{{$outlet_edit->phone}}" id="example-email-input">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-url-input" class="col-sm-2 col-form-label">Collect_vat</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="collect_vat" value="{{$outlet_edit->collect_vat}}" id="example-url-input">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-tel-input" class="col-sm-2 col-form-label">invoice_print</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="invoice_print" value="{{$outlet_edit->invoice_print}}" id="example-tel-input">
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





  
