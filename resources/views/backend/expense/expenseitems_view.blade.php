

@extends('admin.main_master')



<div class="container-full">
 
        

<section class="content" style="padding-right: 30rem">
    <div class="row align-items-center" style="margin-top:100px;margin-left:300px">


<div class="col-lg-8">

<div class="box-body">
    <div class="box-header with-border">
        <h3 class="box-title"> All Expense Items</h3>
      </div>
    <div class="table-responsive">
      <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
          {{--  <div class="row">
              <div class="col-sm-12 col-md-6">
              <div class="dataTables_length" id="example1_length">
                  <label>Show <select name="example1_length" aria-controls="example1" class="form-select form-control-sm">
                      <option value="10">10</option>
                      <option value="25">25</option>
                      <option value="50">50</option>
                      <option value="100">100</option>
                    </select> entries</label>
                </div>
            </div>
            <div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter">
                <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label>
            </div>
        </div>
    </div>  --}}
    <div class="row">
        <div class="col-sm-12">
            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
        <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" 
                aria-label="Name: activate to sort column descending" style="width: 187.688px;">Outlet Id</th>
                
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" 
                style="width: 293.969px;">Expense Item Name</th>
                
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" 
                style="width: 137.969px;">Description</th>
                
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" 
                style="width: 65.7188px;">Action</th>
                
                
            </tr>
        </thead>
        <tbody>  
              
            @foreach ($expenseitems as $expenseitem)           

        <tr role="row" class="odd">
                <td class="sorting_1"> {{ $expenseitem->outlet_id  }} </td>
                <td> {{ $expenseitem->expense_item_name  }} </td>
                <td> {{ $expenseitem->description  }} </td>
                <td>
                    
                    <a href="{{ route('expenseitem.edit', $expenseitem->id) }}" class="btn btn-info btn-sm" title="Edit">Edit </a>
                    <a href="{{ route('expenseitem.delete', $expenseitem->id) }}" class="btn btn-info btn-sm" class="btn btn-info" title="Edit">Delete</i> </a>
                </td>
                
            </tr>

            @endforeach
        
        </tbody>
        <tfoot>
            <tr>
                <th rowspan="1" colspan="1">Outlet Id</th>
                <th rowspan="1" colspan="1">Expense Item Name</th>
                <th rowspan="1" colspan="1">Description</th>
                <th rowspan="1" colspan="1">Action</th>
              
            </tr>
        </tfoot>
      </table>
    </div>
</div>
{{--  <div class="row">
    <div class="col-sm-12 col-md-5">
        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
    </div>
    <div class="col-sm-12 col-md-7">
        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
            <ul class="pagination">
                <li class="paginate_button page-item previous disabled" id="example1_previous">
                    <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                <li class="paginate_button page-item active">
                    <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                    
                <li class="paginate_button page-item ">
                    <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                <li class="paginate_button page-item ">
                    <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                <li class="paginate_button page-item ">
                    <a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                <li class="paginate_button page-item ">
                    <a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                <li class="paginate_button page-item ">
                    <a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                <li class="paginate_button page-item next" id="example1_next">
                    <a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>  --}}
</div>
    </div>
</div>

</div>
{{--  col 8 end for view   --}}





<div class="col-lg-4">
{{--  <div class="box_p" style="margin-left: 300px;margin-top:150px" >  --}}
    {{--  <div class="box-header with-border">
      <h4 class="box-title">Add Expense Item</h4>
    </div>  --}}
    <!-- /.box-header -->
  
    {{--  <div class="box-body">
      <div class="row">  --}}
        {{--  <div class="col-4">  --}}
            <div class="box" style="margin-top:1rem" >
            <div class="box-header with-border">
                <h3 class="box-title"> Add Expense Item</h3>
              </div>
            <form action="{{ route('expenseitem.store') }}" method="POST" >
                @csrf
            
            {{--  Oulet select code  --}}
            {{--  <div class="form-group">
                <h5>Category Select <span class="text-danger">*</span></h5>

                <div class="controls">

                <select name="category_id" class="form-control"  >

                    <option value="" selected="" disabled="">Select Category</option>

                    @foreach($categories as $category)
                     <option value="{{ $category->id }}"> {{ $category->category_name }}</option>	
                    @endforeach

                 </select>

                     @error('category_id') 
                     <span class="text-danger">{{ $message }}</span>
                     @enderror


                 </div>
                                        
                </div>  --}}


                {{--  APATOTO  --}}
                <div class="form-group row">
              <label for="example-text-input" class="col-sm-2 col-form-label">Outlet_id</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="outlet_id"  id="example-text-input">
              </div>
            </div>
            {{--  APATOTO  End for outlet id--}}

            <div class="form-group row">
              <label for="example-search-input" class="col-sm-2 col-form-label"> Expense_Item Name </label>
              <div class="col-sm-10">
                <input class="form-control" type="text" name="expense_item_name"  id="expense_item_name" placeholder="Enter Name" >
              </div>
            </div>
        
            

            <div class="form-group row">
                <label for="example-tel-input" class="col-sm-2 col-form-label"> Description </label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" name="description"  id="description" placeholder="Enter description">
                </div>
              </div>
            
            <div class="box-footer">
                {{--  <input type="submit" class="btn btn-success pull-right" value="Add Expense Item">  --}}
                <button type="submit" class="btn btn-success pull-right"> Submit </button>
            </div>
        
        </form>
    </div>
        {{--  </div>
        <!-- /.col -->  --}}
      {{--  </div>
      <!-- /.row -->
    </div>  --}}
    <!-- /.box-body -->
  {{--  </div>  --}}
</div>
{{--  col 4 end for add  --}}






</div> 
{{--  main row end  --}}
</section>






</div>