@include('admin.main_master') 

<section class="purches" style="margin-top: 150px">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-3">
            <p>Ingredient Update</p>    
        </div>
        <div class="col-lg-6" margin-top:40px>
           
            <form action="{{route('update.ingredient')}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$ingredient_edit->id}}">
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" value="{{$ingredient_edit->outlet_id}}" name="outlet_id" id="">
                    </div> 
                    </div>

                    <div class="form-group row">
                        <label for="example-search-input" class="col-sm-2 col-form-label">Outlet ID</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" value="{{$ingredient_edit->outlet_id}}" name="outlet_id" id="">
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-search-input" class="col-sm-2 col-form-label">Purchase Price</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" value="{{$ingredient_edit->purchase_price}}" name="purchase_price" id="">
                    </div>
                    </div>
      
                    <div class="form-group row">
                        <label for="example-email-input" class="col-sm-2 col-form-label">Alert Qty</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" value="{{$ingredient_edit->alert_qty}}" name="alert_qty" id="">
                    </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-email-input" class="col-sm-2 col-form-label">Unit</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" value="{{$ingredient_edit->unit}}" name="unit" id="">
                    </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-email-input" class="col-sm-2 col-form-label">Code</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" value="{{$ingredient_edit->code}}" name="code" id="">
                    </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-email-input" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" value="{{$ingredient_edit->name}}" name="name" id="">
                    </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
            <div class="col-lg-3"> </div>
        </div>
    </div>
</section>




