@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <img style="width: 8rem" src="{{ asset('images/assets/help.png') }}" alt="imagen">
                    </div>
                    <div class="col-md">
                        <h4>¿Con qué podemos ayudarte?</h4>
                        <br>
                        <div class="input-group rounded">
                            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                                aria-describedby="search-addon" />
                            <span class="input-group-text border-0" id="search-addon">
                                <i class="fas fa-search"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="card">
                    <div class="card-header">Medios de Contacto</div>
                    <div class="card-body">
                        content
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <div class="card-header">Temas Comunes</div>
                    <div class="card-body">
                        content
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md">
                <div class="card">
                    <div class="card-header">Haste Partner</div>
                    <div class="card-body">
                        content
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <div class="card-header">Desarrollo & Aplicaciones</div>
                    <div class="card-body">
                        content
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md">
                <div class="card">
                    <div class="card-header">Condiciones del Servicio</div>
                    <div class="card-body">
                        content
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <div class="card-header">Reportar un Problema, Bug o Servicio</div>
                    <div class="card-body">
                        content
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
