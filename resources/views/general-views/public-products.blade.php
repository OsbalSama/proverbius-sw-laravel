@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Productos y Servicios</h1>

        @if ($products->isEmpty())
            <p>
                no Products in System
            </p>
        @else
            <div class="row ">
                @foreach ($products as $product)
                    <div class="col-auto m-2 ">
                        @include('components.product-card-b')
                    </div>
                @endforeach
            </div>
        @endif
        {{-- @empty($products)
        @else
        @endempty --}}
    </div>
@endsection
