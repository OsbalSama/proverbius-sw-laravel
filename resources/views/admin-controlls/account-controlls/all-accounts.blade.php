@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- <div class="col-md-8"> -->
        <div class="card">
            <div class="card-header">All Accounts</div>
            <div class="card-body">
                <div class="d-flex justify-content-between px-4">
                    <!-- <div class="w-100 p-3"> -->
                    <div class="w-100 p-3">
                        <div class="d-flex justify-content-between">
                            <h2>CUENTAS DE USUARIO</h2>
                            <button class="btn btn-success btn-lg" onclick="createUser()">Nuevo Usuario</button>
                            <!-- <a class="btn btn-success btn-lg" href="">Nuevo Usuario</a> -->
                        </div>
                        <br>
                        @if($users->isEmpty())
                        <div class="alert alert-warning">
                            <h1>Sin Usuarios en el sistema…</h1>
                        </div>
                        @else
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <colgroup>
                                    <col style="width: 1%;">
                                    <col>
                                    <col>
                                    <col>
                                    <col style="width: 23%;">
                                </colgroup>
                                <thead class="thead-ligth">
                                    <tr>
                                        <th>#</th>
                                        <th>Usuario</th>
                                        <th>Correo</th>
                                        <th>Rol</th>
                                        <th class="d-flex justify-content-end">Controles</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->role}}</td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <button class="btn btn-outline-primary btn-sm mr-1 ml-1" onclick="viewProfile()">Perfil</button>
                                                @if($user->id > 1)
                                                <button class="btn btn-outline-warning btn-sm mr-1 ml-1" onclick="lockUnlockAccount()">Bloquear</button>
                                                <button class="btn btn-outline-warning btn-sm mr-1 ml-1" onclick="hideShowAccount()">Ocultar</button>
                                                <button class="btn btn-outline-danger btn-sm mr-1 ml-1" onclick="dropAccount()">Eliminar</button>
                                                @endif

                                                <!-- <form method="NULL" action="">
                                                    <button type="submit" class="btn btn-outline-danger btn-sm mr-1 ml-1">Eliminar</button>
                                                </form> -->
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @endif
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>


    @endsection

    @section('scripts')
    <script>
        function createUser() {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Usuario Agregado',
                showConfirmButton: false,
                timer: 1500
            })
        }

        function viewProfile() {
            Swal.fire('Falta programar funcion ver Perfil')
        }

        function lockUnlockAccount() {
            Swal.fire({
                title: 'Do you want to Lock/Unlock this Account?',
                showConfirmButton: false,
                showDenyButton: true,
                showCancelButton: true,
                denyButtonText: `Lock/Unlock`,
            }).then((result) => {
                if (result.isDenied) {
                    Swal.fire('Account Locked!', '', 'Success')
                }
            })
        }

        function hideShowAccount() {
            Swal.fire({
                title: 'Do you want to Hide/Show this Account?',
                showConfirmButton: false,
                showDenyButton: true,
                showCancelButton: true,
                denyButtonText: `Hide/Show`,
            }).then((result) => {
                if (result.isDenied) {
                    Swal.fire('Account Hidded!', '', 'Success')
                }
            })
        }

        function dropAccount() {
            Swal.fire({
                title: 'Do you want to Delete this Account?',
                showConfirmButton: false,
                showDenyButton: true,
                showCancelButton: true,
                denyButtonText: `Delete`,
            }).then((result) => {
                if (result.isDenied) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Account Deleted',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            })

        }
    </script>
    @endsection