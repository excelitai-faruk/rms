@include('admin.main_master')

<div class="row">
      
           
      
       
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Varient</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('foodvarient.store') }}" method="POST" enctype='multipart/form-data' >
                        @csrf
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Food Name:</label>
                       
                <select name="food_name" class="form-control"  >

                    <option value="" selected="" disabled="">Select Food Name </option>

                    @foreach($foodvarient as $item)
                     <option value="{{ $item->id }}"> {{ $item->food_name }}</option>	
                    @endforeach

                 </select>
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Varient Name:</label>
                        <input type="text" name="food_varient" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Price:</label>
                        <input type="text" name="price" class="form-control" id="recipient-name">
                    </div>
                 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>

            </form>
                </div>
            </div>
            </div>
        
</div>
{{-- ////////////////////////////////////////////////////////////////////// --}}


<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-8">
<div class="box" style="    margin-left: 140px;">
    <div class="box-header with-border">
      <h3 class="box-title">Hover Export Data Table</h3>
      <button style="margin-left: 910px;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Food Varient</button>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
          <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
           
     
   
              <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
            <thead>
                {{-- <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 102.734px;">Name</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 170.375px;">Position</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 71.0938px;">Office</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 25.1094px;">Age</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 65.9531px;">Start date</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 58.7969px;">Salary</th></tr> --}}


                <th>id</th>
                <th>food_name</th>
                <th>food_varient</th>
                <th>price</th>
                <th>action</th>
                
      
                  </thead>
                  
                      <tbody>
                          @foreach ($foodvar as $item)
                         <tr role="row" class="odd">
                            <td class="sorting_1">{{ $item->id }}</td>
                            {{-- <td>{{ $item['expense']['food_name'] }}</td>  --}}
                            <td>{{ $item->expense->food_name }}</td>
                            <td>{{ $item->food_varient }}</td>
                            <td>{{ $item->price }}</td>
 
                                <td style="display: flex" >
    
                                    <a style="width: 55px;height: 38px;margin-right: 10px; margin-top: 63px;" data-bs-toggle="modal" data-bs-target="#exampleModall" href="{{ route('foodvarient.edit', $item->id ) }}" class="btn btn-success">Edit</a> 
                                    <div class="modal fade" id="exampleModall" tabindex="-1" aria-labelledby="exampleModalLabell" aria-hidden="true">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabell">Add Varient</h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                            <form action="{{ route('foodvarient.update') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                              <div class="mb-3">
                                                  <label for="recipient-name" class="col-form-label">Food Name:</label>
                                                 
                                          <select name="food_name" class="form-control"  >
                          
                                              <option value="" selected="" disabled="">Select Food Name </option>
                          
                                              {{-- @foreach($foodvarient_edit as $item)
                                             
                                               <option value="{{ $item->id }}" {{ $item->id == $foodvarient_edit->food_name ? 'selected' : ''}} > {{ $item->expense-category_name }} </option>	
                                              @endforeach --}}
                          
                                           </select>
                                              </div>
                                              <div class="mb-3">
                                                  <label for="message-text" class="col-form-label">Varient Name:</label>
                                                  <input type="text" name="food_varient"  value="{{$foodvarient_edit->food_varient}}" class="form-control" id="recipient-name">
                                              </div>
                                              <div class="mb-3">
                                                  <label for="message-text" class="col-form-label">Price:</label>
                                                  <input type="text" name="price"  value="{{$foodvarient_edit->price}}" class="form-control" id="recipient-name">
                                              </div>
                                           
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                              <button type="submit" class="btn btn-primary">Add</button>
                                          </div>
                          
                                      </form>
                                          </div>
                                      </div>
                                      </div>
                                  
                          </div>
                                                            
                                      <form action="{{route('foodvarient.delete')}}" method="POST">
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
