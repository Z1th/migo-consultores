<div class="col-sm-8 team-block text-start feature-box-15 md-margin-40px-bottom margin-20px-bottom last-paragraph-no-margin wow animate__fadeInUp" data-wow-delay="0.2s">
    <figure>
        <div class="feature-box-content sm-w-100">
            <div class="feature-box-image" style="display: flex; justify-content:center;"><img src="{{asset($imageRoute)}}" alt="" style="object-fit: contain; height:200px"></div>
            <div class="hover-content bg-light-blue d-flex justify-content-center align-items-center">
                <div class="padding-twelve-lr">
                    <span class="text-white-2 d-inline-block text-center">{{$description}}</span>
                </div>
            </div> 
        </div>
        <figcaption>
            <div class="text-center margin-25px-top">
                <div class="text-extra-dark-gray alt-font font-weight-600">{{ $nameClient}}</div> 
                <p>{{ $shortText }}</p>
            </div>   
        </figcaption>
    </figure>
</div>