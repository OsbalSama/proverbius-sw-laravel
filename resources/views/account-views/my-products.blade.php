@extends('layouts.app')
@section('content')
    <div class="container">
        <img class="w-100" src="{{ asset('images/advertising/advertising03.jpg') }}" alt="advertising">
    </div>

    <br>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3>{{ $User->name }}</h3>
                <h6>Products & Services</h6>
            </div>
        </div>
    </div>
@endsection
