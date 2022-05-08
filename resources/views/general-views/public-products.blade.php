@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Productos y Servicios</h1>
        @if ($products->isEmpty())
            <div class="row">
                <div class="col-lg">
                    <div class="d-flex justify-content-center">
                        <div style="width: 20rem" class="card shadow p-3 mb-5 bg-white rounded">
                            <div class="card-body">
                                <div>
                                    <img class="w-100" src="{{ asset('images/assets/puppies/dog02.png') }}"
                                        alt="Puppy">
                                </div>
                                <h6>
                                    Ups… todavía no hay productos en el sistema…
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="row">
                <div class="d-flex justify-content-center">
                    @foreach ($products as $Product)
                        <div class="col-auto m-2 ">
                            @include('components.product-card-b')
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        {{-- @empty($products)
        @else
        @endempty --}}
    </div>
@endsection
