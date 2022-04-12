@extends('layouts.app')
@section('content')
    <br>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-row -">
                    <div class=" mr-3">
                        <img style="width: 10rem" class="card-img-top img-thumbnail rounded"
                            src="{{ asset('images/profiles/profile.jpg') }}" alt="Logo">
                    </div>
                    <div class="w-100">
                        <h1 class="card-title">{{ $product->title }}</h1>
                        <div>
                            <h4>{{ $product->description }}</h4>
                            @if ($product->amount != null)
                                Precio: <b>${{ $product->amount }}</b>
                            @else
                                Precio: <b>GRATIS</b>
                            @endif
                        </div>
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-success btn-lg mr-2" href="">Suscribirse</a>
                            @if (Auth::check())
                                @if (Auth::user()->isAdmin())
                                    <a class="btn btn-primary btn-lg  mr-2" href="">Editar</a>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
@endsection
