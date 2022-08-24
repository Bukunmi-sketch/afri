@extends("layouts.appa");

<link href="{{ asset('css/items.css') }}" rel="stylesheet">

@section('content')

   <div class="middle">
      <div class="follow-unfollow">
         <button type="submit" class="justbtn" ><a href={{ route('create') }}> Available Orders</a> </button>
      </div>
        @if (count($order) > 0 )

              <div class="userbox">
               <!---------------------each users ----------------->
               <div class="userContainer">
                  @foreach ($order as $customerOrders)
                 <div class="each-user">
                           <div class="productname"> {{$customerOrders->customers_name }} </div>
                           <div id="followers-count" class="followers-count {{$customerOrders->order_id}} " >  {{$customerOrders->order_id}}</div>
                           <div id="followers-count"> {{$customerOrders->email}} </div>
                           <a href="#"> <div class="profileview">{{$customerOrders->cart_items}}</div></a>
                           <a href="#"> <div class="profileview"> {{ $customerOrders->payment_status}}</div></a>

                      <div id="followers-count">created: {{$customerOrders->amount}} </div>

                      <div class="follow-unfollow">
                        <form action="/deleteOrders/{{ $customerOrders->id }}" method="POST">
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
