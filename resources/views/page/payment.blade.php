@extends("layouts.appa")


@section('content')
<div class="middle">

    <div class="min-sub-container" style="display:block; position:relative;"> 
        <div class="spanheader">
            <span><h4> {{ __("Add a product")}} </h4></span>             
        </div>
        
        <form action="/create" method="POST" enctype="multipart/form-data">
           {{ csrf_field() }}
           @include('common.errors')
         
         <div class="inputbox-details">
             <input type="text" id="passa" name="product_name" style="@error('product_name') border:1px solid red  @enderror" placeholder="Product name" value=" {{old("product_name")}} " autofocus >

             @error('product_name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror   
         </div>

         <div class="inputbox-details">
             <textarea id="passa" name="product_description"  placeholder="Product description" autofocus value=" {{ old("product_description") }} "  style="@error('product_description') border:1px solid red  @enderror"></textarea>

             @error('product_description')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror   
         </div> 

         <div class="inputbox-details">
             <input type="number" id="passa" name="product_price" placeholder="Product price" value=" {{ old("product_price")}} "  autofocus style="@error('product_price') border:1px solid red  @enderror">

             @error('product_price')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror   
         </div> 
        
         <div class="button-details">
            <button class="submit" name="login">Add</button>
         </div> 

        </form>  

</div>
@endsection