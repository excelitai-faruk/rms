
@include('admin.main_master')



<div class="box_p" style="margin-left: 450px;margin-top:150px" >
    <div class="box-header with-border">
      <h4 class="box-title"> Update Dapartment Name </h4>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <div class="col-8">
           
            <form action="{{ route('update.dep') }}" method="POST" >
                @csrf
                
                <input type="hidden" name="id" value="{{$dep_edit->id}}">
            
                <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label"> Department Name </label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="dep_name" value="{{$dep_edit->dep_name}}" id="example-text-input">
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