@extends('layouts.index')

@section('content')
    <x-hero />
    <x-supplementary-info />
    <x-about-us-resume />

    <section class="wow animate__fadeIn benefits-home">
        <div class="container">
            <div class="row align-items-center"> 
                <div class="col-lg-5 md-margin-50px-bottom">
                    <h5 class="alt-font text-extra-dark-gray font-weight-600">Ventajas de trabajar con nuestro despacho de cobranza</h5>
                    <ul class="p-0 list-style-4">
                        <li><b>Procesos ágiles y efectivos:</b> Recuperamos tus deudas en el menor tiempo posible.</li>
                        <li><b>Atención personalizada:</b> Soluciones adaptadas a las necesidades de tu negocio.</li>
                        <li><b>Gestión ética y profesional:</b> Preservamos tus relaciones comerciales mientras recuperamos tu inversión.</li>
                        <li><b>Informes claros y transparentes:</b> Mantente al tanto del progreso en cada caso.</li>
                        <li><b>Cobertura nacional:</b> Servicios disponibles en cualquier parte del país.</li>
                        <li><b>Asesoría legal especializada:</b> Contamos con expertos en derecho financiero y comercial.</li>
                    </ul>
                    
                    <a href="{{route('nuestros-clientes')}}" class="btn btn-light-blue btn-rounded btn-small no-margin-lr margin-30px-top">Descubre nuestros clientes</a>
                </div>
                <div class="col-lg-7 text-center">
                    <img src="{{asset('assets/images/pexels-shkrabaanthony-5292227.webp')}}" alt="" class="w-100">
                </div> 
            </div>
        </div>
    </section>


@endsection
