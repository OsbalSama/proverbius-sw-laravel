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
        <div class="card shadow p-3 mb-5 bg-white rounded">
            <div class="card-body">
                <form class="trySubmit" method="POST"
                    action="{{ route('account.otherfiles.store', ['Product' => $Product]) }}">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg">
                                <h3>Archivos Adjuntos</h3>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-success mr-2" type="submit">Guardar</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-auto mr-0 pr-0">
                                <select class="form-control" class="custom-select" name="doc_type" required>
                                    <option value="">Select. Tipo de Archivo</option>
                                    <option {{ old('doc_type') == 'Download Link' ? 'selected' : '' }} value="Download Link">
                                        Download
                                        Link
                                    </option>
                                    <option {{ old('doc_type') == 'PDF File' ? 'selected' : '' }} value="PDF File">PDF Doc
                                    </option>
                                    <option {{ old('doc_type') == 'Word File' ? 'selected' : '' }} value="Word File">Word File
                                    </option>
                                    <option {{ old('doc_type') == 'Excel File' ? 'selected' : '' }} value="Excel File">Excel File
                                    </option>
                                    <option {{ old('doc_type') == 'Power Point File' ? 'selected' : '' }} value="Power Point File">Power Point File
                                    </option>
                                    <option {{ old('doc_type') == 'Doc File' ? 'selected' : '' }} value="Doc File">Document
                                    </option>
                                    <option {{ old('doc_type') == 'Other File' ? 'selected' : '' }} value="Other File"> other
                                        File
                                    </option>
                                </select>
                            </div>
                            <div class="col-md">
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                                    placeholder="Titulo de Componente" required>
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg">
                                <br>
                                <input type="url" class="form-control @error('otherfile_link') is-invalid @enderror"
                                    name="otherfile_link" placeholder="Link de Archivo Adjunto" required>
                                @error('otherfile_link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <p>
        <div class="card shadow p-3 mb-5 bg-white rounded">
            {{-- <div class="card-body"> --}}
            <div class="card-body">
                <p>
                    Archivos Adjuntos
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <colgroup>
                            <col style="width: 1%;">
                            <col>
                            <col style="width: 20%;">
                            <col style="width: 15%;">
                        </colgroup>
                        <thead class="thead-ligth">
                            <tr>
                                <th>#</th>
                                <th>Titulo</th>
                                <th>Tipo</th>
                                <th>Link</th>
                                <th>F. Registro</th>
                                <th class="d-flex justify-content-end">Controles</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($Product->getOtherFiles->isEmpty())
                                <tr>
                                    <td colspan="6" class="text-center bg-warning">
                                        No Content
                                    </td>
                                </tr>
                            @else
                                @foreach ($Product->getOtherFiles->all() as $item)
                                    <tr>
                                        <td>{{ $item->id }} </td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->doc_type }}</td>
                                        <td>
                                            <a href="{{ $item->otherfile_link }}" target="_blank"> Ver Link</a>
                                        </td>
                                        {{-- <td>{{ $item->otherfile_link }}</td> --}}
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                            <div class="d-flex justify-content-end">
                                                <form class="dropReg" method="POST"
                                                    action="{{ route('account.otherfiles.destroy', ['Registro' => $item]) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-outline-danger btn-sm mr-2">Eliminar</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- </div> --}}
        </div>
        </p>
    </div>
@endsection

@section('scripts')
    <script>
        $('.trySubmit').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Agregar Registro?',
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
