@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-body">
                <h1>{{$User->name}}</h1>
                <p>
                    Email: <b>{{$User->email}}</b><br>
                    Role: <b>{{$User->role}}</b>
                </p>
                @if($User->isLogged() || (Auth::check() && Auth::user()->isAdmin()))
                <h6>Perfil puede ser Editado</h6>
                @else
                <h6>Perfil en modo Publico</h6>
                @endif
            </div>
            <div class="card">
                <div class="card-header">Personal Data</div>
                <div class="card-body">
                    Content
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">Products Liked</div>
                <div class="card-body">
                    Content
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">Products Subscribed</div>
                <div class="card-body">
                    Content
                </div>
            </div>
            <br>
            @if($User->isPartner() || $User->isAdmin())
            <div class="card">
                <div class="card-header">Products & Services Created</div>
                <div class="card-body">
                    Content
                </div>
            </div>
            <br>
            @endif
            @if($User->isAdmin())
            <div class="card">
                <div class="card-header">Account Controlls</div>
                <div class="card-body">
                    Content
                </div>
            </div>
            <br>
            @endif

        </div>

    </div>
</div>
@endsection
@section('scripts')

@endsection