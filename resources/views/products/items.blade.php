@extends("layouts.appa");

<link href="{{ asset('css/items.css') }}" rel="stylesheet">

@section('content')

   <div class="middle">
        @if (count($list) > 0 )
   
              <div class="userbox">
               <!---------------------each users -----------------> 
               <div class="userContainer">
                  @foreach ($list as $item)
                 <div class="each-user">
                           <div class="productname"> {{$item->product_name }} </div>
                           <div id="followers-count" class="followers-count {{$item->id}} " > 2 sales </div>
                           <div id="followers-count"> {{$item->category}} </div>
                           <a href="#"> <div class="profileview">view details</div></a>

                     <div class="follow-unfollow">        
                             <button type="submit" class="justbtn" > {{ $item->available}} </button>     
                      </div>
                      <div id="followers-count">created: {{$item->created_at}} </div> 
                      <div class="follow-unfollow">        
                        <button type="submit" class="deletebtn" > Delete </button>     
                 </div>                                                
                 </div>
                 @endforeach
                  <!---------------------each of each users ----------------->  
                </div>  
             </div>
           
        @else
            <h4>there are no products available</h4>
        @endif
   
   
   
   </div>
@endsection