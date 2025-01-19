<div class="pricing-box service-box border border-color-extra-light-gray">
    <div style="padding: 20px 0">
        <!-- start pricing title -->
        <div class="pricing-title text-center">
            <i class="{{ $icon }} icon-large text-deep-pink d-inline-block padding-30px-all bg-white box-shadow-light rounded-circle"
                style="background-color: {{ $bgcolor }} !important; color:white; border:5px solid #fbfbfbad"></i>
        </div>
        <!-- end pricing price -->
    </div>
    <!-- start pricing features -->
    <div class="padding-45px-all pricing-features md-padding-20px-all sm-padding-30px-all">

        <div class="pricing-price">
            <h4 class="text-extra-dark-gray alt-font font-weight-600 mb-2">{{ $titulo }}</h4>
        </div>

        @if($texto != '')
        <ul class="list-style-11">
            <li>{{ $texto }}</li>
        </ul>
        @endif

        @if (isset($lista) && $lista)
            {!! $lista !!}
        @endif

    </div>
    <!-- end pricing features -->
</div>
