<section id="contacto" class="wow animate__fadeIn p-0 bg-extra-dark-gray">
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-lg-2">
            <div class="col cover-background md-h-450px sm-h-350px wow animate__fadeIn"
                style="background: url({{asset('assets/images/pexels-snapwire-618613.webp')}})"></div>
            <div
                class="bg-gradient-blue col text-center padding-six-lr padding-five-half-tb lg-padding-four-lr md-padding-ten-half-tb md-padding-twelve-half-lr sm-padding-15px-lr wow animate__fadeIn">
                <div class="text-white alt-font text-small text-uppercase margin-5px-bottom sm-margin-three-bottom">
                   Tenemos un equipo dispuesto para atenderte
                </div>
                <h5 class="margin-55px-bottom text-white-2 alt-font font-weight-700 text-uppercase sm-margin-ten-bottom">
                    ¿Listo Para Agendar Una Cita?
                </h5>
                <form id="" action="{{route('formularioEmpresa')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-results d-none"></div>
                        </div>
                        <div class="col-md-6">
                                <input type="text" name="name" id="name" placeholder="Nombre*" class="border-radius-4 bg-white medium-input required">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="phone" id="phone" placeholder="Teléfono*" class="border-radius-4 bg-white medium-input required">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="mail" id="mail" placeholder="@gmail.com*" class="border-radius-4 bg-white medium-input required">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="subject" id="subject" placeholder="Motivo*" class="border-radius-4 bg-white medium-input required">
                        </div>
                        <div class="col-12">
                            <textarea name="comment" id="comment" placeholder="Comentarios Adicionales" rows="7"
                                class="border-radius-4 bg-white medium-input required"></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-small border-radius-4 btn-dark-gray submit">send message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="p-0 one-second-screen md-h-400px sm-h-300px wow animate__fadeIn">
    <iframe class="w-100 h-100"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.605103163496!2d-99.21375721511588!3d19.29953179839696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cdffc88427fd81%3A0xf634ba14d88e5a3a!2sCarr.%20Picacho-Ajusco%20130-Piso%203%2C%20Jardines%20en%20la%20Monta%C3%B1a%2C%20Tlalpan%2C%2014210%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1732312633958!5m2!1ses-419!2smx"></iframe>
</section>
