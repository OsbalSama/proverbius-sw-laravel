@extends('layouts.profile-layout')
@section('profile-content')
    {{-- <div class="card-body">
        <h3>Informacion</h3>
    </div> --}}
    <div class="container">
        <div class="card">
            {{-- <p> --}}
            {{-- <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h4>Informacion</h4>
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
            </div> --}}
            <div class="card-body">
                <p>
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h5>
                            Datos de Cuenta
                        </h5>
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
                    <div class="row">
                        {{-- <div class="col-md">
                            alfa
                        </div> --}}
                        <div class="col-md">
                            <h5>Cuenta de Usuario</h5>
                            <p> {{ $User->name }}</p>
                            <h5>Correo Electronico</h5>
                            <p> {{ $User->email }}</p>
                        </div>
                        <div class="col-auto">
                            @if ($User->isClient())
                                <h6>Privilegios de Cliente</h6>
                                @if ($User->isLogged() || (Auth::check() && Auth::User()->isAdmin()))
                                    <div class="d-flex justify-content-end">
                                        <a class="btn btn-success mr-2" href="">Unete a Nosotros</a>
                                    </div>
                                @endif
                            @elseif ($User->isPartner())
                                <h6>Privilegios de Asociado</h6>
                            @elseif ($User->isAdmin())
                                <h6>Privilegios de Administrador</h6>
                            @endif
                        </div>
                    </div>
                </div>
                </p>


                {{-- </div> --}}
                {{-- </p> --}}
                {{-- <div class="card-body"> --}}
                <p>
                <div class="card-header">
                    <h5>
                        Datos Personales
                    </h5>
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
                </p>

                <p>
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h4>Telefono de Contacto</h4>
                        @if ($User->isLogged() || (Auth::check() && Auth::User()->isAdmin()))
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-success mr-2" id="btnAddPhone">+</button>
                                {{-- <a class="btn btn-success mr-2 addPhone" href="#">+</a> --}}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="card-body">
                    content
                </div>
                </p>


                @if ($User->isLogged() || (Auth::check() && Auth::User()->isAdmin()))
                    <p>
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h4>Metodos de Pago</h4>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-success mr-2" id="btnAddCard">+</button>
                                {{-- <a class="btn btn-success mr-2" href="#">+</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        content
                    </div>
                    </p>
                @endif
                <p>
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h4>Reces Sociales</h4>
                        @if ($User->isLogged() || (Auth::check() && Auth::User()->isAdmin()))
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-success mr-2" id="btnAddSocialNetwork">+</button>
                                {{-- <a class="btn btn-success mr-2" href="#">+</a> --}}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="card-body">
                    content
                </div>
                </p>
                {{-- <div class="card-header">
                    algo
                </div>
                <div class="card-body">
                    content
                </div>
                <br> --}}
            </div>
        </div>


        {{-- <div class="row">
            <div class="col-sm">
                <input class="form-control " name="phone" type="tel" placeholder="123-456-7890"
                    pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
            </div>
            <div class="col-auto">
                <input class="btn btn-success btn-sm mr-2" type="submit" value="Guardar">
            </div>
        </div> --}}

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
    <script>
        $("#btnAddPhone").click(function(e) {
            Swal.fire({
                title: 'Agregar Telefono de Contacto',
                // html: '<form action="">' +
                //     '<div class="form-group">' +
                //     '<label for="phone">' +
                //     '<h2>Agregar Telefono</h2>' +
                //     '</label>' +
                //     '<div class="row m-0">' +
                //     '<div class="col-md">' +
                //     '<input class="form-control" name="phone" type="tel" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>' +
                //     '</div>' +
                //     '<div class="col-auto m-0">' +
                //     '<input class="btn btn-success" type="submit" value="Guardar">' +
                //     '</div>' +
                //     '</div>' +
                //     '</div>' +
                //     '<div class="form-group">' +
                //     '</div>' +
                //     '</form>',
                // showConfirmButton: false,
            })
        });

        $("#btnAddCard").click(function(e) {
            Swal.fire({
                title: 'Agregar Tarjeta',
                // html: '<form action="">' +
                //     '<div class="form-group">' +
                //     '<label for="phone">' +
                //     '<h2>Agregar Telefono</h2>' +
                //     '</label>' +
                //     '<div class="row m-0">' +
                //     '<div class="col-md">' +
                //     '<input class="form-control" name="phone" type="tel" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>' +
                //     '</div>' +
                //     '<div class="col-auto m-0">' +
                //     '<input class="btn btn-success" type="submit" value="Guardar">' +
                //     '</div>' +
                //     '</div>' +
                //     '</div>' +
                //     '<div class="form-group">' +
                //     '</div>' +
                //     '</form>',
                // showConfirmButton: false,
            })
        });

        $("#btnAddSocialNetwork").click(function(e) {
            Swal.fire({
                title: 'Agregar Red Social',
                // html: '<form action="">' +
                //     '<div class="form-group">' +
                //     '<label for="phone">' +
                //     '<h2>Agregar Telefono</h2>' +
                //     '</label>' +
                //     '<div class="row m-0">' +
                //     '<div class="col-md">' +
                //     '<input class="form-control" name="phone" type="tel" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>' +
                //     '</div>' +
                //     '<div class="col-auto m-0">' +
                //     '<input class="btn btn-success" type="submit" value="Guardar">' +
                //     '</div>' +
                //     '</div>' +
                //     '</div>' +
                //     '<div class="form-group">' +
                //     '</div>' +
                //     '</form>',
                // showConfirmButton: false,
            })
        });
    </script>
@endsection
