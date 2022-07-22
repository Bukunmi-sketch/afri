@extends("layouts.appa");

<link href="{{ asset('css/items.css') }}" rel="stylesheet">

@section('content')

   <div class="middle">
      <div class="follow-unfollow">          
         <button type="submit" class="justbtn" ><a href={{ route('create') }}> Create product</a> </button>     
      </div>
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
                           <a href="#"> <div class="profileview"> {{ $item->available}}</div></a>   
                     
                      <div id="followers-count">created: {{$item->created_at}} </div> 

                      <div class="follow-unfollow">     
                        <form action="/delete/{{ $item->id }}" method="POST">
                           {{ csrf_field() }}
                           {{ method_field('DELETE')}}
                           <button type="submit" class="deletebtn" > Delete </button> 
                         </form>                           
                        </div>

                        <div class="follow-unfollow">          
                              <button type="submit" class="justbtn" > update </button>     
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