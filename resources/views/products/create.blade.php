@extends("layouts.appa");

@section('content')

<div class="middle">

    <div class="min-sub-container" style="display:block; position:relative;"> 
           <div class="spanheader">
               <span><h4> {{ __("Add a product")}} </h4></span>             
           </div>
           
           <form action="/create" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}

            <div class="inputbox-details">
                <input type="text" id="passa" name="product_name" placeholder="Product name" autofocus >
            </div>

            <div class="inputbox-details">
                <textarea id="passa" name="product_description" placeholder="Product description" autofocus ></textarea>
            </div> 

            <div class="inputbox-details">
                <input type="number" id="passa" name="product_price" placeholder="Product price" autofocus >
            </div> 
         
            <div class="images">
                <div id="upload" >
                    <img src="" onClick="trigger()" id="profileDisplay" > 
                    <input type="file" name="product_imagea" onchange="displayImage(this)"   id="capture"  style="display:none;">
                    <i class="fa fa-camera" id="camera"></i>
                </div>
    
                <div id="upload" >
                    <img src="" onClick="trigger()" id="profileDisplay" > 
                    <input type="file" name="product_imageb" onchange="displayImage(this)"   id="capture"  style="display:none;">
                    <i class="fa fa-camera" id="camera"></i>
                </div>
    
            </div>
           
            <div class="button-details">
               <button class="submit" name="login">Add</button>
            </div> 

        </form>  
    
    </div>
</div>
@endsection