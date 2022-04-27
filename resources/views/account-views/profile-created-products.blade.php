@extends('layouts.profile-layout')
@section('profile-content')
    <h3>Productos & Servicios de {{ $User->name }} </h3>
    <div>
        <div class="d-flex justify-content-center">
            @if ($User->Products->isEmpty())
                <div class="card" style="width: 18rem;">
                    <div class="d-flex justify-content-center">
                        <img style="width: 10rem" class="card-img-top" src="{{ asset('images/assets/noProducts.png') }}"
                            alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <h5 class="card-title ">Sin Productos o Servicios</h5>
                        </div>
                        @if ($User->isLogged())
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-primary"
                                    href="{{ route('account.product.create', ['User' => $User]) }}">Agregar
                                    Producto</a>
                            </div>
                        @endif
                    </div>
                </div>
            @else
                <div class="card w-100">
                    <div class="card-body">
                        {{-- <h5 class="card-title ">Load Products</h5> --}}
                        @foreach ($User->Products as $Product)
                            @include('components.product-card')
                        @endforeach
                        @if ($User->isLogged())
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-primary"
                                    href="{{ route('account.product.create', ['User' => $User]) }}">Agregar
                                    Producto</a>
                            </div>
                        @endif
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
@section('scripts')
    @if ($created == true)
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Produc/Service Creado Correctamente',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif
@endsection
