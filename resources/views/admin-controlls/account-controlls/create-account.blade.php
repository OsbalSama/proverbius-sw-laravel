@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Registrar nueva cuenta</h1>

    <form method="POST" action="{{route('admin.accounts.store')}}">
        @csrf
        <div class="form-row">
            <h5><label class="col-form-label" for="name">Nombre</label></h5>
            <input class="form-control" name="name" type="text" placeholder="Username1995" required>
        </div>
        <div class="form-row">
            <h5><label class="col-form-label" for="email">Email</label></h5>
            <input class="form-control" name="email" type="email" placeholder="example@example.com" required>
        </div>
        <div class="form-row">
            <h5><label class="col-form-label" for="password">Password</label></h5>
            <input class="form-control" name="password" type="password" required>
        </div>
        <div class="form-row">
            <h5><label class="col-form-label" for="role">Role</label></h5>
            <select class="form-control" class="custom-select" name="role" required>
                <option value="">Select...</option>
                <option value="admin">Administrador</option>
                <option value="partner">Asociado</option>
                <option value="client">Cliente</option>
            </select>
        </div>
        <br>

        <div class="form-row d-flex justify-content-end">
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group me-2" role="group" aria-label="First group">
                    <button type="submit" class="btn btn-success btn-lg ">Guardar</button>
                </div>
                <div class="btn-group me-2" role="group" aria-label="Second group">
                    <a class="btn btn-danger btn-lg" href="{{route('admin.accounts.all')}}">Cancelar</a>
                </div>
            </div>

            <!-- <button type="submit" class="btn btn-success btn-lg ">Guardar</button>
            <a class="btn btn-danger btn-lg" href="{{route('admin.accounts.all')}}">Cancelar</a> -->
        </div>
    </form>

</div>


@endsection