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
    @livewireStyles
</head>

<body class="d-flex flex-column min-vh-100">
    <div id="app">
        {{-- <nav style="background: #fd7e14;" class="navbar navbar-expand-md navbar-dark  shadow-sm"> --}}
        <nav class="navbar navbar-expand-md bg-dark navbar-dark  shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img style="width: 8rem" src="{{ asset('images/assets/appNameB.png') }}" alt="appName">
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
                            <strong>
                                <a class="nav-link " href="{{ route('home') }}">
                                    Inicio
                                </a>
                            </strong>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <strong>
                                    Categor??as
                                </strong>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('global.partners') }}">Nuestros
                                    Partners</a>
                                <br>
                                <a class="dropdown-item" href="{{ route('global.technologies') }}">Tecnolog??as</a>
                                <a class="dropdown-item" href="{{ route('global.movile-apps') }}">Aplicaciones
                                    M??viles</a>
                                <a class="dropdown-item" href="{{ route('global.web-services') }}">Web Services</a>
                                <br>
                                <a class="dropdown-item" href="{{ route('global.industry') }}">Industria</a>
                                <a class="dropdown-item" href="{{ route('global.restaurants') }}">Restaurantes y
                                    Comida R??pida</a>
                                <a class="dropdown-item" href="{{ route('global.business') }}">Negocios</a>
                                <a class="dropdown-item" href="{{ route('global.e-commerce') }}">E-Commerce</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('global.publicProducts') }}">
                                <strong>
                                    Productos y Servicios
                                </strong>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('global.aboutUs') }}">
                                <strong>
                                    Conocenos
                                </strong>
                            </a>
                        </li>
                        @if (Auth::check() && Auth::user()->isClient())
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('global.JoinUs') }}">
                                    <strong>
                                        ??nete a Nosotros
                                    </strong>
                                </a>
                            </li>
                        @endif
                        @if (Auth::check() && Auth::user()->isPartner())
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('partner.home') }}">
                                    <strong>
                                        Partner Panel
                                    </strong>
                                </a>
                            </li>
                        @elseif(Auth::check() && Auth::user()->isAdmin())
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.home') }}">
                                    <strong>
                                        Admin Panel
                                    </strong>
                                </a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('global.getHelp') }}">
                                <strong>
                                    Ayuda
                                </strong>
                            </a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">
                                        <strong>
                                            {{ __('Login') }}
                                        </strong>
                                    </a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">
                                        <strong>
                                            {{ __('Register') }}
                                        </strong>
                                    </a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <strong>
                                        {{ Auth::user()->name }}
                                    </strong>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                    @if (Auth::check())
                                        <a class="dropdown-item"
                                            href="{{ route('public.accounts.profile', [Auth::user()]) }}">Mi Perfil</a>
                                        @if (Auth::user()->isClient())
                                            <br>
                                            <a class="dropdown-item"
                                                href="{{ route('account.info', ['User' => Auth::user()]) }}">Mi
                                                Informacion</a>
                                            <a class="dropdown-item"
                                                href="{{ route('account.suscriptions', ['User' => Auth::user()]) }}">Mis
                                                Suscripciones</a>
                                            <a class="dropdown-item"
                                                href="{{ route('account.likes', ['User' => Auth::user()]) }}">Mis Me
                                                Gusta</a>
                                            <a class="dropdown-item" href="{{ route('global.JoinUs') }}">Vender en la
                                                Tienda</a>
                                        @endif

                                        @if (Auth::user()->isPartner() || Auth::user()->isAdmin())
                                            <br>
                                            <a class="dropdown-item"
                                                href="{{ route('account.info', ['User' => Auth::user()]) }}">Mi
                                                Informacion</a>
                                            <a class="dropdown-item"
                                                href="{{ route('account.suscriptions', ['User' => Auth::user()]) }}">Mis
                                                Suscripciones</a>
                                            <a class="dropdown-item"
                                                href="{{ route('account.likes', ['User' => Auth::user()]) }}">Mis Me
                                                Gusta</a>
                                            <a class="dropdown-item"
                                                href="{{ route('account.products', ['User' => Auth::user()]) }}">Mis
                                                Productos & Servicios</a>
                                        @endif
                                    @endif
                                    <br>
                                    <a class="dropdown-item" href="{{ route('global.getHelp') }}">Preguntas y
                                        Sugerencias</a>
                                    {{-- <a class="dropdown-item" href="">Seguridad</a>
                                    <a class="dropdown-item" href="">Privacidad</a> --}}
                                    <a class="dropdown-item" href="{{ route('global.aboutUs') }}">Sobre Nosotros</a>
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
    @livewireScripts
    @yield('scripts')
    <br>
</body>
<footer class="mt-auto bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
            <!-- Facebook -->
            <a target="_blank" class="btn btn-outline-light btn-floating m-1"
                href="https://www.facebook.com/ProverbiusSoftware" role="button"><i class="fab fa-facebook-f"></i></a>

            <!-- YouTube -->
            <a target="_blank" class="btn btn-outline-light btn-floating m-1"
                href="https://www.youtube.com/channel/UCyHUW3repfp5RBWrDSXJ4Lw/featured" role="button"><i
                    class="fab fa-youtube"></i></a>

            <!-- WhatsApp -->
            <a target="_blank" class="btn btn-outline-light btn-floating m-1"
                href="https://chat.whatsapp.com/G6MDE4LHIOj413q2AD4iUj" role="button"><i
                    class="fab fa-whatsapp"></i></a>

            <!-- Telegram -->
            <a target="_blank" class="btn btn-outline-light btn-floating m-1"
                href="https://t.me/joinchat/MPDEYAUpXTw3MDlh" role="button"><i class="fab fa-telegram"></i></a>
        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        ?? 2020 Copyright:
        <a href="#" class="text-white">Todos los Derechos Reservados</a>
        {{-- <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a> --}}
    </div>
    <!-- Copyright -->
</footer>

</html>
