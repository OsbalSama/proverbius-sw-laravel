@extends('layouts.profile-layout')
@section('profile-content')
    <h3>Me Gusta</h3>
    <div>
        @if ($User->products != null)
            <p>
                Mostrar Cosas que el Perfil ha dado Like
            </p>
        @else
            <div class="d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <div class="d-flex justify-content-center">
                        <img style="width: 10rem" class="card-img-top" src="{{ asset('images/assets/noLikesIcon.png') }}"
                            alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <h5 class="card-title ">no hay me gustas</h5>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
