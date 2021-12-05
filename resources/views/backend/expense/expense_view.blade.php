

@include('admin.main_master')


<div class="row" style="margin-top:100px">
    <div class="col-lg-2"></div>
    
<div class="col-lg-8">
<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">All Expenses </h3>
      
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
          <div id="example_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
              
            
            <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100 dataTable" role="grid" aria-describedby="example_info">
            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" 
                    aria-label="Name: activate to sort column descending" style="width: 187.688px;">Outlet_id</th>
                    
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" 
                    style="width: 293.969px;"> Expense Item </th>
                    
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" 
                    style="width: 137.969px;"> Person Name </th>
                    
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" 
                    style="width: 65.7188px;"> Total Ammount </th>
                    
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" 
                    style="width: 129.891px;"> Expense Image </th>
                    
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" 
                    style="width: 118.719px;"> Note </th>

                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" 
                    style="width: 118.719px;"> Added by </th>

                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" 
                    style="width: 118.719px;"> Action </th>
                </tr>
            </thead>
            
            
            <tbody>   
                
                @foreach ($expenses as $expense)
                
    
            <tr role="row" class="odd">
                    <td class="sorting_1">{{ $expense->outlet_id }}</td>
                    
                    <td>{{ $expense['expense']['expense_item_name'] }}</td>
                    
                    <td>{{ $expense->person_name }}</td>
                    <td>{{ $expense->ammount }}</td>
                    {{--  <td>{{ $expense->image }}</td>  --}}
                    <td> 
                        <img src="{{ asset($expense->image) }} " height="80px;" width="80px;" alt="">
                
                    </td>
                    <td>{{ $expense->note }}</td>
                    <td>{{ $expense->added_by }}</td>
                    <td>
                        <a href="{{ route('expense.edit', $expense->id) }}" class="btn btn-info btn-sm" title="Edit">Edit </a>
                        <a href="{{ route('expense.delete', $expense->id) }}" class="btn btn-info btn-sm" class="btn btn-info" title="Edit">Delete</i> </a>
                    </td>
            </tr>
                
                @endforeach
            </tbody>
            
            

            <tfoot>
                <tr>
                    <th rowspan="1" colspan="1">Outlet_id</th>
                    <th rowspan="1" colspan="1">Expense Item</th>
                    <th rowspan="1" colspan="1">Person Name</th>
                    <th rowspan="1" colspan="1">Total Ammount</th>
                    <th rowspan="1" colspan="1">Expense Image</th>
                    <th rowspan="1" colspan="1">Note</th>
                    <th rowspan="1" colspan="1">Added by</th>
                    <th rowspan="1" colspan="1">Action</th>
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