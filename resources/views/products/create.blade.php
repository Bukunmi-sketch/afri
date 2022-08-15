@extends("layouts.appa");

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

         <!--     <div class="images">
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
            -->

            <div class="inputbox-details">
                <select name="category">
                    <option value="" disabled selected>Product Category</option>
                    <option value="cereals">Cereals</option>
                    <option value="Tubers">Tubers</option>
                    <option value="fruits">fruits</option>
                    <option value="Cottons">Cottons</option>
                </select>
                @error('product_avalable')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
                 @enderror
            </div>

            <div class="inputbox-details">
                <select name="product_available">
                    <option value="" disabled selected>Product's availability</option>
                    <option value="available">Availble</option>
                    <option value="unavailable">Unavailable</option>

                </select>
                @error('product_avalable')
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
</div>
@endsection
