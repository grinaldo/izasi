<footer class="site-footer">
    <div class="company-contacts">
        <ul>
            <li><img src="{{asset('images/icon-mail.png')}}" alt="">{{ $companyEmail->short_description }}</li>
            <li><img src="{{asset('images/icon-phone.png')}}" alt="">{{ $companyPhone->short_description }}</li>
            <li><img src="{{asset('images/icon-fax.png')}}" alt="">{{ $companyFax->short_description }}</li>
        </ul>
    </div>
    <div class="address">
        {!! $companyAddress->description !!}
    </div>
    <div class="footer_socmed-container">
        <ul>
            @if(count($socialMedia) && !empty($socialMedia))
            @foreach($socialMedia as $sm)
            <li><a href="{{url($sm->url)}}"><img src="{{asset(!empty($sm->image)?$sm->image:'images/icon-fb')}}" alt=""></a></li>
            @endforeach
            @endif
        </ul>
    </div>
    <div>
        <small>
            Copyright © 2018 Izasi all rights reserved
        </small>
    </div>
</footer>