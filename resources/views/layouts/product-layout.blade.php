@extends('layouts.app')
@section('content')
    <div class="container">
        <p>            
        <div class="">
            <div class="card-body ">
                <div class="row">
                    <div class="col-auto">
                        <div class="row">
                            <div class="col-auto m-0 p-0">
                                <img style="width: 7rem" class=""
                                    src="{{ asset('images/assets/noProductLogo.png') }}" alt="Card image cap">
                            </div>
                            @if (Auth::check())
                                @if ($Product->user->isLogged() || Auth::user()->isAdmin())
                                    <div class="col-auto m-0 p-0 d-flex align-items-end">
                                        <a href="#" class=""><i class="fas fa-image fa-xl"></i></a>
                                    </div>
                                @endif
                            @endif
                        </div>

                    </div>
                    <div class="col-lg">
                        <h1 class="card-title">{{ $Product->title }}</h1>
                        <div class="d-flex justify-content-start">
                            @include('components.user-card')
                        </div>
                    </div>
                    <div class="col-auto m-0 p-0 d-flex align-items-end">
                        <div>
                            <div class="d-flex justify-content-start ">
                                <p>
                                    @if ($Product->amount != null)
                                        <h4>
                                            Precio: <b>${{ $Product->amount }}</b>
                                        </h4>
                                    @else
                                        <h4>
                                            Precio: <b>GRATIS</b>
                                        </h4>
                                    @endif
                                </p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a class="btn btn-secondary btn-lg mr-2" href=""><i class="fa-solid fa-thumbs-up"></i></a>
                                <a class="btn btn-danger btn-lg mr-2" href="">Suscribirse</a>
                                @if (Auth::check())
                                @if ($Product->user->isLogged() || Auth::user()->isAdmin())
                                        <a class="btn btn-primary btn-lg  mr-2"
                                            href="{{ route('account.product.edit', ['product' => $Product]) }}">Editar</a>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </p>



        <div class="row">
            <div class="col-md m-0 p-0">
                @yield('product-content')
            </div>

            <div class="col-sm-3 m-0 p-0">
                @yield('product-content-b')
            </div>
        </div>

    </div>
@endsection
