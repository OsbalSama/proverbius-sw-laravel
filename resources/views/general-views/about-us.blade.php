@extends('layouts.app')
@section('content')
    <div class="container">
        {{-- <br>
        <h1>Sobre Nosotros</h1> --}}
        <div class="row justify-content-center">
            <div class="card-body">
                <div class="row align-items-center shadow p-3 mb-5 bg-white rounded">
                    <div class="col col-lg-4">
                        <img class="w-100" src="{{ asset('images\assets\art01.png') }}" alt="Image">
                    </div>
                    <div class="col-md ">
                        <h1>Misión y Visión</h1>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed quam obcaecati officia officiis
                            consequatur
                            accusantium labore, totam voluptates accusamus sapiente suscipit laudantium aliquam odit
                            modi
                            dolorum
                            dignissimos ex magnam delectus!</p>
                    </div>
                </div>

                <div class="shadow p-3 mb-5 bg-white rounded">
                    <div class="bg-black">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100 opacity-50" src="{{ asset('images\assets\team02.png') }}"
                                        alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h2>Nuestro Equipo de Trabajo</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni laboriosam
                                            necessitatibus reiciendis accusantium incidunt? Consequatur voluptate qui amet
                                            distinctio debitis. Aut natus perspiciatis non illo molestiae accusamus facere
                                            itaque iusto?
                                            Nemo facere ipsum, incidunt quos praesentium doloremque nam minima perferendis
                                            eius, eligendi delectus! Quidem doloremque hic esse magni exercitationem quas
                                            optio, cumque, impedit ex, iste dolorum aliquam reiciendis officia tempora?
                                            Recusandae ut velit laboriosam, minus architecto consectetur veniam! Excepturi
                                            cupiditate quia autem voluptatem voluptate? Iusto cupiditate debitis tempore
                                            expedita incidunt reiciendis, vero ad nesciunt? Rem omnis rerum accusantium aut
                                            explicabo!</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center shadow p-3 mb-5 bg-white rounded">
                    <div class="col-md">
                        <h1>Valores y Perspectiva</h1>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed quam obcaecati officia officiis
                            consequatur
                            accusantium labore, totam voluptates accusamus sapiente suscipit laudantium aliquam odit
                            modi
                            dolorum
                            dignissimos ex magnam delectus!</p>
                    </div>
                    <div class="col col-md">
                        <img class="w-100" src="{{ asset('images\assets\art02.png') }}" alt="Image">
                    </div>
                </div>

                <div class="row align-items-center shadow p-3 mb-5 bg-white rounded">
                    <div class="col-md">
                        <img class="w-100" src="{{ asset('images\assets\ceo.png') }}" alt="Image">
                    </div>
                    <div class="col-md">
                        <h2>Osbaldo Toledo Ramos</h2>
                        <h6>CEO de Proverbius Sw</h6>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex pariatur consequuntur delectus eos
                            porro possimus quia repellendus debitis, consectetur molestias aspernatur tenetur, repellat
                            rerum autem, officiis ea facere. Fugiat, similique?
                        </p>
                        <div class="d-flex justify-content-center">
                            <section class="mb-4">
                                <!-- Facebook -->
                                <a target="_blank" class="btn btn-outline-dark btn-floating m-1"
                                    href="https://www.facebook.com/ElCreisy" role="button"><i
                                        class="fab fa-facebook-f"></i></a>

                                <!-- Linkedin -->
                                <a target="_blank" class="btn btn-outline-dark btn-floating m-1"
                                    href="https://www.linkedin.com/in/osbaldo-toledo-ramos-06b249213" role="button"><i
                                        class="fab fa-linkedin-in"></i></a>

                                <!-- Twitter -->
                                <a target="_blank" class="btn btn-outline-dark btn-floating m-1"
                                    href="https://twitter.com/OsbaldoToledo" role="button"><i
                                        class="fab fa-twitter"></i></a>

                                <!-- Whatsapp -->
                                <a target="_blank" class="btn btn-outline-dark btn-floating m-1"
                                    href="https://wa.me/+522311741481" role="button"><i class="fab fa-whatsapp"></i></a>

                                <!-- Github -->
                                <a target="_blank" class="btn btn-outline-dark btn-floating m-1"
                                    href="https://github.com/OsbalSama" role="button"><i class="fab fa-github"></i></a>

                                <!-- G-Mail -->
                                {{-- <a target="_blank" class="btn btn-outline-dark btn-floating m-1"
                                    href="https://mail.google.com/mail/?view=cm&source=mailto&to=[osbaldo.toledoramos1995@gmail.com]"
                                    role="button"><i class="fab fa-google"></i></a> --}}
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
