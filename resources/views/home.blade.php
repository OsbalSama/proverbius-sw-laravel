@extends('layouts.app')
@section('content')






<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('/slider/Imagen1.jpg')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('/slider/Imagen2.jpg')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('/slider/Imagen3.jpg')}}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                @if (Auth::check())
                @if (Auth::user()->isClient())
                {{Auth::user()->name}} is Client
                @elseif (Auth::user()->isPartner())
                {{Auth::user()->name}} is Partner
                @elseif (Auth::user()->isAdmin())
                {{Auth::user()->name}} is Admin
                @elseif (Auth::user()->isRoot())
                {{Auth::user()->name}} is SuperAdmin
                @endif
                @else
                you are in global descktop
                @endif
            </div>
        </div>

    </div>
</div>
@endsection


@section('scripts')
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/bootstrap.js"></script>
<script>
    // $('.carousel').carousel()
    $('.carousel').carousel({
        interval: 2000
    })
</script>
@endsection