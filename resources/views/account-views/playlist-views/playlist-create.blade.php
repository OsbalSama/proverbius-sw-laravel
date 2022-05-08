@extends('layouts.app')
@section('content')
    <div class="container">
        <!-- Product Card -->
        <p>
        <div>
            <div class="card-body">
                <div class="row">
                    <div class="col-auto">
                        <div class="row">
                            <div class="col-auto m-0 p-0">
                                <img style="width: 7rem" class=""
                                    src="{{ asset('images/assets/noProductLogo.png') }}" alt="Card image cap">
                                <a href="{{ route('account.product.edit', ['product' => $Product]) }} "
                                    class="stretched-link"></a>
                            </div>
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
    </div>
    <!-- Content -->
    <div class="container">
        Playlist Belongs To: {{ $newPlaylist->product->title }}
        <br>
        Product = {{$Product->title}}
        <div class="card shadow p-3 mb-5 bg-white rounded">
            <form action="{{ route('product.playlist.store', ['Product' => $Product]) }} "
                class="trySubmit">
                @csrf
                <div class="d-flex justify-content-between d-flex align-items-center">
                    <h3>Crear Lista de Reproduccion</h3>
                    <button class="btn btn-success mr-2" type="submit">Guardar</button>
                </div>
                <div class="form-group">
                    <label for="title">Nombre de la Playlist</label>

                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                        placeholder="Playlist Name" value="{{ old('title') }}" required>
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="" class="@error('getPlaylistsItems') is-invalid @enderror">Items agregados:
                        {{ $newPlaylist->getPlaylistsItems->count() }} </label>
                    @error('getPlaylistsItems')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </form>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg bg-light">
                            <h4>Playlist Items</h4>
                            @if ($newPlaylist->getPlaylistsItems->isEmpty())
                                <div class="text-center">
                                    Sin Elementos en la Lista
                                </div>
                            @else
                                Load Playlist Items
                            @endif
                        </div>
                        <div class="col-sm-5">
                            <form action="" class="addPlaylistItem">
                                @csrf
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Add Playlist Item</h4>
                                        <div class="form-group">
                                            <label for="title">
                                                Nombre Item
                                            </label>
                                            <input type="text" class="form-control" name="title"
                                                placeholder="Nombre del Item" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="resource_link">
                                                Tipo de Item (Combo)
                                            </label>
                                            <select class="form-control" class="custom-select" name="resource_link"
                                                required>
                                                <option value="">Select. Tipo de Archivo</option>
                                                <option {{ old('resource_link') == 'Link Video' ? 'selected' : '' }}
                                                    value="Link Video">
                                                    Link de Video
                                                </option>
                                                <option {{ old('resource_link') == 'PDF File' ? 'selected' : '' }}
                                                    value="PDF File">PDF Doc
                                                </option>
                                                <option {{ old('resource_link') == 'Word File' ? 'selected' : '' }}
                                                    value="Word File">Word File
                                                </option>
                                                <option {{ old('resource_link') == 'Excel File' ? 'selected' : '' }}
                                                    value="Excel File">Excel File
                                                </option>
                                                <option
                                                    {{ old('resource_link') == 'Power Point File' ? 'selected' : '' }}
                                                    value="Power Point File">Power Point File
                                                </option>
                                                <option {{ old('resource_link') == 'Doc File' ? 'selected' : '' }}
                                                    value="Doc File">Document
                                                </option>
                                                <option {{ old('resource_link') == 'Other File' ? 'selected' : '' }}
                                                    value="Other File"> other
                                                    File
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">
                                                Link de Recurso
                                            </label>
                                            <input type="url" class="form-control" name="resource_link"
                                                placeholder="Link de Recurso" required>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button class="btn btn-success mr-2" type="submit">Agregar Item</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('.trySubmit').submit(function(e) {
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

        $('.addPlaylistItem').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Agregar Item a la Playlist?',
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

        $('.dropReg').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Eliminar Registro?',
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
