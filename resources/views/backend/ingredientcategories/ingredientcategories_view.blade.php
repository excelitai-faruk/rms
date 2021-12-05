@include('admin.main_master')


 <div class="box" style="margin-top: 50px;margin-left:50px;margin-right:50px">
    <div class="header">

    </div>
    <!-- /.box-header -->
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-7"><br><br>
      <h3>Ingredients Categories</h3>
    <div class="box-body">
        <div class="table-responsive">
          <table class="table table-striped mb-0">
              <thead>
                <tr>
               
                  <th scope="col">ID</th>
                  <th scope="col">Outlet ID</th>
                  <th scope="col">Category Name</th>
                  <th scope="col">Description</th>
                  <th scope="col">Action</th>
                  
                </tr>
              </thead>
              
              <tbody>
                @foreach ($ingredientcategory_view as $IngredientCategory)
                <tr>
                    <td>{{ $IngredientCategory->id }}</td>
                    <td>{{ $IngredientCategory->outlet_id }}</td>
                    <td>{{ $IngredientCategory->category_name}}</td>
                    <td>{{ $IngredientCategory->description }}</td>
                
                <td>
                    <a href="{{ route('edit.ingredientcategories', $IngredientCategory->id ) }}" class="btn btn-success">Edit</a>  
                    <a href="{{ route('delete.ingredientcategories', $IngredientCategory->id ) }}" class="btn btn-danger">Delete</a>  
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
  
      
