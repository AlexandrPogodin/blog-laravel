<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/shards.min.js') }}" defer></script>
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/shards.min.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                            <li class="nav-item">
                                    <a class="nav-link {{ (URL::current() == url('/')) ? "active" : '' }}" href="/">Home <span class="sr-only">(current)</span></a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link {{ (URL::current() == url('/contacts')) ? "active" : '' }}" href="{{ url('/contacts') }}">Contacts</a>
                                  </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>
        </main>
    </div>
    @section('footer')
    <div class="fdb-block bg-gray fp-active" data-block-type="contacts" data-id="2" draggable="true">
            <div class="container">
              <div class="row text-center justify-content-center">
                <div class="col-12 col-md-8 col-lg-7">
                    <br><br><hr><br>
                    {{-- <p class="center-img image is-32x32">
                            <img class="rounded mx-auto d-block" style="width: 50px; height: 50px;" src="{{asset('images/av.png')}}">
                            </p> --}}
                  <p class="h4">apogodinv@mail.ru</p>
                  <p>
                        Developed with <i class="text-danger far fa-heart"></i> by <strong>Alexandr Pogodin</strong>.
                    </p>
                  <p><br></p>
                  <p class="h4">
                        <a href="https://vk.me/alexandrpogodin" target="_blank"><i class="fab fa-vk"></i></a>
                        <a href="https://m.me/alexandr.pogodin2" target="_blank"><i class="fab fa-facebook-messenger"></i></a>
                        <a href="https://t.me/alexandrpogodin" target="_blank"><i class="fab fa-telegram-plane"></i></a>
                  </p>
                </div>
              </div>
            </div>
        </div>
    @show
    @yield('scripts')
</body>
</html>
