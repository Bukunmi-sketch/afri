<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('dashboard afrimama') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/sidebar.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

   <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  -->
    @include('layouts.meta')
</head>
<body>
<div class="container">
        
    <div class="sub-container">
    
    <div class="logobox">
            <div class="sub-logo">
            <p class="logoo">Afrimama</p>
            </div>
    </div>
    
    <div class="login-details">
        <form method="POST" action="{{ route('login') }}">
            @csrf
         <div class="error"><p></p></div><br>
            
            <div class="email-details">
                 <input type="email" name="email" placeholder="{{ __('Email Address') }}" autofocus required autocomplete="email" >
            </div>

            @error('email')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
            @enderror
            
            <div class="password-details">
                <span  id="show" onclick="check()"><i class="fa fa-eye"></i></span>
                <input type="password" id="pass" name="password" placeholder="{{ __('Password') }}"     required autocomplete="current-password">
            </div>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
            <button class="submit" name="login">{{ __('Login') }}</button>
            
            <div class="forgetbox">   
                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                @endif
            </div>
            
            <div class="before">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
    
            <div class="create">
            <a href =" {{ route('register') }} " class="createbut"> Create New  Account </a>
          </div>
    
        </form>  
     </div>
    </div>
    </div> 
</body>




