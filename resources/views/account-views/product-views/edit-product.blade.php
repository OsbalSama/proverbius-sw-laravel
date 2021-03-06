@extends('layouts.app')
@section('content')
    <div class="container">
        <!-- Product Card -->
        <p>
        <div class="">
            <div class="card-body">
                <div class="row">
                    <div class="col-auto">
                        <div class="row">
                            <div class="col-auto m-0 p-0">
                                <img style="width: 7rem" class=""
                                    src="{{ asset('images/assets/noProductLogo.png') }}" alt="Card image cap">
                                <a href="{{ route('public.product.view', ['Product' => $Product]) }} "
                                    class="stretched-link"></a>
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
                            <div class="d-flex justify-content-end">
                                <!-- Botones a la Derecha -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </p>
        <!-- end Product Card -->
        <!-- Content -->
        <div class="row">
            <div class="col-md">
                <form method="POST" class="trySubmit"
                    action="{{ route('account.product.update', ['Product' => $Product]) }} ">
                    @csrf
                    @method('PUT')
                    <p>
                    <div class="d-flex justify-content-between">
                        <h3>Editar Producto</h3>
                        <button class="btn btn-success mr-2" type="submit">Guardar</button>
                    </div>
                    </p>
                    <div class="card shadow-sm p-3 mb-5 bg-white rounded">
                        <h5>Datos Generales</h5>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">
                                    *Nombre o Titulo
                                </label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                                    placeholder="Register Cash Free" value="{{ $Product->title }}" required>
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">
                                    *Descripcion
                                </label>
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="3"
                                    placeholder="Software Punto de Venta"
                                    required>{{ $Product->description }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm">
                                        <label for="amount">
                                            *Precio o Coste
                                        </label>
                                        <input min="1" type="number"
                                            class="form-control @error('amount') is-invalid @enderror" name="amount"
                                            placeholder="Ignora si es Gratuito" value="{{ $Product->amount }}">
                                        @error('amount')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm">
                                        <label for="stock">
                                            Inventario
                                        </label>
                                        <input min="1" type="number"
                                            class="form-control @error('stock') is-invalid @enderror" name="stock"
                                            placeholder="Ignora si no tiene Inventario" value="{{ $Product->stock }}">
                                        @error('stock')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm">
                                        <label for="type">
                                            *Tipo de Soporte
                                        </label>
                                        <select class="form-control" class="custom-select" name="type" required>
                                            <option {{ $Product->type == 'product' ? 'selected' : '' }} value="product">
                                                Producto
                                            </option>
                                            <option {{ $Product->type == 'service' ? 'selected' : '' }} value="service">
                                                Servicio
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-sm">
                                        <label for="version">
                                            *Version de Producto
                                        </label>
                                        <input min="1" type="number"
                                            class="form-control @error('version') is-invalid @enderror" name="version"
                                            placeholder="1.50" value="{{ $Product->version }}" required>
                                        @error('version')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="downloadLink">
                                    Link de Descarga
                                </label>
                                <input type="url" class="form-control @error('downloadLink') is-invalid @enderror"
                                    name="downloadLink" placeholder="Ignora si no tiene Link"
                                    value="{{ $Product->download_link }}">
                                @error('downloadLink')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            @if (Auth::user()->isAdmin())
                                <h5>
                                    Admin Controlls
                                </h5>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm">
                                                <label for="">
                                                    Visible
                                                </label>
                                            </div>
                                            <div class="col-sm">
                                                <label for="">
                                                    Bloqueado
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif


                        </div>
                    </div>
                </form>

                <div class="card shadow-sm p-3 mb-5 bg-white rounded">
                    <form action="{{ route('product.playlist.store', ['Product' => $Product]) }} "
                        class="createPlaylist">
                        @csrf
                        <div class="d-flex justify-content-between d-flex align-items-center">
                            <h5>
                                Listas de Reproduccion
                            </h5>
                        </div>
                        <div class="form-group">
                            {{-- <label for="title">Nombre de la Playlist</label> --}}
                            <div class="d-flex justify-content-between">
                                <div class="w-100 mr-2">
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        name="title" placeholder="Nombre de la Playlist" value="{{ old('title') }}"
                                        required>
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button class="btn btn-success " type="submit">+</button>
                            </div>
                        </div>
                    </form>

                    <div class="card-body w-100">                        
                        @if ($Product->getPlaylists->isEmpty())
                            <b>*Sin Listas de Reproducci??n</b>
                        @else
                            @foreach ($Product->getPlaylists as $Playlist)
                                @include('components.playlist-card')
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>


            <div class="col-sm-3 m-0 p-0">
                <p>
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h6>
                                Requisitos Minimos
                            </h6>
                            <a class="btn btn-sm btn-success mr-2"
                                href="{{ route('account.term-req.edit', ['Product' => $Product]) }}">+</a>
                        </div>
                    </div>
                    @if ($Product->getAllMinReq()->isEmpty())
                        <tr>
                            <li class="list-group-item">Sin Requisitos</li>
                        </tr>
                    @else
                        @foreach ($Product->getAllMinReq() as $item)
                            <li class="list-group-item">{{ $item->content }}</li>
                        @endforeach
                    @endif
                </div>

                </p>
                <p>
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h6>
                                Requisitos Recomendados
                            </h6>
                            <a class="btn btn-sm btn-success mr-2"
                                href="{{ route('account.term-req.edit', ['Product' => $Product]) }}">+</a>
                        </div>
                    </div>
                    @if ($Product->getAllMedReq()->isEmpty())
                        <tr>
                            <li class="list-group-item">Sin Requisitos</li>
                        </tr>
                    @else
                        @foreach ($Product->getAllMedReq() as $item)
                            <li class="list-group-item">{{ $item->content }}</li>
                        @endforeach
                    @endif
                </div>
                </p>
                <p>
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h6>
                                Terminos del Servicio
                            </h6>
                            <a class="btn btn-sm btn-success mr-2"
                                href="{{ route('account.term-req.edit', ['Product' => $Product]) }}">+</a>
                        </div>
                    </div>
                    @if ($Product->getAllTerms()->isEmpty())
                        <tr>
                            <li class="list-group-item">Sin Terminos</li>
                        </tr>
                    @else
                        @foreach ($Product->getAllTerms() as $item)
                            <li class="list-group-item">{{ $item->content }}</li>
                        @endforeach
                    @endif
                </div>
                </p>
                <p>
                <div class="card ">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h6>Archivos Adjuntos</h6>
                            <a class="btn btn-sm btn-success mr-2"
                                href="{{ route('account.product.otherfiles.edit', ['Product' => $Product]) }}">+</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if ($Product->getOtherFiles->isEmpty())
                            <tr>
                                <li class="list-group-item">Sin Archivos Adjuntos</li>
                            </tr>
                        @else
                            @foreach ($Product->getOtherFiles->all() as $item)
                                @include('components.other-file')
                            @endforeach
                        @endif

                    </div>
                </div>
                </p>
            </div>
        </div>
        <!-- end Content -->
    </div>
@endsection
@section('scripts')
    <script>
        $('.trySubmit').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Actualizar Producto?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Guardar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });


        $('.createPlaylist').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Crear Playlist?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Guardar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });

        $('.droPlaylist').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Eliminar Playlist?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });
    </script>
@endsection
