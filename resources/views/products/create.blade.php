@extends("layouts.appa");

@section('content')

<div class="middle">

    <div class="min-sub-container" style="display:block; position:relative;"> 
           <div class="spanheader">
               <span><h4> {{ __("Add a product")}} </h4></span>             
           </div>
           
           <form action="/create" method="POST">
              {{ csrf_field() }}
           <div class="inputbox-details">
                <input type="text" id="passa" name="inputbox" placeholder="Exam Name" autofocus required>
            </div> 

            <div class="button-details">
               <button class="submit" name="login">Add</button>
            </div> 

        </form>  
    
    </div>
</div>
@endsection