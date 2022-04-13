@extends('layouts.app')
@section('content')
    <br>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-row -">
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

                        <div class="d-flex justify-content-end">
                            <a class="btn btn-secondary btn-lg mr-2" href=""><i class="fa-solid fa-thumbs-up"></i></a>
                            <a class="btn btn-danger btn-lg mr-2" href="">Seguir</a>
                            @if (Auth::check())
                                @if ($User->isLogged() || Auth::user()->isAdmin())
                                    <a class="btn btn-primary btn-lg" href="">Editar Perfil</a>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class=" row justify-content-center">
            <div class="row">
                <div class="col-sm">
                    <div class="card">
                        <div class="card-header">Informacion</div>
                        <div class="card-body">
                            <div>
                                <p>
                                    load Account Data
                                </p>
                            </div>
                            <div class="">
                                <a class="" href="{{ route('account.info', ['User' => $User]) }}">Ver
                                    mas</a>
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
                            <div class="card-header">Mis Productos y Servicios</div>
                            <div class="card-body">
                                @if ($User->products != null)
                                    <div>
                                        Load Products & Services
                                    </div>
                                @else
                                    <p>
                                        No tienes Productos o Servicios
                                    </p>
                                    <div class="">
                                        <a class=""
                                            href="{{ route('account.products', ['User' => $User]) }}">Ver
                                            mas</a>
                                    </div>
                                @endif

                            </div>
                        </div>
                    @endif
                    {{-- @if ($User->isAdmin())
                        <br>
                        <div class="card">
                            <div class="card-header">Admin Tools</div>
                            <div class="card-body">
                                <div>
                                    Content
                                </div>
                                <div class="">
                                    <a class="" href="">Ver mas</a>
                                </div>
                            </div>
                        </div>
                    @endif --}}
                </div>
                <div class="col-9 bg-light">
                    @yield('profile-content')
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection
