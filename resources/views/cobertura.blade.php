@extends('layouts.index')

@section('content')
    <x-banner-page url="assets/images/cobertura/banner.webp" nameSection="Cobertura" />

    <section class="wow animate__fadeI mision-vision cobranza-servicios">
        <div class="container">

            <div class="row">
                <div class="col-12 text-center margin-100px-bottom md-margin-70px-bottom sm-margin-50px-bottom">
                    <div class="alt-font margin-5px-bottom text-uppercase text-small text-light-blue">Cobertura</div>
                    <h5 class="text-uppercase alt-font text-extra-dark-gray margin-20px-bottom font-weight-700 md-w-100">
                        Nuestra Cobertura</h5>
                    <span class="separator-line-horrizontal-medium-light2 bg-light-blue d-table mx-auto w-100px"></span>
                </div>
            </div>

            <!-- CONTENIDO -->
            <div class="row row-cols-1 row-cols-md-2">

                <div class="col text-left sm-margin-30px-bottom">
                        <p>
                            Ubicados en Ciudad de México en Carr. Picacho-Ajusco 130 Despacho. Jardines en la Montaña, Tlalpan, 13210 Ciudad de México, CDMX. Desde este lugar se trabaja todas nuestras carteras de forma extrajudicial y se maneja toda la logística de nuestras corresponsales.
                        </p>
                        <p>
                            Tenemos corresponsales que nos ayudan en temas judiciales y visitas de la cartera en: Querétaro, Puebla, Tlaxcala, Hidalgo, Toluca, Morelos, Quintana Roo, Campeche, Yucatán y Veracruz.
                        </p>

                        <p>
                            <b>
                                La cobertura se adapta a las necesidades de nuestros clientes ofreciendo soluciones personalizadas para cada situación
                            </b>
                        </p>
                </div>

                <div class="col fit-videos text-center sm-margin-30px-bottom">
                    <iframe width="560" height="315" src="{{asset('assets/videos/cobertura.mp4')}}"
                        allowfullscreen load="lazy" style="border-radius: 20px"></iframe>
                </div>
            </div>


        </div>
    </section>
@endsection
