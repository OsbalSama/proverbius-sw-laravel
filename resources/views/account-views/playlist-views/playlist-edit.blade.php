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
        <div class="card shadow p-3 mb-5 bg-white rounded">
            <form method="POST" action="{{ route('product.playlist.update', ['Playlist' => $Playlist]) }} "
                class="updateReg">
                @csrf
                @method('PUT')
                <div class="d-flex justify-content-between d-flex align-items-center">
                    <h3>Actualizar Lista de Reproduccion</h3>
                    <button class="btn btn-success mr-2" type="submit">Actualizar</button>
                </div>
                <div class="form-group">
                    <label for="title">Nombre de la Playlist</label>

                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                        placeholder="Playlist Name" value="{{ $Playlist->title }}" required>
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="" class="@error('getPlaylistsItems') is-invalid @enderror">Items agregados:
                        {{ $Playlist->getPlaylistsItems->count() }} </label>
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
                            @if ($Playlist->getPlaylistsItems->isEmpty())
                                <div class="text-center">
                                    Sin Elementos en la Lista
                                </div>
                            @else
                                <div class="row d-flex justify-content-start">
                                    @foreach ($Playlist->getPlaylistsItems->all() as $item)
                                        @include('components.p-item-e')
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div class="col-sm-5">
                            <form action="{{ route('playlist.resource.store', ['Playlist' => $Playlist]) }} "
                                class="addPlaylistItem">
                                @csrf
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Add Playlist Item</h4>
                                        <div class="form-group">
                                            <label for="resource_title">
                                                Nombre Item
                                            </label>
                                            <input type="text"
                                                class="form-control @error('resource_title') is-invalid @enderror"
                                                name="resource_title" placeholder="Nombre del Item" required>
                                            @error('resource_title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="resource_type">
                                                Tipo de Item (Combo)
                                            </label>
                                            <select class="form-control" class="custom-select" name="resource_type"
                                                required>
                                                <option value="">Select. Tipo de Archivo</option>
                                                <option {{ old('resource_type') == 'Link Video' ? 'selected' : '' }}
                                                    value="Link Video">
                                                    Link de Video
                                                </option>
                                                <option {{ old('resource_type') == 'PDF File' ? 'selected' : '' }}
                                                    value="PDF File">PDF Doc
                                                </option>
                                                <option {{ old('resource_type') == 'Word File' ? 'selected' : '' }}
                                                    value="Word File">Word File
                                                </option>
                                                <option {{ old('resource_type') == 'Excel File' ? 'selected' : '' }}
                                                    value="Excel File">Excel File
                                                </option>
                                                <option
                                                    {{ old('resource_type') == 'Power Point File' ? 'selected' : '' }}
                                                    value="Power Point File">Power Point File
                                                </option>
                                                <option {{ old('resource_type') == 'Doc File' ? 'selected' : '' }}
                                                    value="Doc File">Document
                                                </option>
                                                <option {{ old('resource_type') == 'Other File' ? 'selected' : '' }}
                                                    value="Other File"> other
                                                    File
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="resource_link">
                                                Link de Recurso
                                            </label>
                                            <input type="url" class="form-control" name="resource_link"
                                                placeholder="Link de Recurso" required>
                                            @error('resource_link')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
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
        $('.updateReg').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Actualizar Playlist?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Actualizar',
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

        $('.dropResource').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Eliminar Recurso??',
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
