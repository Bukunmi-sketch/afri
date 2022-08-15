<nav>
    <div class="container">
         <div class="bar" onclick="opennav()"> <i class="fa fa-navicon"></i> </div>

         <h2 class="logo">Admin Dashboard </h2>

         <div class="create">
                @auth
                <form action="{{ route('logout') }}" method="POST">
                     @csrf
                    <button class="logout">logout</button>
                </form>
              @else
                <a href="{{ route('login') }}" class="login">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="register">Register</a>
                @endif
            @endauth
         </div>
    </div>
</nav>
