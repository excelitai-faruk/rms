
@include('admin.main_master')



<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">


<div class="box">
    <div class="box-header with-border">
      <h4 class="box-title">Default Basic Forms</h4>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <div class="col-12">
            <form action="{{ route('setting.store')}}"  method="POST" enctype='multipart/form-data'>
            @csrf
                <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">OutletId</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="outlet_id" id="outlet_id">
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-search-input" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="resturent_name" id="resturent_name">
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-email-input" class="col-sm-2 col-form-label">Image</label>
              <div class="col-sm-10">
                <input class="form-control" type="file" name="logo_image" id="logo_image">
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-url-input" class="col-sm-2 col-form-label">WebsiteL</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="webside" id="webside">
              </div>
            
            </div>
            
            
            <div class="form-group row">
              <label for="example-date-input" class="col-sm-2 col-form-label">Date</label>
              <div class="col-sm-10">
                <input class="form-control" type="date" name="date" id="date">
              </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-success pull-right"> add</button>
              </div>
            
        </form>

            </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.box-body -->
</div>

    <div class="col-lg-2"></div>
</div>
{{-- main row --}}