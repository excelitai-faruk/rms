


@include('admin.main_master')
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-8">
<div class="box" style="    margin-left: 140px;">
    <div class="box-header with-border">
      <h3 class="box-title">Hover Export Data Table</h3>
      
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
          <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
           
     
   
              <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
            <thead>
                {{-- <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 102.734px;">Name</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 170.375px;">Position</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 71.0938px;">Office</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 25.1094px;">Age</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 65.9531px;">Start date</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 58.7969px;">Salary</th></tr> --}}


                <th>id</th>
                <th>Image</th>
                <th>outlet_id</th>
                <th>category_name</th>
                <th>kichen</th>
                <th>food_name</th>
                <th>component</th>
                <th>notes</th>
                <th>description</th>
                <th>start_date</th>
                <th>end_date</th>
                <th>cooking_time</th>
                <th>vat</th>
                <th>offer_rate</th>
                <th>status</th>
                <th>manu_type</th>
                <th>action</th>
      
                  </thead>
                  
                      <tbody>
                          @foreach ($food_view as $item)
                         <tr role="row" class="odd">
                            <td class="sorting_1">{{ $item->id }}</td>
                          <td><img style="hight:100px;width:100px" src="{{asset($item->image)}}" alt=""></td>
                            <td>{{ $item->outlet_id }}</td>
                            <td>{{ $item->category_name }}</td>
                            <td>{{ $item->kichen }}</td>
                            <td>{{ $item->food_name }}</td>
                            <td>{{ $item->component }}</td>
                            <td>{{ $item->notes }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->start_date }}</td>
                            <td>{{ $item->end_date }}</td>
                            <td>{{ $item->cooking_time }}</td>
                            <td>{{ $item->vat }}</td>
                            <td>{{ $item->offer_rate }}</td>
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->manu_type }}</td>
                            

                           
                                <td style="display: flex" >
                                    <a style="width: 55px;height: 38px;margin-right: 10px; margin-top: 63px;" href="{{ route('food.edit', $item->id ) }}" class="btn btn-success">Edit</a> 
                                                            
                                      <form action="{{route('food.delete')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="p_id" id="p_id" value="{{$item->id}}">
                                        <button style=" margin-top: 63px;" class="btn btn-danger deleteButton" name="archive" type="submit">Delete</button>
                                    </form>              
              
                                  </td> 

                         </tr>
                        
                     @endforeach

                </tbody>				  
           
        </table><div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div><div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example_previous"><a href="#" aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example_next"><a href="#" aria-controls="example" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div>
        </div>              
    </div>
    <!-- /.box-body -->
  </div>
</div>
  <div class="col-lg-3"></div>
</div>