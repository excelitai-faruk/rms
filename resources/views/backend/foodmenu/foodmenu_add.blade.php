
@include('admin.main_master')



<div class="box_p" style="margin-left:450px" >
    <div class="box-header with-border">
      
    </div>
    <!-- /.box-header -->
    
    <div class="box-body">
      <div class="row">
        <div class="col-6"><br><br><br>
      
          <form action="{{route('store.menu')}}" method="POST" enctype="multipart/form-data">
            
                @csrf
                <h3 class="box-title">Add Food Menu</h3>
            <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Outlet ID</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" value="" name="outlet_id" id="">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-search-input" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="name" id="">
              </div>
            </div>

            <div class="form-group row">
              <label for="example-search-input" class="col-sm-2 col-form-label">Code</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="code" id="">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-email-input" class="col-sm-2 col-form-label">Category</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" value="" name="category" id="">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-search-input" class="col-sm-2 col-form-label">Ingredient Consumtions</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="ingredient_consumtion" id="">
              </div>
            </div>

     
            <div class="form-group row">
              <label for="example-search-input" class="col-sm-2 col-form-label">Sale Price</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="sale_price" id="">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-search-input" class="col-sm-2 col-form-label">Vat</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="vat" id="">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-email-input" class="col-sm-2 col-form-label">Description</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" value="" name="description" id="">
              </div>
            </div>

            <div class="form-group row">
              <label for="example-email-input" class="col-sm-2 col-form-label">Image</label>
              <div class="col-sm-10">
                <input class="form-control" type="file" name="featured_photo">
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