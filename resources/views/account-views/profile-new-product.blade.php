@extends('layouts.profile-layout')
@section('profile-content')
    <form action="">
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
                    <label for="title">
                        <h5>*Nombre o Titulo</h5>
                    </label>
                    <input type="text" class="form-control" name="title" placeholder="Register Cash Free" required>
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
                    <textarea class="form-control" name="description" rows="3" placeholder="Software Punto de Venta" required></textarea>
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
                            <input min="0" type="number" class="form-control" name="amount" placeholder="0 is Free"
                                required>
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
                            <input min="-1" type="number" class="form-control" name="stock" placeholder="-1 is Unlimited"
                                required>
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
                                <option {{ old('type') == 'product' ? 'selected' : '' }} value="product">Producto</option>
                                <option {{ old('type') == 'service' ? 'selected' : '' }} value="service">Servicio</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label for="stock">
                                <h5>*Visible</h5>
                            </label>
                            <select class="form-control" class="custom-select" name="visible" required>
                                <option value="">Select...</option>
                                <option {{ old('visible') == '1' ? 'selected' : '' }} value="1">Visible</option>
                                <option {{ old('visible') == '0' ? 'selected' : '' }} value="0">Oculto</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label for="stock">
                                <h5>*Bloqueado</h5>
                            </label>
                            <select class="form-control" class="custom-select" name="locked" required>
                                <option value="">Select...</option>
                                <option {{ old('locked') == '1' ? 'selected' : '' }} value="1">Bloqueado</option>
                                <option {{ old('locked') == '0' ? 'selected' : '' }} value="0">Desbloqueado</option>
                            </select>
                        </div>
                    </div>
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
