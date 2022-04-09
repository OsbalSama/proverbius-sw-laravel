@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">All Accounts</div>
            <div class="card-body">
                <div class="d-flex justify-content-between px-4">
                    <div class="w-100 p-3">
                        <div class="d-flex justify-content-between">
                            <h2>CUENTAS DE USUARIO</h2>                            
                            <a class="btn btn-success btn-lg" href="{{route('admin.accounts.create')}}">Nuevo Usuario</a>
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
                                        <th>Bloqueado</th>
                                        <th>Visible</th>
                                        <th class="d-flex justify-content-end">Controles</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    @if($user->id > 1)
                                    @if(Auth::user()->id == $user->id)
                                    <tr class="bg-warning">
                                        @else
                                    <tr>
                                        @endif
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->role}}</td>
                                        @if($user->visible == true)
                                        <td>VISIBLE</td>
                                        @else
                                        <td>OCULTO</td>
                                        @endif

                                        @if($user->locked == true)
                                        <td>BLOQUEADO</td>
                                        @else
                                        <td>DESBLOQUEADO</td>
                                        @endif

                                        @if(Auth::user()->id != $user->id)
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <a class="btn btn-outline-primary btn-sm mr-1 ml-1" href="{{route('account.viewProfile', ['User'=> $user->id])}}" target="_blank">Perfil</a>
                                                @if($user->visible == true)
                                                <button class="btn btn-outline-warning btn-sm mr-1 ml-1" onclick="hideShowAccount()">Ocultar </button>
                                                @else
                                                <button class="btn btn-outline-warning btn-sm mr-1 ml-1" onclick="hideShowAccount()">Mostrar</button>
                                                @endif

                                                @if($user->locked == true)
                                                <button class="btn btn-outline-warning btn-sm mr-1 ml-1" onclick="lockUnlockAccount()">Desbloquear</button>
                                                @else
                                                <button class="btn btn-outline-warning btn-sm mr-1 ml-1" onclick="lockUnlockAccount()">Bloquear</button>
                                                @endif


                                                <form class="dropUser" method="POST" action="{{route('admin.accounts.delete', ['user'=> $user->id])}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger btn-sm mr-1 ml-1">Eliminar</button>
                                                </form>
                                                <!-- <button class="btn btn-outline-danger btn-sm mr-1 ml-1" onclick="dropAccount()">Eliminar</button> -->
                                            </div>
                                        </td>
                                        @else
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <a class="btn btn-outline-primary btn-sm mr-1 ml-1" href="{{route('account.viewProfile', ['User'=> $user->id])}}" target="_blank">Perfil</a>
                                            </div>
                                        </td>
                                        @endif
                                    </tr>
                                    @endif
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

    @if(session('deleted') == 'ok')
    <script>
        Swal.fire(
            'Deleted!',
            'Account deleted.',
            'success'
        )
    </script>
    @endif

    @if(session('created') == 'ok')
    <script>
        Swal.fire(
            'Creaded!',
            'Account Created.',
            'success'
        )
    </script>
    @endif

    <script>
        function loadAccounts() {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Accounts Loaded Correctly',
                showConfirmButton: false,
                timer: 1500
            })
        }

        function createUser() {
            Swal.fire({
                title: '<strong>HTML <u>example</u></strong>',
                showConfirmButton: true,
                showCancelButton: true,
                focusConfirm: false,
                cancelButtonText: 'Cancel'
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
                    loadAccounts();
                    // Swal.fire('Account Locked!', '', 'Success')
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
                    loadAccounts();
                }
            })
        }

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

        function dropAccount() {
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

                }
            })
        }
    </script>
    @endsection