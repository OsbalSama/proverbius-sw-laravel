@extends('layouts.product-layout')
@section('product-content')
    <form method="POST" class="trySubmit" action="{{ route('account.product.update', ['Product' => $Product]) }} ">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h3>Editar Producto</h3>
                <button class="btn btn-success mr-2" type="submit">Guardar</button>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">
                        <h5>*Nombre o Titulo</h5>
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
                        <h5>*Descripcion</h5>
                    </label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="3"
                        placeholder="Software Punto de Venta" required>{{ $Product->description }}</textarea>
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
                                name="amount" placeholder="Ignora si es Gratuito" value="{{ $Product->amount }}">
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
                                name="stock" placeholder="Ignora si no tiene Inventario" value="{{ $Product->stock }}">
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
                                <option {{ $Product->type == 'product' ? 'selected' : '' }} value="product">Producto
                                </option>
                                <option {{ $Product->type == 'service' ? 'selected' : '' }} value="service">Servicio
                                </option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label for="version">
                                <h5>*Version</h5>
                            </label>
                            <input min="1" type="number" class="form-control @error('version') is-invalid @enderror"
                                name="version" placeholder="1.50" value="{{ $Product->version }}" required>
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
                        placeholder="Ignora si no tiene Link" value="{{ $Product->download_link }}">
                    @error('downloadLink')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    @section('product-content-b')
        <p>
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

        </p>
        <p>
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

        </p>
        <p>
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
        </p>
    @endsection
    <br>
    {{-- <div class="d-flex justify-content-end">
        <button class="btn btn-success mr-2" type="submit">Guardar</button>
    </div> --}}
</form>
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
</script>
@endsection
