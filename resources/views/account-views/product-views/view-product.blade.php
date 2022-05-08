@extends('layouts.product-layout')
@section('product-content')
    @if ($Product->download_link != null)
        <p>
        <div class="row">
            <div class="col-md">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <H4>
                            Link de Descarga v{{ $Product->version }}
                        </H4>
                        <div class="d-flex justify-content-center">
                            <div class="col-sm-10">
                                <p class="card-text text-center">
                                    {{ $Product->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-lg btn-success" href="{{ $Product->download_link }}" target="_blank">
                                DESCARGA AQUI
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </p>
    @endif
    @if (!$Product->getPlaylists->isEmpty())
        <p>
        <div class="card shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">
                <h4>
                    Listas de Reproduccion
                </h4>
                @foreach ($Product->getPlaylists as $Playlist)
                    <p>
                    <div class="card">
                        {{-- <div class="card-header"> --}}
                        {{-- </div> --}}
                        <div class="card-body">
                            {{-- <p> --}}
                            <h5>
                                {{ $Playlist->title }}
                            </h5>
                            {{-- <b>

                                    {{ $Playlist->title }}
                                </b> --}}
                            {{-- </p> --}}
                            @if ($Playlist->getPlaylistsItems->isEmpty())
                                <div class="p-4">
                                    *Lista de Reproducción Vacía
                                </div>
                            @else
                                <div class="row d-flex justify-content-start">
                                    @include('components.p-item')
                                    @include('components.p-item')
                                    @include('components.p-item')
                                    @include('components.p-item')
                                    @include('components.p-item')
                                    @include('components.p-item')
                                    @include('components.p-item')
                                    @include('components.p-item')
                                </div>
                                Load Playlist Items
                            @endif
                        </div>
                    </div>
                    </p>
                @endforeach
            </div>
        </div>
        </p>
    @endif
@section('product-content-b')
    <div class="card-body">
        <div class="card w-100">
            <li class="list-group-item list-group-item-primary text-center"><b>Requisitos Minimos</b></li>
            @if ($Product->getAllMinReq()->isEmpty())
                <li class="list-group-item">Sin Requisitos</li>
            @else
                @foreach ($Product->getAllMinReq() as $item)
                    <li class="list-group-item">{{ $item->content }}</li>
                @endforeach
            @endif
        </div>

        @if (!$Product->getAllMedReq()->isEmpty())
            <p>
            <div class="card w-100">
                <li class="list-group-item list-group-item-primary text-center"><b>Requisitos Recomendados</b></li>
                @foreach ($Product->getAllMedReq() as $item)
                    <li class="list-group-item">{{ $item->content }}</li>
                @endforeach
            </div>
            </p>
        @endif

        @if (!$Product->getAllTerms()->isEmpty())
            <p>
            <div class="card w-100">
                <li class="list-group-item list-group-item-primary text-center"><b>Terminos y Condiciones del Servicios</b>
                </li>
                @foreach ($Product->getAllTerms() as $item)
                    <li class="list-group-item">{{ $item->content }}</li>
                @endforeach
            </div>
            </p>
        @endif

        @if (!$Product->getOtherFiles->isEmpty())
            <p>
            <div class="card w-100">
                <li class="list-group-item list-group-item-primary text-center"><b>Archivos Adjuntos</b></li>
                @foreach ($Product->getOtherFiles->all() as $item)
                    @include('components.other-file')
                @endforeach
            </div>
            </p>
        @endif
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
