@extends('admin.main_master')
 <div class="box" style="margin-top: 50px;margin-left:50px;margin-right:50px">
    <div class="box-header with-border">
      <h4 class="box-title">Table Striped</h4>
    </div>
    <!-- /.box-header -->
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-7">
    <div class="box-body">
        <div class="table-responsive">
          <table class="table table-striped mb-0">
              <thead>
                <tr>
               
                  <th scope="col">id</th>
                  <th scope="col">outlet_id</th>
                  <th scope="col">reference_no</th>
                  <th scope="col">supplier</th>
                  <th scope="col">ingredients</th>
                  <th scope="col">date</th>
                  <th scope="col">grand_total</th>
                  <th scope="col">paid</th>
                  <th scope="col">due</th>
                  <th scope="col">sn</th>
                  <th scope="col">Action</th>
                  

                </tr>
              </thead>

              

              <tbody>
                {{-- <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Mark</td>
                  <td>Mark</td>
                  <td>Mark</td>
                  <td>Mark</td>
                </tr> --}}
                @foreach ($purchase_view as $purchase)
                <tr>
                    <td>{{ $purchase->id }}</td>
                    <td>{{ $purchase->outlet_id }}</td>
                    <td>{{ $purchase->reference_no }}</td>
                    <td>{{ $purchase->supplier }}</td>
                    <td>{{ $purchase->ingredients }}</td>
                    <td>{{ $purchase->date }}</td>
                    <td>{{ $purchase->grand_total }}</td>
                    <td>{{ $purchase->paid }}</td>
                    <td>{{ $purchase->due }}</td>
                    <td>{{ $purchase->sn }}</td>
                    <td style="display:flex">
                        <a href="{{ route('purchase.edit', $purchase->id ) }}" class="btn btn-success">Edit</a> 
                        {{-- <a href="javascript:void(0)" class="btn btn-danger" id="#">Delete</a> --}}
                        <form action="{{route('purchase.delete')}}" method="POST">
                            @csrf
                            <input type="hidden" name="p_id" id="p_id" value="{{$purchase->id}}">
                            <button class="btn btn-danger deleteButton" name="archive" type="submit">Delete</button>
                        </form>
                    </td>  
                </tr>  
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
</div>
    <div class="col-sm-3"></div>
</div>
    <!-- /.box-body -->
  </div>

  @section('script')

  <script>
      $('.deleteButton').on('click',function(e)
      {

        event.preventDefault(); // prevent form submit
        var form = event.target.form; // storing the form

        swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            swal("Poof! Your imaginary file has been deleted!", {
            icon: "success",
            });
            form.submit();

            
        } else {
            swal("Your imaginary file is safe!");
        }
        });



      });
        
  </script>
      
  @endsection