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
                        <h1 class="card-title">{{ $product->title }}</h1>
                        <div>
                            <h6>
                                {{ $product->description }}
                            </h6>
                            <div class="row">
                                <div class="col-md">
                                    <div class="d-flex justify-content-start">
                                        @include('components.user-card')
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-flex justify-content-start">
                                        <p>
                                            @if ($product->amount != null)
                                                <h4>
                                                    Precio: <b>${{ $product->amount }}</b>
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
                                                <a class="btn btn-primary btn-lg  mr-2" href="{{ route('account.product.edit', ['product' => $product]) }}">Editar</a>
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
            <div class="col-md">
                <p>
                <div class="card">
                    <div class="card-header">
                        Galeria de Proyecto
                    </div>
                    <div class="card-body">
                        Contenido
                    </div>
                    @if ($product->download_link != null)
                        <div class="card-footer">
                            <div class="d-flex justify-content-end ">
                                <a class="btn btn-primary" href="{{$product->download_link}}" target="_blank">DESCARGAR v{{$product->version}}</a>
                            </div>
                        </div>
                    @endif
                </div>
                </p>
                <p>
                <div class="card">
                    <div class="card-header">
                        Listas de Reproduccion
                    </div>
                    <div class="card-body">
                        Contenido
                    </div>
                </div>
                </p>
                <p>
                <div class="card">
                    <div class="card-header">
                        Archivos Adjuntos
                    </div>
                    <div class="card-body">
                        Contenido
                    </div>
                </div>
                </p>
            </div>
            <div class="col-sm-3">
                <p>
                <div class="card">
                    <div class="card-header">
                        Requisitos Minimos
                    </div>
                    <div class="card-body">
                        Contenido
                    </div>
                </div>
                </p>
                <p>
                <div class="card">
                    <div class="card-header">
                        Requisitos Recomendados
                    </div>
                    <div class="card-body">
                        Contenido
                    </div>
                </div>
                </p>
                <p>
                <div class="card">
                    <div class="card-header">
                        Terminos del Servicios
                    </div>
                    <div class="card-body">
                        Contenido
                    </div>
                </div>
                </p>
            </div>
            {{-- <div class="col-auto">
                parte 3
            </div> --}}

        </div>
    </div>
@endsection
@section('scripts')
@endsection
