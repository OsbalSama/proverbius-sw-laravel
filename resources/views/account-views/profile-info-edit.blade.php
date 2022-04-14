@extends('layouts.profile-layout')
@section('profile-content')
    {{-- <div class="container">
        <div class="card"> --}}
    <div class="card-body">
        <h3>Actualizar Informacion</h3>
    </div>
    <div class="container">

        <form method="POST" action="{{ route('account.info.update', ['User' => $User]) }}" class="saveChanges">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h4>Informacion de Cuenta</h4>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-success mr-2" type="submit">Guardar</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">
                            <h5>*Cuenta de Usuario</h5>
                        </label>
                        <input value="{{ $User->name }}" type="text" class="form-control" name="name"
                            placeholder="Username1995" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">
                            <h5>*Correo Electronico</h5>
                        </label>
                        <input type="email" class="form-control" name="email" placeholder="ejemplo@correo.test"
                            value="{{ $User->email }}" required>
                        @error('email')
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
                        <h4>Informacion Personal</h4>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-success mr-2" type="submit">Guardar</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="first_names">
                            <h5>Nombre(s)</h5>
                        </label>
                        <input value="{{ $User->first_names }}" type="text" class="form-control" name="first_names"
                            placeholder="Jesus Alberto">
                        @error('first_names')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="last_names">
                            <h5>Apellido(s)</h5>
                        </label>
                        <input value="{{ $User->last_names }}" type="text" class="form-control" name="last_names"
                            placeholder="Perez Lopez">
                        @error('last_names')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="birthdate">
                            <h5>Cumpleaños</h5>
                        </label>
                        <input value="{{ $User->birthdate }}" class="form-control" type="date" name="birthdate"
                            max="<?= date('Y-m-d') ?>">
                        @error('birthdate')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="address">
                            <h5>Dirección</h5>
                        </label>
                        <textarea class="form-control" name="address" rows="3"
                            placeholder="Enrique Segobiano">{{ $User->address }}</textarea>
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </form>
    </div>
    <br>
    {{-- </div>
    </div> --}}
@endsection

@section('scripts')
    <script>
        $('.saveChanges').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Actualizar información?',
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
    </script>
@endsection
