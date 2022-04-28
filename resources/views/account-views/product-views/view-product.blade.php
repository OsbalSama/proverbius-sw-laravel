@extends('layouts.product-layout')
@section('product-content')
    @if ($Product->download_link != null)
        <p>
        <div class="card shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">
                <H4>
                    Link de Descarga v{{ $Product->version }}
                </H4>
                <p class="text-center">
                    {{ $Product->description }}
                </p>
            </div>
            <div class="card-footer">
                <a class="btn btn-success w-100" href="{{ $Product->download_link }}" target="_blank">
                    DESCARGA AQUI
                </a>
            </div>
        </div>
        </p>
    @endif
    <p>
    <div class="card shadow p-3 mb-5 bg-white rounded">
        <div class="card-body">
            <h4>
                Listas de Reproduccion
            </h4>

            <p>
            <div class="card">
                <div class="card-body">
                    <h5>
                        Playlist 1
                    </h5>
                    <div class="row">
                        <div class="card m-1 p-0" style="width: 10rem;">
                            <img class="w-100" src="{{ asset('images/assets/video.png') }}" alt="video.png">
                            <div class="card-body">
                                <b>Card title</b>
                            </div>
                        </div>
                        <div class="card m-1 p-0" style="width: 10rem;">
                            <img class="w-100" src="{{ asset('images/assets/video.png') }}" alt="video.png">
                            <div class="card-body">
                                <b>Card title</b>
                            </div>
                        </div>
                        <div class="card m-1 p-0" style="width: 10rem;">
                            <img class="w-100" src="{{ asset('images/assets/video.png') }}" alt="video.png">
                            <div class="card-body">
                                <b>Card title</b>
                            </div>
                        </div>
                        <div class="card m-1 p-0" style="width: 10rem;">
                            <img class="w-100" src="{{ asset('images/assets/video.png') }}" alt="video.png">
                            <div class="card-body">
                                <b>Card title</b>
                            </div>
                        </div>
                        <div class="card m-1 p-0" style="width: 10rem;">
                            <img class="w-100" src="{{ asset('images/assets/video.png') }}" alt="video.png">
                            <div class="card-body">
                                <b>Card title</b>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            </p>

            <p>
            <div class="card">
                <div class="card-body">
                    <h5>
                        Playlist 2
                    </h5>
                    <div class="row">
                        <div class="card m-1 p-0" style="width: 10rem;">
                            <img class="w-100" src="{{ asset('images/assets/video.png') }}" alt="video.png">
                            <div class="card-body">
                                <b>Card title</b>
                            </div>
                        </div>
                        <div class="card m-1 p-0" style="width: 10rem;">
                            <img class="w-100" src="{{ asset('images/assets/video.png') }}" alt="video.png">
                            <div class="card-body">
                                <b>Card title</b>
                            </div>
                        </div>
                        <div class="card m-1 p-0" style="width: 10rem;">
                            <img class="w-100" src="{{ asset('images/assets/video.png') }}" alt="video.png">
                            <div class="card-body">
                                <b>Card title</b>
                            </div>
                        </div>
                        <div class="card m-1 p-0" style="width: 10rem;">
                            <img class="w-100" src="{{ asset('images/assets/video.png') }}" alt="video.png">
                            <div class="card-body">
                                <b>Card title</b>
                            </div>
                        </div>
                        <div class="card m-1 p-0" style="width: 10rem;">
                            <img class="w-100" src="{{ asset('images/assets/video.png') }}" alt="video.png">
                            <div class="card-body">
                                <b>Card title</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </p>            
        </div>
    </div>
    </p>
    <p>
    <div class="card shadow p-3 mb-5 bg-white rounded">
        <div class="card-body">
            <h4>
                Archivos Adjuntos
            </h4>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">
                    Archivo Adjunto 1
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    Archivo Adjunto 2
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    Archivo Adjunto 3
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    Archivo Adjunto 4
                </a>
            </div>
            {{-- <ul class="p-0 m-0">                
                <li class="list-group-item">item 2</li>
                <li class="list-group-item">item 3</li>
                <li class="list-group-item">item 4</li>
                <li class="list-group-item">item 5</li>
            </ul> --}}
        </div>
    </div>
    </p>
@section('product-content-b')
    <div class="card-body d-flex justify-content-center">
        <div class="row w-100">
            <div class="col-auto w-100 p-0 m-0">
                <p>
                <ul class="p-0 m-0">
                    <li class="list-group-item list-group-item-warning">Requisitos Minimos</li>
                    <li class="list-group-item">item 2</li>
                    <li class="list-group-item">item 3</li>
                    <li class="list-group-item">item 4</li>
                    <li class="list-group-item">item 5</li>
                </ul>
                </p>

                <p>
                <ul class="p-0 m-0">
                    <li class="list-group-item list-group-item-warning">Requisitos Recomendados</li>
                    <li class="list-group-item">item 2</li>
                    <li class="list-group-item">item 3</li>
                    <li class="list-group-item">item 4</li>
                    <li class="list-group-item">item 5</li>
                </ul>
                </p>

                <p>
                <ul class="p-0 m-0">
                    <li class="list-group-item list-group-item-warning">Terminos del Servicio</li>
                    <li class="list-group-item">item 2</li>
                    <li class="list-group-item">item 3</li>
                    <li class="list-group-item">item 4</li>
                    <li class="list-group-item">item 5</li>
                </ul>
                </p>
            </div>
        </div>
    </div>
@endsection
@endsection

{{-- @extends('layouts.app')
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
            </div> --}}
{{-- <div class="col-auto">
                parte 3
            </div> --}}

{{-- </div>
    </div>
@endsection
@section('scripts')
@endsection --}}
