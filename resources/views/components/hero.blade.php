<section class="p-0 wow animate__fadeIn">
    <div class="swiper full-screen black-move sm-h-500px md-landscape-h-580px" data-slider-options='{ "loop": true, "slidesPerView": "1", "allowTouchMove":true, "autoplay": { "delay": 5000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "pagination": { "el": ".swiper-pagination", "clickable": true } }'>
        <div class="swiper-wrapper">
            <div class="swiper-slide cover-background position-relative">
                <video class="video-background" autoplay loop muted playsinline webkit-playsinline style="width:100%; object-fit:cover;">
                    <source src="{{ asset('assets/videos/banner.mp4') }}" type="video/mp4">
                    Tu navegador no soporta la reproducción de video.
                </video>
            </div>
        </div>

        <div class="swiper-pagination"></div>
    </div>
</section>