@extends('admin.main_master')


<div class="row" style="margin-top:150px">
    
<div class="col-lg-2"></div>
    
    

    <div class="col-lg-8">
<div class="box">
    
    <div class="box-header with-border">
      <div class="row">
          <div class="col-lg-6">
            <h3 class="box-title"> Payment Methods </h3>
        </div>
      <div class="col-lg-6" >
          <button type="submit" class="btn btn-primary" style="margin-left:500px">
        <a href="{{ route('payment.add') }}"> <strong style="font-color:white"> + Add Payment Method </strong> </a>
        
        </button>
      </div>
      </div>
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
                    style="width: 293.969px;">Payment Method Name</th>
                    
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" 
                    style="width: 137.969px;">Description</th>
                    
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" 
                    style="width: 65.7188px;">Added By</th>
                    
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" 
                    style="width: 129.891px;">Action</th>
                    
                    
                </tr>
            </thead>
            
            <tbody>
                
                @foreach ($payments as $payment)
                    
                <tr role="row" class="odd">
                    <td class="sorting_1">{{ $payment->outlet_id }}</td>
                    <td>{{ $payment->name }}</td>
                    <td>{{ $payment->description }}</td>
                    <td>{{ $payment->added_by }}</td>
                    <td>
                        <a href="{{ route('payment.edit',$payment->id) }}" class="btn btn-light" title="Edit">Edit </a>
                        <a href="{{ route('payment.delete',$payment->id) }}" class="btn btn-dark" title="Edit">Delete</a>
                    </td>
                    
                </tr>
                @endforeach
            
            </tbody>				  
            
            <tfoot>
                <tr>
                    <th rowspan="1" colspan="1">Outlet_id</th>
                    <th rowspan="1" colspan="1">Payment Method Name</th>
                    <th rowspan="1" colspan="1">Description</th>
                    <th rowspan="1" colspan="1">Added By</th>
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
{{--  main colum end for 8  --}}

  



<div class="col-lg-2"></div>
</div> 
{{--  main row end  --}}