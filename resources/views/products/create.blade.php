@extends("layouts.appa");

@section('content')
    
    <div class="panel panel-default">
    <div class="panel-heading">
            Create a product
        </div>
       
          <div class="panel-body">
              <!-- Display Validation Errors -->
             
              <!-- New Task Form -->
              <form action="/task" method="POST" class="form-horizontal">
                  {{ csrf_field() }}
       
                  <!-- Task Name -->
                  <div class="form-group">
                      <label for="product-name" class="col-sm-3 control-label"> {{ __('Product name') }}</label>
       
                      <div class="col-sm-6">
                          <input type="text" name="product_name" id="product-name" class="form-control">
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="task table" class="col-sm-3 control-label">{{__('product_description')}}</label>
    
                    <div class="col-sm-6">
                        <input type="text" name="product_name" id="product-name" class="form-control">
                    </div>
                </div>
      
                  <div class="form-group">
                      <label for="task table" class="col-sm-3 control-label">{{__('price')}}</label>
      
                      <div class="col-sm-6">
                          <input type="number" name="price" class="form-control" id="">
                      </div>
                  </div>

                  
       
                  <!-- Add Task Button -->
                  <div class="form-group">
                      <div class="col-sm-offset-3 col-sm-6">
                          <button type="submit" class="btn btn-primary">
                              <i class="fa fa-plus"></i> Add Task
                          </button>
                      </div>
                  </div>


              </form>
          </div>
      </div>
@endsection