@extends('layouts.app')
@section('content')
    <br>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-row -">
                    <div class=" mr-3">
                        <img style="width: 10rem" class=""
                            src="{{ asset('images/assets/noProductLogo.png') }}" alt="Card image cap">
                    </div>
                    <div class="w-100">
                        <h1 class="card-title">{{ $Product->title }}</h1>
                        <div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="d-flex justify-content-start">
                                        @include('components.user-card')
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-flex justify-content-start">
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
                                        <a class="btn btn-secondary btn-lg mr-2" href=""><i
                                                class="fa-solid fa-thumbs-up"></i></a>
                                        <a class="btn btn-danger btn-lg mr-2" href="">Suscribirse</a>
                                        @if (Auth::check())
                                            @if (Auth::user()->isAdmin())
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
            </div>
        </div>
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
@section('scripts')
@endsection
