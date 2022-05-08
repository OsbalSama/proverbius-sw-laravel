@extends('layouts.app')
@section('content')
    {{-- <div class="bg-black">
        <div class="container">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 opacity-50" src="{{ asset('images\assets\team.png') }}"
                            alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Nuestro Equipo de Trabajo</h2>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta rerum ab libero consequatur
                                impedit est eveniet. Molestiae sequi, dolore consequatur, nobis doloremque alias ullam quos,
                                libero sit repellendus labore repellat!
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <br>
    <div class="container">
        <h3>Fundadores</h3>
        <div class="row justify-content-center">
            <div class="row align-items-center shadow p-3 mb-5 bg-white rounded w-75">
                <div class="col-md-4 bg-secondary p-2">
                    <img class="img-thumbnail w-100" src="{{ asset('images\assets\Imagen2.png') }}" alt="Image">
                </div>
                <div class="col-md m-0 p-0 h-100 w-100">
                    <div class="card w-100 h-100">
                        <div class="card-body">
                            <h2>Osbaldo Toledo Ramos</h2>
                            <h6>CEO de Proverbius Sw</h6>
                            <p class="text-center">
                                Profesional Técnico en Informática, especializado en programación y Desarrollador FreeLancer
                                especializado en actualización de negocios, desarrollando herramientas web, hardware y
                                software.
                            </p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <section class="mb-4">
                                <a target="_blank" class="btn btn-outline-dark btn-floating"
                                    href="http://proverbius-sw.test/profile/osbal095" role="button"><b>Ver
                                        Perfil</b></a>
                                <!-- Facebook -->
                                <a target="_blank" class="btn btn-outline-dark btn-floating"
                                    href="https://www.facebook.com/ElCreisy" role="button"><i
                                        class="fab fa-facebook-f"></i></a>

                                <!-- Linkedin -->
                                <a target="_blank" class="btn btn-outline-dark btn-floating"
                                    href="https://www.linkedin.com/in/osbaldo-toledo-ramos-06b249213" role="button"><i
                                        class="fab fa-linkedin-in"></i></a>

                                <!-- Twitter -->
                                <a target="_blank" class="btn btn-outline-dark btn-floating"
                                    href="https://twitter.com/OsbaldoToledo" role="button"><i
                                        class="fab fa-twitter"></i></a>

                                <!-- Whatsapp -->
                                <a target="_blank" class="btn btn-outline-dark btn-floating"
                                    href="https://wa.me/+522311741481" role="button"><i class="fab fa-whatsapp"></i></a>

                                <!-- Github -->
                                <a target="_blank" class="btn btn-outline-dark btn-floating"
                                    href="https://github.com/OsbalSama" role="button"><i class="fab fa-github"></i></a>
                            </section>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-items-center shadow p-3 mb-5 bg-white rounded">
                <div class="col col-lg-4">
                    <img class="w-100" src="{{ asset('images\assets\art01.png') }}" alt="Image">
                </div>
                <div class="col-md ">
                    <h1>Misión</h1>
                    <p>Nuestra misión es ofrecer soluciones, productos y servicios en el ámbito Tecnológico, para el
                        desarrollo del sector
                        productivo de la región, con la finalidad de mejorar la eficiencia de los negocios y aumentar la
                        calidad de vida en el país.
                    </p>
                    <h1>Visión</h1>
                    <p>
                        Ser un detonante del desarrollo tecnológico, empresarial e industrial en la región objetivo, creando
                        nuevas tecnologías para llevar a México a un mejor futuro.
                        Estamos comprometidos a establecer las condiciones que permitan a todos nuestros clientes y
                        asociados experimentar un crecimiento económico sin precedentes, incluyendo aprendizaje constante,
                        innovación y buen servicio.

                    </p>
                </div>
            </div>

            <div class="row align-items-center shadow p-3 mb-5 bg-white rounded">
                <div class="col-lg">
                    <h1>Valores</h1>
                    <p>
                    <H5>*Diversidad de ideas y pensamientos</H5>
                    <p>
                        La unidad es la variedad, y la variedad en la unidad es la ley suprema del universo.
                        <br><i><b>-Isaac Newton</b></i>
                    </p>

                    <h5>*Siempre al servicio de la sociedad</h5>
                    <p>
                        Dormía..., dormía y soñaba que la vida no era más que alegría. Me desperté y vi que la vida no era
                        más que servir... y el servir era alegría.
                        <br><i><b>-Rabindranath Tagore</b></i>
                    </p>
                    </p>

                    <h5>*Innovación y estudio constante</h5>
                    <p>La mejor manera de predecir el futuro es creándolo.
                        <br><i><b>-Peter Drucker</b></i>
                    </p>

                    <h5>*Disciplina, dedicación y constancia</h5>
                    <p>
                        La disciplina es el puente entre las metas y el logro.
                        <br><i><b>-Rabindranath Tagore</b></i>
                    </p>

                    <h5>*Sabiduría y fe</h5>
                    <p>
                        Si a alguno de ustedes le falta sabiduría, pídasela a Dios, y él se la dará, pues Dios da a todos
                        generosamente sin menospreciar a nadie.
                        <br><i><b>-Santiago 1:5 NVI</b></i>
                    </p>
                    </p>
                </div>
                <div class="col col-lg-5">
                    <img class="w-100" src="{{ asset('images\assets\art03.png') }}" alt="Image">
                </div>
            </div>


        </div>
    </div>
    {{-- </div> --}}
@endsection
