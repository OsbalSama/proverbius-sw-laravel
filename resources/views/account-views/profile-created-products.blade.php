@extends('layouts.profile-layout')
@section('profile-content')
    <div class="card-body">
        <h3>Products & Services</h3>
    </div>
    <div>
        @if ($User->products != null)
            <p>
                Mostrar productos
            </p>
        @else
            <div class="d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <div class="d-flex justify-content-center">
                        <img style="width: 10rem" class="card-img-top" src="{{ asset('images/assets/noProducts.png') }}"
                            alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <h5 class="card-title ">Sin Productos o Servicios</h5>
                        </div>

                        @if (Auth::check())
                            @if ($User->isLogged() || Auth::user()->isAdmin())
                                <div class="d-flex justify-content-center">
                                    {{-- <a href="{{ route('account.product.create', ['User' => '$User']) }}"
                                                class="btn btn-primary">Agregar Producto</a> --}}
                                    <a class="btn btn-primary"
                                        href="{{ route('account.product.create', ['User' => $User]) }}">Agregar
                                        Producto</a>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
