@push('scss')
@vite(['resources/scss/index.scss', 'resources/scss/app.scss',   'resources/js/app.js'])

@endpush
<x-layouts.app>

    <header class="cabecera">
        <div class="container">
            <div class="row cabecera__pad">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <h1 class="titular__titulo">Departamentos de alto lujo frente al mar en las costas de Yucatán</h1>
                    <p class="titular__descripcion">Descubre Saama Telchac, un exclusivo desarrollo residencial en las
                        hermosas playas de Yucatán. Diseñado para quienes valoran la privacidad y la tranquilidad, Saama
                        ofrece un entorno de baja densidad con un número limitado de unidades, ideal para disfrutar de
                        una
                        vida extraordinaria en un paraíso frente al mar.</p>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 text-center m-auto">
                    <h1 class="costo">Desde 8.1 mdp</h1>
                </div>
            </div>
        </div>

    </header>

    <section id="comunidad" class="comunidad">
        <div class="container text-center">
            <div class="video">
                <iframe width="100%" height="625" muted="muted" src="https://www.youtube.com/embed/7EU5kyP1do4?si=mAJHmdUBwTx4Ugwy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;  mute clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="comunidad__contenido">
                <p class="pangram pt-4">
                    Saama Telchac es el lugar perfecto, ya sea para vivir o disfrutar de unas vacaciones inolvidables.
                    Situado en una de las playas más exclusivas y seguras de la costa yucateca, este desarrollo te
                    permite
                    experimentar diariamente la serenidad y los privilegios de estar a pasos del mar.
                </p>
            </div>
            <a class="btn btn-primary">Descargar brochure</a>

        </div>
    </section>

    <section id="destacados" class="destacados">
        <div class="container">
            <h1>Pertenece a una comunidad exclusiva</h1>
        </div>
        <div class="container">
            <div class="grid-contenido">
                <div class="web">

                    <div class="web__contenido">
                        <h2 >10 niveles <br>
                            con vista al mar</h2>

                    </div>
                </div>
                <div class="fotografia">

                    <div class="foto__contenido">
                        <h2>departamentos de <br>
                            3 recámaras</h2>

                    </div>
                </div>
                <div class="digital">

                    <div class="digital__contenido">
                        <h2>2 departamentos
                            <br> por nivel
                        </h2>


                    </div>
                </div>
                <div class="impresos">

                    <div class="impresos__contenido">
                        <h2>A 90 metros de <br>
                            la playa</h2>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="amenidades" class="amenidades">
        <div class="container">
            <h1>Interiores que inspiran</h1>
            <p>Cada tipología en Saama Telchac ha sido cuidadosamente diseñada para ofrecer un espacio <br> donde la
                sofisticación se encuentra con la serenidad del entorno natural. Con acabados de alta calidad y una
                distribución <br> que maximiza la entrada de luz natural, nuestros interiores te envuelven en un ambiente de
                confort y elegancia.</p>
        </div>

    </section>
    <x-galeria/>
    <div  class="resumen">
        <div class="container">
            <h1 class="text-center"> Amenidades diseñadas para cultivar tu felicidad</h1>
        </div>
        <div class="resumen__iconos"></div>
    </div>

    <section class="cta">
        <div class="container">
            <div class="cta__contenido">
                <img src="{{asset('/img/logos/isaama-arena.svg')}}" width="40" class="cta__icono pb-3">
                <h1 class="cta__titulo pb-3">Tu oasis frente al mar está esperando</h1>
                <a class="btn btn-primary">Descargar brochure</a>
            </div>
        </div>
    </section>

    <section id="tipologias" class="tipologias">
        <div class="container">
            <div class="tipologias__titular">
                <h1> Conoce nuestra tipologías</h1>
                <p>Nuestros 3 modelos de departamentos fueron creados con características únicas <br> que brindan confort en
                    todo momento</p>
            </div>
            <div class="tipologias__contenido">
                <div class="row pt-5">{{-- penthouse --}}
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <img src="{{asset('img/penthouse.webp')}}" class="img-fluid" alt="">

                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                        <div class="tipologia__modelo">
                            <h1>Penthouse</h1>
                            <p>333.04 m2 | 4 recámaras</p>
                            <span class="sold-out">Sold out</span>
                        </div>
                    </div>
                </div>
                <div class="row pt-5">{{-- Garden --}}
                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                        <div class="tipologia__modelo">
                            <h1>Garden <span>(01)</span></h1>
                            <small>232.90 m2 | 3 recámaras</small>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <li>Cocina</li>
                                <li>Comedor</li>
                                <li>Sala</li>
                                <li>Terraza</li>
                                <li>1/2 baños</li>
                                <li>Recámara principal
                                   <li class="li__interior">Clóset / Baño / terraza con Jacuzzi</li>
                                </li>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <li>Recámara B
                                <li>Clóset / Baño</li>
                                </li>
                                <li>Recámara C
                                <li class="li__interior">Clóset / Baño / Cuarto de servicio con baño completo</li>
                                </li>
                            </div>
                        </div>
                        <a href="/departamento-garden" class="btn btn-primary mt-3">Hablar con un asesor</a>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                        <img src="{{asset('img/garden.webp')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="row mt-5">{{-- Palma --}}
                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                        <img src="{{asset('img/palma.webp')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                        <div class="tipologia__modelo">
                            <h1>Palma <span>(02)</span></h1>
                            <small>213.80 m2 | 3 recámaras</small>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <li>Cocina</li>
                                <li>Comedor</li>
                                <li>Sala</li>
                                <li>Terraza con vista a la laguna</li>
                                <li>Terraza con vista al mar</li>
                                <li>Piscina</li>
                                <li>Recámara principal <br>
                                    <li class="ml-3">Clóset Vestidor / Baño</li>
                                </li>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <li>Recámara B
                                <li class="ml-3">Clóset / Baño</li>
                                </li>
                                <li>Recámara C
                                <li class="ml-3">Clóset / Baño / Cuarto de servicio con baño completo</li>
                                </li>
                            </div>
                        </div>
                        <a href="/departamento-palma" class="btn btn-primary mt-3">Hablar con un asesor</a>
                    </div>
                </div>
                <div class="row mt-5">{{-- Aqua --}}
                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                        <div class="tipologia__modelo">
                            <h1>Aqua <span>(03)</span></h1>
                            <small>178.65 m2 | 3 recámaras</small>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <li>Cocina</li>
                                <li>Comedor</li>
                                <li>Sala</li>
                                <li>Recámara principal <br>
                                   <li class="ml-3">Clóset Vestidor / Baño</li>
                                </li>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <li>Recámara B
                                <li class="ml-3">Clóset / Baño</li>
                                </li>
                                <li>Recámara C
                                <li class="ml-3">Clóset / Baño / Cuarto de servicio con baño completo</li>
                                </li>
                            </div>
                        </div>
                        <a href="/departamento-aqua" class="btn btn-primary mt-3">Hablar con un asesor</a>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                        <img src="{{asset('img/aqua.webp')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ubicacion" class="ubicacion">
        <div class="container">
            <div class="ubicacion__titulo text-center">
                <h1>Conoce nuestra ubicación privilegiada</h1>
                <p >Estamos ubicados en la zona con mayor plusvalía sobre carretera Progreso-Telchac, en el Kilómetro 39; <br>
                    lo cual facilita el traslado para visitar lugares emblemáticos del estado.</p>
            </div>
            <div class="ubicacion__mapa">
                <img src="{{asset('img/mapa.svg')}}" class="img-fluid" alt="mapa de ubicacion Saama Telchac">
            </div>
        </div>
    </section>

    <section id="contacto" class="contacto">
        <div class="container">
            <div class="contacto__titulo text-center">
                <h1>Bienvenido a tu nueva residencia</h1>
                <p>Déjanos tus datos y uno de nuestros asesores se comunicará contigo con más información.</p>
            </div>
            <div class="contacto__formulario">

            </div>
        </div>
    </section>

</x-layouts.app>
