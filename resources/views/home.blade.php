@extends('layouts.app')
@section('content')
    <!-- Carrusel -->
    <div class="bg-black">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="">
                            <img class="d-block w-100 opacity-50" src="{{ asset('images/slider/Imagen1.jpg') }}"
                                alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Aumenta tus Ventas</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, ullam molestias!
                                    Laboriosam, corporis animi.</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="">
                            <img class="d-block w-100 opacity-50" src="{{ asset('images/slider/Imagen2.jpg') }}"
                                alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Métodos de Pago Seguros</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, ullam molestias!
                                    Laboriosam, corporis animi.</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="">
                            <img class="d-block w-100 opacity-50" src="{{ asset('images/slider/Imagen3.jpg') }}"
                                alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Delivery y Negocios Digitales</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, ullam molestias!
                                    Laboriosam, corporis animi.</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="">
                            <img class="d-block w-100 opacity-50" src="{{ asset('images/slider/Imagen4.jpg') }}"
                                alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Conoce el E-commerce</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, ullam molestias!
                                    Laboriosam, corporis animi.</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="">
                            <img class="d-block w-100 opacity-50" src="{{ asset('images/slider/Imagen5.jpg') }}"
                                alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Soporte Técnico</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, ullam molestias!
                                    Laboriosam, corporis animi.</p>
                            </div>
                        </a>
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
        </div>
    </div>

    <div class="container">
        <!-- Publicidad 1 -->
        {{-- <br>
        <div>
            <img class="w-100" src="{{ asset('images/advertising/advertising01.jpg') }}" alt="advertising">
        </div> --}}

        <!-- Productos -->
        <br>
        <div class="card">
            <div class="card-header">Nuestros Productos</div>
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <!-- item -->
                        <div class="col-3">
                            <div class="card mb-2 h-100">
                                <img class="card-img-top" src="{{ asset('images/products/ipa.jpg') }}"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Insurance Policy Administration</h5>
                                    <p class="card-text">Software de Manejo de Pólizas de Seguro para automóvil.</p>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="col-3">
                            <div class="card mb-2 h-100">
                                <img class="card-img-top" src="{{ asset('images/products/rcf.jpg') }}"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Register Cash Free</h5>
                                    <p class="card-text">Software de Punto de Venta para negocios con venta de
                                        mercancía por pieza o a granel.</p>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="col-3">
                            <div class="card mb-2 h-100">
                                <img class="card-img-top" src="{{ asset('images/products/rcfd.jpg') }}"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Register Cash Food</h5>
                                    <p class="card-text">Software de Punto de Venta especializado para restaurantes y
                                        negocios de comida rapida.</p>
                                </div>
                            </div>
                        </div>
                        <!-- item -->
                        <div class="col-3">
                            <div class="card mb-2 h-100">
                                <img class="card-img-top" src="{{ asset('images/products/selah.jpg') }}"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Selah Worship</h5>
                                    <p class="card-text">PROXIMAMENTE.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Servicios -->
        <br>
        <div class="card">
            <div class="card-header">Conoce nuestros Servicios</div>
            <div class="card-body">
                <!--Carousel Wrapper-->
                <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                        <li data-target="#multi-item-example" data-slide-to="1"></li>
                        <li data-target="#multi-item-example" data-slide-to="2"></li>
                    </ol>
                    <!--/.Indicators-->
                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                        <!--First slide-->
                        <div class="carousel-item active">
                            <div class="row">
                                <!-- Item -->
                                <div class="col-md-4">
                                    <div class="card mb-2 h-100">
                                        <img class="card-img-top" src="{{ asset('images/services/serv01.png') }}"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Servicios Freelance</h4>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the
                                                card's content.</p>
                                            <div class="d-flex">
                                                <a target="_blank" href="https://demoserviciosfreelance.netlify.app"
                                                    class="text-light btn btn-primary w-50 mr-2">Ver Demo</a>
                                                <a class="text-light btn btn-success w-50 mr-2">Lo Quiero</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="col-md-4 clearfix d-none d-md-block">
                                    <div class="card mb-2 h-100">
                                        <img class="card-img-top" src="{{ asset('images/services/serv02.png') }}"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Tienda Digital Entrada</h4>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the
                                                card's content.</p>
                                            <div class="d-flex">
                                                <a target="_blank" href="https://demofrontendstore.netlify.app"
                                                    class="text-light btn btn-primary w-50 mr-2">Ver Demo</a>
                                                <a class="text-light btn btn-success w-50 mr-2">Lo Quiero</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item -->
                                <div class="col-md-4 clearfix d-none d-md-block">
                                    <div class="card mb-2 h-100">
                                        <img class="card-img-top" src="{{ asset('images/services/serv03.png') }}"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Blog de Cafe</h4>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the
                                                card's content.</p>
                                            <div class="d-flex">
                                                <a target="_blank" href="https://demoblogcafe.netlify.app"
                                                    class="text-light btn btn-primary w-50 mr-2">Ver Demo</a>
                                                <a class="text-light btn btn-success w-50 mr-2">Lo Quiero</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--/.First slide-->

                        <!--Second slide-->
                        <div class="carousel-item">
                            <div class="row">

                                <!-- Item -->
                                <div class="col-md-4">
                                    <div class="card mb-2 h-100">
                                        <img class="card-img-top" src="{{ asset('images/services/serv04.png') }}"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Festival Musical</h4>
                                            <p class="card-text">Some quick example text to build on the card title
                                                and make up the bulk of the
                                                card's content.</p>
                                            <div class="d-flex">
                                                <a target="_blank" href="https://demofestivalmusical.netlify.app"
                                                    class="text-light btn btn-primary w-50 mr-2">Ver Demo</a>
                                                <a class="text-light btn btn-success w-50 mr-2">Lo Quiero</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.Slides-->
                    <div class="d-flex justify-content-end">
                        <div class="controls-top">
                            <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i
                                    class="fa fa-chevron-left"></i></a>
                            <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
                                    class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <!--/.Controls-->
                </div>
                <!--/.Carousel Wrapper-->
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        // $('.carousel').carousel()
        $('.carousel').carousel({
            interval: 5000
        })
    </script>
@endsection
