@extends('layouts.app')
@section('content')
    {{-- <div class="container"> --}}
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h4>Logueos del Mes</h4>
                            <a class="btn btn-success" href="{{ route('admin.accounts.all') }}">Cuentas de
                                Usuario</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Grafica de Logueos.</p>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h4>Logueos del Mes</h4>
                            <a class="btn btn-success" href="">Cuentas de
                                Usuario</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Grafica de Logueos.</p>
                    </div>
                </div>

                <br>
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h4>Logueos del Mes</h4>
                            <a class="btn btn-success" href="">Cuentas de
                                Usuario</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Grafica de Logueos.</p>
                    </div>
                </div>

            </div>
        </div>
        {{-- </div> --}}
    </div>
@endsection
