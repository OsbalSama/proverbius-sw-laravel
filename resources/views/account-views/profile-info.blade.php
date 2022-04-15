@extends('layouts.profile-layout')
@section('profile-content')
    <div class="card-body">
        <h3>Informacion</h3>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h4>Informacion de Cuenta</h4>
                    @if ($User->isLogged() || (Auth::check() && Auth::User()->isAdmin()))
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-secondary mr-2"
                                href="{{ route('account.info.edit', ['User' => $User]) }}">Actualizar</a>
                        </div>
                    @endif
                </div>
            </div>
            <div class="card-body">
                <h5>Cuenta de Usuario</h5>
                <p> {{ $User->name }}</p>
                <h5>Correo Electronico</h5>
                <p> {{ $User->email }}</p>
                @if ($User->isPartner())
                    <h6>Privilegios de Asociado</h6>
                @elseif ($User->isAdmin())
                    <h6>Privilegios de Administrador</h6>
                @else
                    @if ($User->isLogged() || (Auth::check() && Auth::User()->isAdmin()))
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-success mr-2" href="">Unete a Nosotros</a>
                        </div>
                    @endif
                @endif
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h4>Informacion Personal</h4>
                    @if ($User->isLogged() || (Auth::check() && Auth::User()->isAdmin()))
                        <div class="d-flex justify-content-end">
                            @if ($User->hasFullInfo())
                                <a class="btn btn-secondary mr-2"
                                    href="{{ route('account.info.edit', ['User' => $User]) }}">Actualizar</a>
                            @else
                                <a class="btn btn-info mr-2"
                                    href="{{ route('account.info.edit', ['User' => $User]) }}">Completa tu
                                    perfil</a>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
            <div class="card-body">
                <h5>Nombre(s)</h5>
                @if ($User->first_names != null)
                    <p> {{ $User->first_names }}</p>
                @else
                    <p class="font-italic">No Asignado</p>
                @endif

                <h5>Apellido(s)</h5>
                @if ($User->last_names != null)
                    <p> {{ $User->last_names }}</p>
                @else
                    <p class="font-italic">No Asignado</p>
                @endif

                <h5>Cumpleaños</h5>
                @if ($User->birthdate != null)
                    <p> {{ $User->birthdate }}</p>
                @else
                    <p class="font-italic">No Asignado</p>
                @endif

                <h5>Dirección</h5>
                @if ($User->address != null)
                    <p> {{ $User->address }}</p>
                @else
                    <p class="font-italic">No Asignado</p>
                @endif
            </div>
        </div>
        @if ($User->isLogged() || (Auth::check() && Auth::User()->isAdmin()))
            <br>
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h4>Metodos de Pago</h4>
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-success mr-2" href="#">+</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5>*Item</h5>
                </div>
            </div>
        @endif
        <br>
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h4>Reces Sociales</h4>
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
                    <h4>Medios de Contacto</h4>
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
    </div>
@endsection
@section('scripts')
    @if ($update == true)
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Datos Guardados',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif
@endsection
