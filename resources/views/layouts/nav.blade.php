<nav>
    <div class="container">
         <div class="bar" onclick="opennav()"> <i class="fa fa-navicon"></i> </div>

         <h2 class="logo"> Dashboard </h2>
         
         <div class="create">
                @auth
                <a href="{{ url('/logout') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
      
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
         </div>
    </div>
</nav>