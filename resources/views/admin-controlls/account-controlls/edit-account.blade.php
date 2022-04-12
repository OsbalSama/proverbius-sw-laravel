@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Actualizar Cuenta de Usuario</h1>
        <label for="">{{ $User->locked }}</label>
        <label for="">{{ $User->visible }}</label>

        <form class="trySubmit" autocomplete="off" method="POST"
            action="{{ route('admin.accounts.update', ['User' => $User]) }}">
            @csrf
            @method('PUT')
            <div class="form-row">
                <h5><label class="col-form-label" for="name">Nombre</label></h5>
                <input value="{{ $User->name }}" class="form-control @error('name') is-invalid @enderror" name="name"
                    type="text" placeholder="Username1995" autocomplete="off" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-row">
                <h5><label class="col-form-label " for="email">Email</label></h5>
                <input value="{{ $User->email }}" class="form-control @error('email') is-invalid @enderror" name="email"
                    type="email" placeholder="example@example.com" autocomplete="off" required>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-row">
                <h5><label class="col-form-label" for="role">Role</label></h5>
                <select class="form-control" class="custom-select" name="role" required>
                    <option {{ $User->role == 'admin' ? 'selected' : '' }} value="admin">Administrador</option>
                    <option {{ $User->role == 'partner' ? 'selected' : '' }} value="partner">Asociado</option>
                    <option {{ $User->role == 'client' ? 'selected' : '' }} value="client">Cliente</option>
                </select>
            </div>

            <div class="form-row">
                <h5><label class="col-form-label" for="visible">Visible</label></h5>
                <label for="{{ $User->visible }}"></label>
                <select class="form-control" class="custom-select" name="visible" required>
                    <option {{ $User->visible == 1 ? 'selected' : '' }} value="1">Visible</option>
                    <option {{ $User->visible == 0 ? 'selected' : '' }} value="0">Oculto</option>
                </select>
            </div>

            <div class="form-row">
                <h5><label class="col-form-label" for="locked">Block</label></h5>
                <select class="form-control" class="custom-select" name="locked" required>
                    <option {{ $User->locked == 1 ? 'selected' : '' }} value='1'>Bloqueado</option>
                    <option {{ $User->locked == 0 ? 'selected' : '' }} value='0'>Desbloqueado</option>
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
@section('scripts')
    <script>
        $('.trySubmit').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "Update All data from this Account!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Update It!'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });
    </script>
@endsection
