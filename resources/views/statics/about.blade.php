@extends('layouts.master')

@section('page-title')
@if(\Session::get('locale') == 'en_US')
Izasi | About Us
@else
Izasi | Tentang Kami
@endif
@endsection

@section('content')
<section class="small-hero" style="background:url('{{asset('images/header-about.jpg')}}') no-repeat; background-size: auto !important;">
    <div class="general-overlay"></div>
    @if(\Session::get('locale') == 'en_US')
    <h2>ABOUT IZASI</h2>
    @else
    <h2>TENTANG IZASI</h2>
    @endif
</section>
<section data-0="background-position:0px 0px;" data-100000="background-position:0px -50000px;">
    <div id="skrollr-body">
        <div id="center">
            <h1>Parallax background</h1>
            <p>Demo of background scrolling at constant speed independent of content height.</p>
            <p><a href="bg_constant_speed_less.html">less content</a> - more content</p>
            <hr />
        </div>
</section>
<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-two-thirds">
                @if(\Session::get('locale') == 'en_US' && !empty($milestoneImage))
                <img src="{{ asset($milestoneImage->image) }}" alt="milestone-image" width="100%">
                @elseif(\Session::get('locale') == 'id_ID' && !empty($milestoneImage->image_ina))
                <img src="{{ asset($milestoneImage->image_ina) }}" alt="milestone-image" width="100%">
                @endif
            </div>
            <div class="column is-one-thirds">
                <ul class="about-company__container">
                    @foreach($companies as $key => $company)
                    @if(!empty($company->image))
                    <li>
                        @if ($key == 0)
                        <div class="circle circle--blue"></div>
                        @elseif($key == 1)
                        <div class="circle circle--green"></div>
                        @else
                        <div class="circle circle--yellow"></div>
                        @endif
                        <img src="{{ asset($company->image) }}" alt="{{$company->name}}">
                    </li>
                    @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container container--mid-container">
        <div class="row">
            <div class="col s12 m12">
                @if(!empty($about->description) && \Session::get('locale') == 'en_US')
                <p class="justified">{!! $about->description !!}</p>
                @elseif(!empty($about->description_ina) && \Session::get('locale') == 'id_ID')
                <p class="justified">{!! $about->description_ina !!}</p>
                @endif
            </div>
        </div>
    </div>
</section>
<div class="mobile-hide">
    <section class="small-hero" style="background:url('{{asset('images/banner-2.jpg')}}') no-repeat center;">
        <div class="general-overlay"></div>
        <h2>PILLARS OF IZASI</h2>
    </section>
    <section class="section bg-light-grey">
        <div class="columns blocky">
            @if(!empty($strategicImage) && \Session::get('locale') == 'en_US')
            <img class="centerized" src="{{asset($strategicImage->image)}}" alt="">
            @else
            <img class="centerized" src="{{asset($strategicImage->image_ina)}}" alt="">
            @endif
        </div>
    </section>
</div>

<div class="strategic-mobile">
    <div class="columns strategic-desc">
        <section class="small-hero" style="background:url('{{asset('images/house-top.png')}}') no-repeat center; background-size: 36em 12em !important;">
            <div class="general-overlay"></div>
            @if(\Session::get('locale') == 'en_US')
            <h2>OUR VISION</h2>
            @else
            <h2>VISI KAMI</h2>
            @endif
        </section>
    </div>
    <div class="section">
        <div class="container">
            @foreach($visions as $vision)
            @if(\Session::get('locale') == 'en_US')
            <p>{!! $vision->description !!}</p>
            @else
            <p>{!! $vision->description_ina !!}</p>
            @endif
            @endforeach
        </div>
    </div>
    <section class="small-hero" style="background:url('{{asset('images/house-bot.png')}}') no-repeat center; background-size: 36em 12em !important;">
        <div class="general-overlay"></div>
        @if(\Session::get('locale') == 'en_US')
        <h2>OUR INITIATIVES</h2>
        @else
        <h2>INISIATIF KAMI</h2>
        @endif
    </section>
    <div class="section">
        <div class="container">
            <ul class="initiatives-list">
                @foreach($initiatives as $initiative)
                <li class="centerized">
                    <img src="{{asset(!empty($initiative->image) ? $initiative->image : 'images/about-icon-education.png')}}" alt="">
                    @if(\Session::get('locale') == 'en_US')
                    <h4>{{$initiative->name}}</h4>
                    <p>{!! $initiative->description !!}</p>
                    @else
                    <h4>{{$initiative->name_ina}}</h4>
                    <p>{!! $initiative->description_ina !!}</p>
                    @endif
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <section class="small-hero" style="background:url('{{asset('images/house-foundation.png')}}') no-repeat center; background-size: 36em 12em !important;">
        <div class="general-overlay"></div>
        @if(\Session::get('locale') == 'en_US')
        <h2>OUR STRATEGIC</h2>
        @else
        <h2>STRATEGI KAMI</h2>
        @endif
    </section>
    <div class="section">
        <div class="container">
            <ul class="">
                @foreach($missions as $mission)
                <li class="centerized">
                    @if(\Session::get('locale') == 'en_US')
                    <p>{!!$mission->description!!}</p>
                    @else
                    <p>{!!$mission->description_ina!!}</p>
                    @endif
                    <br>
                    <div class="divider" style=""></div>
                    <br>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
    
@endsection

@section('page-script')
<script type="text/javascript" src="{{asset('js/skrollr.min.js')}}"></script>
@endsection