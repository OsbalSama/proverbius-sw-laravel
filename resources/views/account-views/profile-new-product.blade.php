@extends('layouts.profile-layout')
@section('profile-content')
    <form class="trySubmit" action="{{ route('account.product.store') }}">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h3>Nuevo Producto o Servicio</h3>
                <button class="btn btn-success mr-2" type="submit">Guardar</button>
            </div>
        </div>
        <div class="card">
            <div class="card-header">Informacion General</div>
            <div class="card-body">
                <div class="form-group">
                </div>
                <div class="form-group">
                    <label for="title">
                        <h5>*Nombre o Titulo</h5>
                    </label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                        placeholder="Register Cash Free" value="{{ old('title') }}" required>
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">
                        <h5>*Descripcion</h5>
                    </label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="3"
                        placeholder="Software Punto de Venta" required>{{ old('description') }}</textarea>
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
                                <h5>*Precio o Coste</h5>
                            </label>
                            <input min="1" type="number" class="form-control @error('amount') is-invalid @enderror"
                                name="amount" placeholder="Ignora si es Gratuito" value="{{ old('amount') }}">
                            @error('amount')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-sm">
                            <label for="stock">
                                <h5>*Inventario</h5>
                            </label>
                            <input min="1" type="number" class="form-control @error('stock') is-invalid @enderror"
                                name="stock" placeholder="Ignora si no tiene Inventario" value="{{ old('stock') }}">
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
                                <h5>*Tipo de Soporte</h5>
                            </label>
                            <select class="form-control" class="custom-select" name="type" required>
                                <option value="">Select...</option>
                                <option {{ old('type') == 'product' ? 'selected' : '' }} value="product">Producto
                                </option>
                                <option {{ old('type') == 'service' ? 'selected' : '' }} value="service">Servicio
                                </option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label for="version">
                                <h5>*Version</h5>
                            </label>
                            <input min="1" type="number" class="form-control @error('version') is-invalid @enderror"
                                name="version" placeholder="1.50" value="{{ old('version') }}" required>
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
                        <h5>Link de Descarga</h5>
                    </label>
                    <input type="url" class="form-control @error('downloadLink') is-invalid @enderror" name="downloadLink"
                        placeholder="Ignora si no tiene Link" value="{{ old('downloadLink') }}">
                    @error('downloadLink')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    Terminos del Servicio
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-success mr-2" href="#">+</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="title">
                        <h5>*Item</h5>
                    </label>
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    Requisitos Minimos
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-success mr-2" href="#">+</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="title">
                        <h5>*Item</h5>
                    </label>
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    Requisitos Recomendados
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-success mr-2" href="#">+</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="title">
                        <h5>*Item</h5>
                    </label>
                </div>
            </div>
        </div>
        <br>
        <div class="d-flex justify-content-end">
            <button class="btn btn-success mr-2" type="submit">Guardar</button>
        </div>
    </form>
@endsection
@section('scripts')
    <script>
        $('.trySubmit').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Crear Nuevo Producto?',                
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
    </script>
@endsection
