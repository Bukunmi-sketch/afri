<nav>
    <div class="container">
         <div class="bar" onclick="opennav()"> <i class="fa fa-navicon"></i> </div>

         <h2 class="logo"> Dashboard </h2>
         
         <div class="create">
                @auth
                <a href="{{ url('/logout') }}" class="logout">logout</a>
              @else
                <a href="{{ route('login') }}" class="login">Log in</a>
      
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="register">Register</a>
                @endif
            @endauth
         </div>
    </div>
</nav>