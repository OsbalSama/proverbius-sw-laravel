@extends('layouts.app')
@section('content')
    <div class="container">

        {{-- UserCard --}}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg ">
                        <div class="d-flex flex-row">
                            <div class=" mr-3">
                                <img style="width: 8rem" class="card-img-top img-thumbnail rounded-circle"
                                    src="{{ asset('images/assets/noProfilePhoto.png') }}" alt="Card image cap">
                            </div>
                            <div class="w-100">
                                <h1 class="card-title">{{ $User->name }}</h1>
                                <div>
                                    Email: <b>{{ $User->email }}</b><br>
                                    Role: <b>{{ $User->role }}</b>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        @if ($User->isLogged() == false)
                            <div class="d-flex justify-content-end ">
                                {{-- <div class="d-flex align-items-end"> --}}
                                <a class="btn btn-secondary btn-lg mr-2" href=""><i class="fa-solid fa-thumbs-up"></i></a>
                                <a class="btn btn-danger btn-lg mr-2" href="">Seguir</a>
                                {{-- </div> --}}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            {{-- Menu de Accesos --}}
            <p>
            <div class="row justify-content-around">
                <div class="row m-0 ">
                    <div class="col-lg mr-1 p-0">
                        <a class="btn btn-outline-dark w-100 stretched-link"
                            href="{{ route('public.accounts.profile', ['User' => $User]) }}">Publicaciones</a>
                    </div>
                    <div class="col-lg mr-1 p-0">
                        <a class="btn btn-outline-dark  w-100 stretched-link"
                            href="{{ route('account.info', ['User' => $User]) }}">Informacion</a>
                    </div>
                    <div class="col-lg mr-1 p-0">
                        <a class="btn btn-outline-dark w-100 stretched-link"
                            href="{{ route('account.likes', ['User' => $User]) }}">Me
                            Gusta</a>
                    </div>
                    <div class="col-lg mr-1 p-0">
                        <a class="btn btn-outline-dark w-100 stretched-link"
                            href="{{ route('account.suscriptions', ['User' => $User]) }}">Mis Suscripciones</a>
                    </div>
                    @if ($User->isPartner() || $User->isAdmin())
                        <div class="col-lg mr-1 p-0">
                            <a class="btn btn-outline-dark w-100 stretched-link"
                                href="{{ route('account.products', ['User' => $User]) }}">Productos y Servicios</a>
                        </div>
                    @endif
                </div>

            </div>
            </p>

            {{-- Contenido --}}
            <div class="row">
                {{-- Menu Lateral --}}
                @if ($User->isLogged())
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-header">Publicaciones</div>
                            <div class="card-body">
                                <div class="">
                                    <a class=""
                                        href="{{ route('public.accounts.profile', ['User' => $User]) }}">Ver
                                        Publicaciones</a>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header">Informacion</div>
                            <div class="card-body">
                                @if (!$User->hasFullInfo())
                                    <div>
                                        <p>
                                            *Faltan datos importantes
                                        </p>
                                    </div>
                                @endif
                                <div class="">
                                    <a class="" href="{{ route('account.info', ['User' => $User]) }}">Ver
                                        Información</a>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header">Me Gusta</div>
                            <div class="card-body">
                                <div>
                                    <p>
                                        upload products, services, profiles that this user likes
                                    </p>
                                </div>
                                <div class="">
                                    <a class="" href="{{ route('account.likes', ['User' => $User]) }}">Ver
                                        mas</a>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header">Mis Suscripciones</div>
                            <div class="card-body">
                                <div>
                                    load Suscriptions
                                </div>
                                <div class="">
                                    <a class=""
                                        href="{{ route('account.suscriptions', ['User' => $User]) }}">Ver
                                        mas</a>
                                </div>
                            </div>
                        </div>
                        @if ($User->isPartner() || $User->isAdmin())
                            <br>
                            <div class="card">
                                <div class="card-header">Productos y Servicios</div>
                                <div class="card-body">
                                    @if ($User->products == null)
                                        <p>
                                            Este usuario no tiene Productos o Servicios
                                        </p>
                                    @else
                                        <p>
                                            Load 4 Products & Services
                                        </p>
                                    @endif
                                    <div class="">
                                        <a class=""
                                            href="{{ route('account.products', ['User' => $User]) }}">Ver
                                            mas</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                @endif                
                {{-- Contenido Ventana --}}
                <div class="col-lg bg-light">
                    @yield('profile-content')
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection
