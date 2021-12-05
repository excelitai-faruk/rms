
@include('admin.main_master') 

<section class="purches" style="margin-top: 150px">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-3">
            <p>Food Menu Update</p>    
            </div>
          <div class="col-lg-6">
           
            <form action="{{route('update.menu')}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$foodmenu_edit->outlet_id}}">
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label"> Outlet ID</label>
                   <div class="col-sm-10">
                      <input class="form-control" type="text" value="{{$foodmenu_edit->name}}" name="text" id="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-search-input" class="col-sm-2 col-form-label">Code</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" value="{{$foodmenu_edit->code}}" name="code" id="">
                    </div>
                  </div>
      
                  <div class="form-group row">
                    <label for="example-email-input" class="col-sm-2 col-form-label">Ingredient Consumtion</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" value="{{$foodmenu_edit->ingredient_consumptions}}" name="ingredient_consumptions" id="">
                    </div>
                  </div>

                    <div class="form-group row">
                    <label for="example-email-input" class="col-sm-2 col-form-label">Sale Price</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" value="{{$foodmenu_edit->sale_price}}" name="sale_price" id="">
                    </div>
                  </div>
      
                    <button type="submit" class="btn btn-primary">Submit</button>
                 </form>
                 </div>
          <div class="col-lg-3"> </div>
        </div>
      </div>
</section>




