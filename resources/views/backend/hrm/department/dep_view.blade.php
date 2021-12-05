





@include('admin.main_master')




<div class="row" style="margin-top:100px">
    <div class="col-lg-2"></div>
    
<div class="col-lg-8">
<div class="box">
    <div class="box-header with-border">
      
      <div class="row">
        <div class="col-lg-6">
      <h3 class="box-title" style="margin-left:40px" >Department List </h3>
        </div>
       
        <div class="col-lg-6">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary " style="margin-left:550px" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >
         + Add Department
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Department Name</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                
                <form action="{{ route('dep.store') }}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="department-name" class="col-form-label">Department Name</label>
                    <input type="text" name="dep_name" class="form-control" id="dep_name">
                  </div>
                  
                

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"> Add </button>
              </div>
            </form>
            </div>
          </div>
        </div>
      
    </div>
  </div>
  {{-- row end --}}
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
          <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
              
            
            <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" 
                    aria-label="Name: activate to sort column descending" style="width: 187.688px;">serial no</th>
                    
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" 
                    style="width: 293.969px;"> Department Name  </th>
                    


                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" 
                    style="width: 118.719px;"> Action </th>
                </tr>
            </thead>
            
            
            <tbody>   
                
                
                @foreach ($deps as $dep)
                
    
            <tr role="row" class="odd">
                    <td class="sorting_1">{{$loop->iteration}}</td>
                    
                    <td>{{ $dep->dep_name }}</td>
                    <td>
                      <a href="{{ route('dep.edit', $dep->id) }}" class="btn btn-light btn-sm" title="Edit">Edit </a>
                        <a href="{{ route('dep.delete', $dep->id) }}" class="btn btn-dark btn-sm"  title="Edit">Delete </a>
                    </td>
            </tr>
                
                @endforeach
            </tbody>
            
            

            <tfoot>
                <tr>
                  
                </tr>
            </tfoot>
        </table>
        
        
    </div>
        </div>              
    </div>
    <!-- /.box-body -->
  </div>
</div>
{{--  main colum 8 end  --}}

  <div class="col-lg-2"></div>
</div> 
{{--  main row end  --}}
