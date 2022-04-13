@extends('layouts.app')
@section('content')
    {{-- <div class="container"> --}}
    <div class="row justify-content-center">

        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <h4>Actividad de Cuentas de Usuario</h4>
                                    <a class="btn btn-success" href="{{ route('admin.accounts.all') }}">Cuentas de
                                        Usuario</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li>
                                        <p class="card-text">Grafica de Actividad Reciente</p>
                                    </li>
                                    <li>
                                        <p class="card-text">Numero de Nuevos Registros</p>
                                    </li>
                                    <li>
                                        <p class="card-text">Cuentas Reportadas</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <h4>Productos & Servicios</h4>
                                    <a class="btn btn-success" href="{{ route('admin.products.all') }}">Productos &
                                        Servicios</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li>
                                        <p class="card-text">Grafica de Productos & Servicios Compartidos</p>
                                    </li>
                                    <li>
                                        <p class="card-text">Numero de Nuevos Registros</p>
                                    </li>
                                    <li>
                                        <p class="card-text">Productos & Servicios Reportadas</p>
                                    </li>
                                    <li>
                                        <p class="card-text">Lista de Productos & Servicios Mas Compartidos</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <h4>Seccion</h4>
                                    <a class="btn btn-success" href="">Gestionar Regs</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li>
                                        <p class="card-text">Actividad</p>
                                    </li>
                                    <li>
                                        <p class="card-text">Actividad</p>
                                    </li>
                                    <li>
                                        <p class="card-text">Actividad</p>
                                    </li>
                                    <li>
                                        <p class="card-text">Actividad</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        Other Control
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
