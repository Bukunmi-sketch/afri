@extends("layouts.appa")


@section('content')
<div class="middle">

    <div class="min-sub-container" style="display:block; position:relative;"> 
        <div class="spanheader">
            <span><h4> {{ __("Make payment")}} </h4></span>             
        </div>
        
        <form action="/create" method="POST" enctype="multipart/form-data">
           {{ csrf_field() }}
           @include('common.errors')
         
         <div class="inputbox-details">
             <input type="text" id="passa" name="product_name" style="@error('product_name') border:1px solid red  @enderror" placeholder="selected product" value=" " autofocus >

             @error('product_name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror   
         </div>

         <div class="inputbox-details">
            <input type="number" id="passa" name="product_price" placeholder="Product price" value="  "  autofocus style="@error('product_price') border:1px solid red  @enderror">

            @error('product_price')
             <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
             </span>
             @enderror   
        </div> 

         <div class="inputbox-details">
            <input type="number" id="passa" name="customers_name" placeholder="customers_name" value="  "  autofocus style="@error('product_price') border:1px solid red  @enderror">

            @error('product_price')
             <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
             </span>
             @enderror   
        </div> 
       

        <div class="inputbox-details">
            <input type="number" id="passa" name="email" placeholder="customers email" value="  "  autofocus style="@error('product_price') border:1px solid red  @enderror">

            @error('product_price')
             <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
             </span>
             @enderror   
        </div> 


        <div class="inputbox-details">
            <input type="number" id="passa" name="product_price" placeholder="Product price" value="  "  autofocus style="@error('product_price') border:1px solid red  @enderror">

            @error('product_price')
             <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
             </span>
             @enderror   
        </div> 
       


         <div class="inputbox-details">
             <input type="number" id="passa" name="phone_no" placeholder="phone no" value=" "  autofocus style="@error('product_price') border:1px solid red  @enderror">

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