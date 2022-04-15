@extends('layouts.app')
@section('content')
    <div class="bg-black">
        <div class="container">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 opacity-50" src="{{ asset('images/advertising/banner08.png') }}"
                            alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Ábrete al E-Commerce</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, ullam molestias!
                                Laboriosam, corporis animi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">E-Commerce</div>
                <div class="card-body">
                    Content
                </div>
            </div>
        </div>
    </div>
@endsection
