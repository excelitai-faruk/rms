Adding reservation





@include('admin.main_master')


<div class="box_p" style="margin-left:450px" >
    <div class="box-header with-border">
      
    </div>
    <!-- /.box-header -->
    

    <div class="box-body">
      <div class="row">
        <div class="col-6">
      
          <form action="{{route('reservation.store')}}" method="POST">
            
                @csrf
                <h2 class="box-title">Add Reservation</h2>
            <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">SI</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" value="" name="si" id="">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-search-input" class="col-sm-2 col-form-label">Customer_Name</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="customer_name" id="">
              </div>
            </div>

{{-- 
    
    
     $table->string('si');
            $table->string('customer_name');
            $table->string('table_no');
            $table->string('person_number');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('date');
            $table->string('status');
    
    --}}


            <div class="form-group row">
              <label for="example-email-input" class="col-sm-2 col-form-label">Table_No</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" value="" name="table_no" id="">
              </div>
            </div>

            <div class="form-group row">
              <label for="example-email-input" class="col-sm-2 col-form-label">Person_Number</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" value="" name="person_number" id="">
              </div>
            </div>

            <div class="form-group row">
                <label for="example-email-input" class="col-sm-2 col-form-label">Start_Time</label>
                <div class="col-sm-10">
                  <input class="form-control" type="time" value="" name="start_time" id="">
                </div>
              </div>

              <div class="form-group row">
                <label for="example-email-input" class="col-sm-2 col-form-label">End_Time</label>
                <div class="col-sm-10">
                  <input class="form-control" type="time" value="" name="end_time" id="">
                </div>
              </div>


              <div class="form-group row">
                <label for="example-email-input" class="col-sm-2 col-form-label">Date</label>
                <div class="col-sm-10">
                  <input class="form-control" type="date" value="" name="date" id="">
                </div>
              </div>

              <div class="form-group row">
                <label for="example-email-input" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" value="" name="status" id="">
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



      















































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































