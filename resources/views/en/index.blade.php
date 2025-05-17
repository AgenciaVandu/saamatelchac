@push('scss')
    @vite(['resources/scss/index.scss', 'resources/scss/app.scss', 'resources/js/app.js'])
@endpush
<x-layouts.app titleSaama="Departamentos de alto lujo frente al mar en las costas de Yucatán"
    meta-description="Diseñado para quienes valoran la privacidad, el lujo y la tranquilidad, Saama
ofrece un entorno de baja densidad con un número limitado de unidades, ideal para disfrutar de
una vida extraordinaria en un paraíso frente al mar.">

    <header class="cabecera">
        <div class="container">
            <div class="row cabecera__pad">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <h1 class="titular__titulo">High-End Beachfront Apartments on the Yucatán Coast</h1>
                    <p class="titular__descripcion">Discover Saama Telchac, an exclusive vertical development on the
                        beautiful beaches of Yucatán. Designed for those who value privacy, luxury, and tranquility,
                        Saama offers a low-density environment with a limited number of units—ideal for enjoying an
                        extraordinary life in a beachfront paradise.</p>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 text-center m-auto">
                    <h1 class="costo">Desde 8.1 mdp</h1>
                </div>
            </div>
        </div>

    </header>

    <section id="comunidad" class="comunidad ">
        <div class="container text-center pb-5">
            <div class="video">
                <iframe loading="lazy" width="100%" height="625" muted="muted"
                    src="https://www.youtube.com/embed/7EU5kyP1do4?si=mAJHmdUBwTx4Ugwy" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay;  mute clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="comunidad__contenido">
                <p class="pangram pt-4">
                    Saama Telchac is the perfect place—whether for living or enjoying an unforgettable vacation. Located
                    on one of the most exclusive and safest beaches on the Yucatán coast, this development lets you
                    experience daily the serenity and privilege of being just steps from the sea.
                </p>
            </div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Descargar
                brochure</button>

        </div>
    </section>

    <section id="destacados" class="destacados">
        <div class="container">
            <h1>Belong to an exclusive community</h1>
        </div>
        <div class="container">
            <div class="grid-contenido">
                <div class="web">

                    <div class="web__contenido">
                        <h2>10 floors <br>
                            with ocean views</h2>

                    </div>
                </div>
                <div class="fotografia">

                    <div class="foto__contenido">
                        <h2>3-bedroom apartments</h2>

                    </div>
                </div>
                <div class="digital">

                    <div class="digital__contenido">
                        <h2>2 units per floor </h2>


                    </div>
                </div>
                <div class="impresos">

                    <div class="impresos__contenido">
                        <h2>Just 90 meters <br>
                            from the beach</h2>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="amenidades" class="amenidades">
        <div class="container">
            <h1>Inspiring Interiors</h1>
            <p>Each layout at Saama Telchac has been carefully designed to provide a space <br> where sophistication
                meets the serenity of the natural environment. With high-quality finishes and a layout <br> that
                maximizes natural light, our interiors immerse you in comfort and elegance.</p>
        </div>

    </section>
    <x-galeria />
    <div class="resumen">
        <div class="container">
            <h1 class="text-center"> Amenities designed to nurture your happiness</h1>
        </div>
        <div class="resumen__iconos"></div>
    </div>

    <section class="cta">
        <div class="container">
            <div class="cta__contenido">
                <img src="{{ asset('/img/logos/isaama-arena.svg') }}" width="40" class="cta__icono pb-3"
                    alt="icono saama telchac">
                <h1 class="cta__titulo pb-3">Your beachfront oasis is waiting</h1>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Descargar
                    brochure</button>
            </div>
        </div>
    </section>

    <section id="tipologias" class="tipologias">
        <div class="container">
            <div class="tipologias__titular">
                <h1> Explore Our Layouts</h1>
                <p>Our 3 apartment models were created with unique features that offer comfort at all times</p>
            </div>
            <div class="tipologias__contenido">
                <div class="row pt-5">{{-- penthouse --}}
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <img src="{{ asset('img/penthouse.webp') }}" class="img-fluid" alt="Penthouse saama telchac">

                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                        <div class="tipologia__modelo">
                            <div class="modelo__titular">
                                <h1>Penthouse</h1>
                            </div>
                            <p>333.04 m2 | 4 recámaras</p>
                            <span class="sold-out">Sold out</span>
                        </div>
                    </div>
                </div>
                <div class="row pt-5">{{-- Garden --}}
                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                        <div class="tipologia__modelo">
                            <div class="modelo__titular">
                                <h1>Garden </h1><span>(01)</span>
                            </div>
                            <small>232.90 m2 | 3 recámaras</small>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <li>Private pool</li>
                                <li>Terrace</li>
                                <li>Living / Dining / Kitchen</li>
                                <li>Guest bathroom</li>
                                <li>Service room with bathroom</li>
                                <li>Master bedroom</li>
                                <li class="li__interior pl-4">Closet, bathroom, interior garden, and jacuzzi</li>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <li>Bedrooms 1 and 2 with closet and bathroom
                                <li>Storage room</li>
                                </li>
                                <li>2 parking spaces
                                </li>
                            </div>
                        </div>
                        <a href="#contacto" class="btn btn-primary mt-3">Hablar con un asesor</a>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                        <img src="{{ asset('img/garden.webp') }}" class="img-fluid" alt="Modelo Garden saama telchac">
                    </div>
                </div>
                <div class="row mt-5">{{-- Palma --}}
                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                        <img src="{{ asset('img/palma.webp') }}" class="img-fluid" alt="Modelo palma saama telchac">
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                        <div class="tipologia__modelo">
                            <div class="modelo__titular">
                                <h1>Palma </h1>
                                <span>(02)</span>
                            </div>
                            <small>213.80 m2 | 3 recámaras</small>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <li>Private pool</li>
                                <li>Terrace</li>
                                <li>Living / Dining / Kitchen</li>
                                <li>Guest bathroom</li>
                                <li>Service room with bathroom</li>
                                <li>Master bedroom
                                <li class="li__interior pl-4">Closet and bathroom</li>
                                </li>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <li>Bedrooms 1 and 2 with closet and bathroom
                                </li>
                                <li>Terrace with lagoon view</li>
                                <li>Storage room</li>
                                <li>2 parking spaces
                                </li>
                            </div>
                        </div>
                        <a href="#contacto" class="btn btn-primary mt-3">Hablar con un asesor</a>
                    </div>
                </div>
                <div class="row mt-5">{{-- Aqua --}}
                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                        <div class="tipologia__modelo">
                            <div class="modelo__titular">
                                <h1>Aqua </h1>
                                <span>(03)</span>
                            </div>
                            <small>178.65 m2 | 3 recámaras</small>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <li>Terrace</li>
                                <li>Living / Dining / Kitchen</li>
                                <li>Service room with bathroom</li>
                                <li>Master bedroom
                                <li class="li__interior pl-4">Closet and bathroom</li>
                                </li>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <li>Bedrooms 1 and 2 with closet, bathroom, and lagoon view
                                </li>
                                <li>Service room with bathroom</li>
                                <li>Storage room</li>
                                <li>2 parking spaces
                                </li>
                            </div>
                        </div>
                        <a href="#contacto" class="btn btn-primary mt-3">Hablar con un asesor</a>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                        <img src="{{ asset('img/aqua.webp') }}" class="img-fluid" alt="Modelo aqua saama telchac">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ubicacion" class="ubicacion">
        <div class="container">
            <div class="ubicacion__titulo text-center">
                <h1>Discover Our Prime Location</h1>
                <p>We are located in the area with the highest value appreciation along the Progreso-Telchac highway, at Kilometer 39;
                    <br>
                    making it easy to visit the state’s most iconic destinations.
                </p>
            </div>
            <div class="ubicacion__mapa">
                <img src="{{ asset('img/mapa.svg') }}" class="img-fluid" alt="mapa de ubicacion Saama Telchac">
            </div>
        </div>
    </section>

    <section id="contacto" class="contacto pb-5">
        <div class="container">
            <div class="contacto__titulo text-center">
                <h1>Welcome to Your New Residence</h1>
                <p>Leave us your information and one of our advisors will contact you with more details.</p>
            </div>
            <div class="contacto__formulario">
                <div class="_form_1"></div>
                <script src="https://geyluk.activehosted.com/f/embed.php?id=1" charset="utf-8"></script>
            </div>
        </div>
    </section>

</x-layouts.app>
