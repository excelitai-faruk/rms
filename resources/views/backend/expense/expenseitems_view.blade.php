

@include('admin.main_master')



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