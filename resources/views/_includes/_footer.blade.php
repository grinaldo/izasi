<footer class="site-footer">
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
</footer>