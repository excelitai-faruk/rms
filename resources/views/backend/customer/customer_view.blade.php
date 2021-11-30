

@extends('admin.main_master')


<div class="row" style="margin-top:100px">
    <div class="col-lg-2"></div>
    
<div class="col-lg-7">
<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">All Customers </h3>
      
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
          <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
              {{--  <div class="dt-buttons btn-group">      
                <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example"><span>Copy</span></button>
                <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example"><span>CSV</span></button> 
                <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example"><span>Excel</span></button> 
                <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example"><span>PDF</span></button> 
                <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example"><span>Print</span></button> 
            </div>  --}}
            
            {{--  <div id="example_filter" class="dataTables_filter">
                <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example">
                </label>
            </div>  --}}
            
            <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" 
                    aria-label="Name: activate to sort column descending" style="width: 187.688px;">Outlet_id</th>
                    
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" 
                    style="width: 293.969px;"> Name </th>
                    
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" 
                    style="width: 137.969px;"> Date of Birth </th>
                    
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" 
                    style="width: 65.7188px;"> Email </th>
                    
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" 
                    style="width: 129.891px;"> Contact_no </th>
                    
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" 
                    style="width: 118.719px;"> Address </th>

                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" 
                    style="width: 118.719px;"> Action </th>
                </tr>
            </thead>
            
            
            <tbody>   
                
                @foreach ($customers as $customer)
                
    
            <tr role="row" class="odd">
                    <td class="sorting_1">{{ $customer->outlet_id }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->dob }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>
                        <a href="{{ route('customer.edit',$customer->id) }}" class="btn btn-info" title="Edit">Edit </a>
                        <a href="{{ route('customer.delete',$customer->id) }}" class="btn btn-info" title="Edit">Delete</i> </a>
                    </td>
                </tr>
                
                
            </tbody>
            
            @endforeach

            <tfoot>
                <tr>
                    <th rowspan="1" colspan="1">Outlet_id</th>
                    <th rowspan="1" colspan="1">Name</th>
                    <th rowspan="1" colspan="1">Date of Birth</th>
                    <th rowspan="1" colspan="1">Email</th>
                    <th rowspan="1" colspan="1">Contact_no</th>
                    <th rowspan="1" colspan="1">Address</th>
                    <th rowspan="1" colspan="1">Action</th>
                </tr>
            </tfoot>
        </table>
        
        {{--  <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
        <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
            <ul class="pagination"><li class="paginate_button page-item previous disabled" id="example_previous">
                <a href="#" aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                <li class="paginate_button page-item active"><a href="#" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                <li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                <li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                
                <li class="paginate_button page-item next" id="example_next"><a href="#" aria-controls="example" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                </li>
            </ul>
        </div>  --}}
    </div>
        </div>              
    </div>
    <!-- /.box-body -->
  </div>
</div>
{{--  main colum 8 end  --}}

  <div class="col-lg-3"></div>
</div> 
{{--  main row end  --}}