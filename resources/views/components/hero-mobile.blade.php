<section class="p-0 wow animate__fadeIn" id="hero-mobile">
    <div class="swiper full-screen black-move sm-h-500px md-landscape-h-580px" data-slider-options='{ "loop": true, "slidesPerView": "1", "allowTouchMove":true, "autoplay": { "delay": 5000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "pagination": { "el": ".swiper-pagination", "clickable": true } }'>
        <div class="swiper-wrapper">
            <!-- start slider item -->
            <div class="swiper-slide cover-background" style="background-image:url({{asset('assets/images/slider/slider-01.webp')}});">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 d-flex justify-content-center flex-column text-center text-md-start">
                            <h1 class="wow animate__bounceInLeft alt-font text-white font-weight-700 letter-spacing-minus-1 line-height-80 w-55 margin-35px-bottom lg-w-60 md-w-70 lg-line-height-auto sm-w-100 sm-margin-15px-bottom">Cobranza ágil, efectiva y confiable</h1>
                            <p class="wow animate__bounceInLeft text-white text-large margin-four-bottom w-40 lg-w-50 md-w-60 sm-w-100 sm-margin-15px-bottom">Recuperamos tus cuentas con rapidez, ética y precisión, brindándote soluciones cuidadosamente diseñadas.</p>
                            <div class="btn-dual wow animate__bounceInUp"> 
                                <a href="{{route('contacto')}}" target="_blank" class="btn btn-light-blue btn-rounded btn-small no-margin-lr">Contáctanos</a>
                                <a href="{{route('nosotros')}}" target="_blank" class="btn btn-transparent-light-blue btn-rounded btn-small margin-20px-lr sm-margin-5px-top">Cónocenos</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-pagination"></div>
    </div>
</section>