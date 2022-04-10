@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Registrar nueva cuenta</h1>
        {{-- @if (@isset($errors) && $errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        <form method="POST" action="{{ route('admin.accounts.store') }}">
            @csrf
            <div class="form-row">
                <h5><label class="col-form-label" for="name">Nombre</label></h5>
                <input value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" name="name"
                    type="text" placeholder="Username1995" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-row">
                <h5><label class="col-form-label " for="email">Email</label></h5>
                <input value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" name="email"
                    type="email" placeholder="example@example.com" required>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-row">
                <h5><label class="col-form-label " for="password">Password</label></h5>
                <input value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror"
                    name="password" type="password" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-row">
                <h5><label class="col-form-label" for="role">Role</label></h5>
                <select class="form-control" class="custom-select" name="role" required>
                    <option value="">Select...</option>
                    <option {{ old('role') == 'admin' ? 'selected' : '' }} value="admin">Administrador</option>
                    <option {{ old('role') == 'partner' ? 'selected' : '' }} value="partner">Asociado</option>
                    <option {{ old('role') == 'client' ? 'selected' : '' }} value="client">Cliente</option>
                </select>
            </div>

            <br>
            <div class="form-row d-flex justify-content-end">
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group me-2" role="group" aria-label="First group">
                        <button type="submit" class="btn btn-success btn-lg ">Guardar</button>
                    </div>
                    <div class="btn-group me-2" role="group" aria-label="Second group">
                        <a class="btn btn-danger btn-lg" href="{{ route('admin.accounts.all') }}">Cancelar</a>
                    </div>
                </div>
            </div>
        </form>
        <br>


    </div>
@endsection
