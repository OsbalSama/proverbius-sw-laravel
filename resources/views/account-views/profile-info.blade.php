@extends('layouts.profile-layout')
@section('profile-content')
    <br>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3>Informacion</h3>
            </div>
            {{-- <div> --}}
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
                            <h1>Falta agregar medios de Pago</h1>
                            <p>*Sin metodos de Pago</p>
                        </div>
                    </div>
                @endif
            </div>
            <br>
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

    {{-- <script>
        $('.dropUser').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });
    </script> --}}
@endsection
