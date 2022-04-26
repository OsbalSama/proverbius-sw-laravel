@extends('layouts.profile-layout')
@section('profile-content')
    <h3>Suscripciones</h3>    
    <div>
        @if ($User->products != null)
            <p>
                Mostrar Suscripciones del Perfil
            </p>
        @else
            <div class="d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <div class="d-flex justify-content-center">
                        <img style="width: 10rem" class="card-img-top"
                            src="{{ asset('images/assets/noSuscriptions.png') }}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <h5 class="card-title ">Sin Suscripciones</h5>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
