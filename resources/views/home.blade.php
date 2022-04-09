@extends('layouts.app')
@section('content')
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
                        <img class="d-block w-100 opacity-50" src="{{asset('images/slider/Imagen1.jpg')}}" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Titulo</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, ullam molestias! Laboriosam, corporis animi.</p>
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="">
                        <img class="d-block w-100 opacity-50" src="{{asset('images/slider/Imagen2.jpg')}}" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Titulo</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, ullam molestias! Laboriosam, corporis animi.</p>
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="">
                        <img class="d-block w-100 opacity-50" src="{{asset('images/slider/Imagen3.jpg')}}" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Titulo</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, ullam molestias! Laboriosam, corporis animi.</p>
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="">
                        <img class="d-block w-100 opacity-50" src="{{asset('images/slider/Imagen4.jpg')}}" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Titulo</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, ullam molestias! Laboriosam, corporis animi.</p>
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="">
                        <img class="d-block w-100 opacity-50" src="{{asset('images/slider/Imagen5.jpg')}}" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Titulo</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, ullam molestias! Laboriosam, corporis animi.</p>
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

<br>
<div class="container">
    <!-- <div class="card">
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
    </div> -->
    <!-- <br> -->
    <div class="card">
        <div class="card-header">Nuestros Productos</div>
        <div class="card-body">
            <!--Carousel Wrapper-->
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                <!--Controls-->
                <div class="controls-top">
                    <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                    <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right"></i></a>
                </div>
                <!--/.Controls-->

                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                    <li data-target="#multi-item-example" data-slide-to="1"></li>

                </ol>
                <!--/.Indicators-->

                <!--Slides-->
                <div class="carousel-inner" role="listbox">

                    <!--First slide-->
                    <div class="carousel-item active">

                        <div class="col-md-3" style="float:left">
                            <div class="card mb-2">
                                <img class="card-img-top" src="{{asset('images/products/ipa.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Insurance Policy Administration</h5>
                                    <p class="card-text">Software de Manejo de Pólizas de Seguro para automóvil.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3" style="float:left">
                            <div class="card mb-2">
                                <img class="card-img-top" src="{{asset('images/products/rcf.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Register Cash Free</h5>
                                    <p class="card-text">Software de Punto de Venta para negocios con venta de mercancía por pieza o a granel.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3" style="float:left">
                            <div class="card mb-2">
                                <img class="card-img-top" src="{{asset('images/products/selah.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Selah Worship</h5>
                                    <p class="card-text">PROXIMAMENTE.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3" style="float:left">
                            <div class="card mb-2">
                                <img class="card-img-top" src="{{asset('images/products/ecm.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Easy Credit Manager</h5>
                                    <p class="card-text">PROXIMAMENTE.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--/.First slide-->

                    <!--Second slide-->
                    <div class="carousel-item">

                        <div class="col-md-3" style="float:left">
                            <div class="card mb-2">
                                <img class="card-img-top" src="{{asset('images/products/rcfd.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Register Cash Food</h5>
                                    <p class="card-text">Software de Punto de Venta especializado para restaurantes y negocios de comida rapida.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3" style="float:left">
                            <div class="card mb-2">
                                <img class="card-img-top" src="{{asset('images/products/rcmp.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Register Cash My Pizzeria</h5>
                                    <p class="card-text">PROXIMAMENTE.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3" style="float:left">
                            <div class="card mb-2">
                                <img class="card-img-top" src="{{asset('images/products/rcp.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Register Cash Pro</h5>
                                    <p class="card-text">PROXIMAMENTE.</p>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!--/.Second slide-->





                </div>
                <!--/.Slides-->

            </div>
            <!--/.Carousel Wrapper-->








        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-header">Conoce nuestros Servicios</div>
        <div class="card-body">
            Servicios
        </div>
    </div>



    <!-- <br>
    <div class="card">
        <div class="card-body">
            Content
        </div>
    </div> -->

    <br>
    <div class="card align-middle">
        <div class="card-header">Siguenos en nuestras Redes Sociales</div>
        <div class="card-body ">
            <!-- Facebook -->
            <a target="_blank" class="btn btn-primary" style="background-color: #3b5998;" href="https://www.facebook.com/ProverbiusSoftware" role="button"><i class="fab fa-facebook-f"></i>Facebook</a>
            <!-- Linkedin -->
            <a target="_blank" class="btn btn-primary" style="background-color: #0082ca;" href="https://www.linkedin.com/in/osbaldo-toledo-ramos-06b249213/" role="button"><i class="fab fa-linkedin-in"></i>LinkedIn</a>
            <!-- Youtube -->
            <a target="_blank" class="btn btn-primary" style="background-color: #ed302f;" href="https://www.youtube.com/channel/UCyHUW3repfp5RBWrDSXJ4Lw/featured" role="button"><i class="fab fa-youtube"></i>YouTube</a>
            <!-- Whatsapp -->
            <a target="_blank" class="btn btn-primary" style="background-color: #25d366;" href="https://chat.whatsapp.com/G6MDE4LHIOj413q2AD4iUj" role="button"><i class="fab fa-whatsapp"></i>WhatsApp</a>
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