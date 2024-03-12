<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.bunny.net"> --}}
    {{-- <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}

    {{-- Styles --}}
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
    {{-- <link href="{{ asset("css/bootstrap.css") }}" rel="stylesheet"> --}}
    <link href="{{ asset("css/datatables.css") }}" rel="stylesheet">
    
    {{-- JS STYLE --}}
    <script src={{asset("js/jquery-3.6.0.min.js")}}></script>
    <script src={{asset("js/app.js")}}></script>
    {{-- <script src={{asset("js/bootstrap.min.js")}}></script> --}}
    <script src={{asset("js/bootstrap.bundle.min.js")}}></script>

    <script src="{{asset("js/popper.js")}}"></script>
    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <link href="{{ asset("css/font-awesome.css") }}" rel="stylesheet">
    <link href="{{ asset("css/font-awesome.css.map") }}" rel="stylesheet">
    <link href="{{ asset("css/simple-line-icons.css") }}" rel="stylesheet">

    {{-- <script src="{{asset("js/bootstrap.js")}}"></script> --}}
    <script src="{{asset("js/jquery.dataTables.min.js")}}"></script>
    <script src="{{asset("js/dataTables.bootstrap5.min.js")}}"></script>
    <script src="{{asset("js/dataTables.buttons.min.js")}}"></script>
    <script src="{{asset("js/custom.js")}}"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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

             <!-- Modal1 -->
             <div class="modal fade" data-backdrop="true"  id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content" class="container bg-white">
                    ...
                    </div>
                </div>
            </div>
            
            {{-- Modal2 --}}
            <div class="modal fade" data-backdrop="true"  id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content" class="container bg-white">
                    ...
                    </div>
                </div>
            </div>

            {{-- Modal3 --}}
            <div class="modal fade bd-example-modal-lg" id="myLargeModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myLargeModal">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    ...
                  </div>
                </div>
            </div>

            @yield('content')
        </main>
    </div>
</body>
</html>
