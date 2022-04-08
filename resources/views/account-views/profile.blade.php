@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-body">
                <h1>{{$User->name}}</h1>
                <p>
                    Email:
                <h3>{{$User->email}}</h3>
                Role: <h3>{{$User->role}}</h3>
                </p>
                @if($User->isLogged() || (Auth::check() && Auth::user()->isAdmin()))
                <h6>Perfil puede ser Editado</h6>
                @else
                <h6>Perfil en modo Publico</h6>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')

@endsection