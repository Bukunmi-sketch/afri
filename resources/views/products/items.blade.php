@extends("layouts.appa");

@section('content')
   <div class="middle">
        @if (count($list) > 0 )
           @foreach ($list as $item)
              <div class="productbox">
                 <h4>{{$item}}</h4>
                 
              </div>
           @endforeach
           <h4>{{$fuck}}</h4>
        @else
            <h4>there are no products available</h4>
        @endif
   
   
   
   </div>
@endsection