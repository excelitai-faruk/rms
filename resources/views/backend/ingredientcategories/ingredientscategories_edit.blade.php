
@include('admin.main_master') 

<section class="purches" style="margin-top: 150px">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-3">
            <p>Add purches</p>    
            </div>
          <div class="col-lg-6">
           
            <form action="{{route('update.ingredientcategories')}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$ingredientcategory_edit->id}}">
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">ID</label>
                   <div class="col-sm-10">
                      <input class="form-control" type="text" value="{{$ingredientcategory_edit->outlet_id}}" name="outlet_id" id="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-search-input" class="col-sm-2 col-form-label">Category Name</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" value="{{$ingredientcategory_edit->category_name}}" name="category_name" id="">
                    </div>
                  </div>
      
                  <div class="form-group row">
                    <label for="example-email-input" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" value="{{$ingredientcategory_edit->description}}" name="description" id="">
                    </div>
                  </div>
      
                    <button type="submit" class="btn btn-primary">Submit</button>
                 </form>
                 </div>
          <div class="col-lg-3"> </div>
        </div>
      </div>
</section>




