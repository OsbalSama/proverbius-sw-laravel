@extends('layouts.app')
@section('content')
    <br>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-row -">
                    <div class=" mr-3">
                        <img style="width: 10rem" class="card-img-top img-thumbnail rounded-circle"
                            src="{{ asset('images/profiles/profile.jpg') }}" alt="Card image cap">
                    </div>
                    <div class="w-100">
                        <h1 class="card-title">{{ $User->name }}</h1>
                        <div>
                            Email: <b>{{ $User->email }}</b><br>
                            Role: <b>{{ $User->role }}</b>
                        </div>

                        <div class="d-flex justify-content-end">
                            <a class="btn btn-success btn-lg mr-2" href="">Seguir</a>
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
                        <div class="card-header">Personal Data</div>
                        <div class="card-body">
                            Content
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <div class="card-header">Products Liked</div>
                        <div class="card-body">
                            <div>
                                Content
                            </div>
                            <div class="">
                                <a class="" href="">Ver mas</a>
                            </div>

                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <div class="card-header">Products Subscribed</div>
                        <div class="card-body">
                            <div>
                                Content
                            </div>
                            <div class="">
                                <a class="" href="">Ver mas</a>
                            </div>

                        </div>
                    </div>
                    @if ($User->isPartner() || $User->isAdmin())
                        <br>
                        <div class="card">
                            <div class="card-header">Products & Services Created</div>
                            <div class="card-body">
                                <div>
                                    Content
                                </div>
                                <div class="">
                                    <a class="" href="">Ver mas</a>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($User->isAdmin())
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
                    @endif
                    {{-- <br> --}}
                </div>
                <div class="col-9 bg-light">
                    Publicaciones Recibidas
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection
@section('scripts')
@endsection
