@extends("layouts.appa");

@section('content')
   <div class="middle">
        @if ( $itemname  > 0)

        @else
            <h4>there are no products available</h4>
        @endif
   
   
   
   </div>
@endsection