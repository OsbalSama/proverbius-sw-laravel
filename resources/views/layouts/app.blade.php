<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body class="d-flex flex-column min-vh-100">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="favicon.ico" width="30" height="30" class="d-inline-block align-top" alt="">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Categorías
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <!-- <a class="dropdown-item" href="{{ route('global.top-prod-servs') }}">Top Products & Services</a>
                                <a class="dropdown-item" href="{{ route('global.top-partners') }}">Top Partners</a>
                                <a class="dropdown-item" href="{{ route('global.best-shops') }}">Best Shops</a>
                                <br> -->
                                <a class="dropdown-item" href="{{ route('global.best-shops') }}">Nuestros
                                    Partners</a>
                                <br>
                                <a class="dropdown-item" href="{{ route('global.technologies') }}">Tecnologías</a>
                                <a class="dropdown-item" href="{{ route('global.movile-apps') }}">Aplicaciones
                                    Móviles</a>
                                <a class="dropdown-item" href="{{ route('global.web-services') }}">Web Services</a>
                                <br>
                                <a class="dropdown-item" href="{{ route('global.industry') }}">Industria</a>
                                <a class="dropdown-item" href="{{ route('global.restaurants') }}">Restaurantes y
                                    Comida Rápida</a>
                                <a class="dropdown-item" href="{{ route('global.sightseeing') }}">Negocios</a>
                                <a class="dropdown-item" href="{{ route('global.e-commerce') }}">E-Commerce</a>
                                <br>
                                <a class="dropdown-item" href="{{ route('global.oher-cats') }}">Otras Categorías</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('global.publicProducts') }}">Productos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('global.publicServices') }}">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('global.publicStores') }}">Conocenos</a>
                        </li>
                        @if (Auth::check() && Auth::user()->isClient())
                            <!-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('global.clientHistory') }}">History</a>
                        </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('global.JoinUs') }}">Únete a Nosotros</a>
                            </li>
                        @endif
                        <!-- @if (Auth::check() && Auth::user()->isAdmin())
<li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Admin Controlls
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                <br>
                                <a class="dropdown-item" href="">All Accounts</a>
                                <a class="dropdown-item" href="">All Accounts</a>
                                <a class="dropdown-item" href="">All Accounts</a>
                            </div>
                        </li>
@endif -->
                        @if (Auth::check() && Auth::user()->isAdmin())
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Admin Controlls
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="">Public Dashboard Sections</a>
                                    @if (Auth::check() && Auth::user()->isRoot())
                                        <a class="dropdown-item" href="">Admin Dashboard Sections</a>
                                    @endif
                                    <br>
                                    <a class="dropdown-item" href="{{ route('admin.accounts.all') }}">All
                                        Accounts</a>
                                    <a class="dropdown-item" href="{{ route('admin.all-products') }}">All
                                        Products</a>
                                    <a class="dropdown-item" href="{{ route('admin.all-services') }}">All
                                        Services</a>
                                    <a class="dropdown-item" href="{{ route('admin.all-stores') }}">All Stores</a>
                                    <br>
                                    <a class="dropdown-item" href="">Site Settings</a>
                                </div>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('global.getHelp') }}">Ayuda</a>
                        </li>
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                    @if (Auth::check())
                                        <a class="dropdown-item"
                                            href="{{ route('public.viewProfile', [Auth::user()->id]) }}">Mi Perfil</a>
                                        @if (Auth::user()->isClient())
                                            <br>
                                            <a class="dropdown-item" href="">Mis Suscripciones</a>
                                            <a class="dropdown-item" href="">Mis Compras</a>
                                            <a class="dropdown-item" href="{{ route('global.JoinUs') }}">Vender en la
                                                Tienda</a>
                                        @endif

                                        @if (Auth::user()->isPartner() || Auth::user()->isAdmin())
                                            <br>
                                            <a class="dropdown-item" href="">Mis Suscripciones</a>
                                            <a class="dropdown-item" href="">Mis Compras</a>
                                            <a class="dropdown-item" href="">Mis Productos & Servicios</a>
                                            {{-- <a class="dropdown-item" href="{{ route('global.JoinUs') }}">Vender en la
                                                Tienda</a> --}}
                                        @endif
                                    @endif
                                    <br>
                                    <a class="dropdown-item" href="">Preguntas y Sugerencias</a>
                                    <a class="dropdown-item" href="">Seguridad</a>
                                    <a class="dropdown-item" href="">Privacidad</a>
                                    <a class="dropdown-item" href="">Sobre Nosotros</a>
                                    <br>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <!-- <main class="py-4"> -->
        <main>
            @yield('content')
        </main>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    @yield('scripts')
</body>
<footer class="mt-auto bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
            <!-- Facebook -->
            <a target="_blank" class="btn btn-outline-light btn-floating m-1"
                href="https://www.facebook.com/ProverbiusSoftware" role="button"><i class="fab fa-facebook-f"></i></a>

            <!-- Twitter -->
            <a target="_blank" class="btn btn-outline-light btn-floating m-1"
                href="https://www.linkedin.com/in/osbaldo-toledo-ramos-06b249213" role="button"><i
                    class="fab fa-linkedin-in"></i></a>

            <!-- Google -->
            <a target="_blank" class="btn btn-outline-light btn-floating m-1"
                href="https://www.youtube.com/channel/UCyHUW3repfp5RBWrDSXJ4Lw/featured" role="button"><i
                    class="fab fa-youtube"></i></a>

            <!-- Instagram -->
            <a target="_blank" class="btn btn-outline-light btn-floating m-1"
                href="https://chat.whatsapp.com/G6MDE4LHIOj413q2AD4iUj" role="button"><i
                    class="fab fa-whatsapp"></i></a>

            <!-- Linkedin -->
            <a target="_blank" class="btn btn-outline-light btn-floating m-1"
                href="https://t.me/joinchat/MPDEYAUpXTw3MDlh" role="button"><i class="fab fa-telegram"></i></a>

            <!-- Github -->
            <!-- <a target="_blank" class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a> -->
        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
</footer>

</html>
