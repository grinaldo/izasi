@extends('layouts.master')

@section('page-title')
Izasi | About Us
@endsection

@section('content')
<section class="small-hero" style="background:url('{{asset('images/header-about.jpg')}}') no-repeat center;">
    <div class="general-overlay"></div>
    <h2>ABOUT IZASI</h2>
</section>
<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-two-thirds">
                @if(!empty($milestoneImage))
                <img src="{{ asset($milestoneImage->image) }}" alt="milestone-image" width="100%">
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
                @if(!empty($about->description))
                <p class="justified">{{$about->description}}</p>
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
        <div class="columns strategic-mobile">
            @if(!empty($strategicImage))
            <img class="centerized" src="{{asset($strategicImage->image)}}" alt="">
            @endif
        </div>
    </section>
</div>

<div class="strategic-mobile">
    <div class="columns strategic-desc">
        <section class="small-hero" style="background:url('{{asset('images/house-top.png')}}') no-repeat center;">
            <div class="general-overlay"></div>
            <h2>OUR VISION</h2>
        </section>
    </div>
    <div class="section">
        <div class="container">
            @foreach($visions as $vision)
            <p>{{$vision->description}}</p>
            @endforeach
        </div>
    </div>
    <section class="small-hero" style="background:url('{{asset('images/house-bot.png')}}') no-repeat center;">
        <div class="general-overlay"></div>
        <h2>OUR INITIATIVES</h2>
    </section>
    <div class="section">
        <div class="container">
            <ul class="initiatives-list">
                @foreach($initiatives as $initiative)
                <li class="centerized">
                    <img src="{{asset(!empty($initiative->image) ? $initiative->image : 'images/about-icon-education.png')}}" alt="">
                    <h4>{{$initiative->name}}</h4>
                    <p>{{$initiative->description}}</p>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <section class="small-hero" style="background:url('{{asset('images/house-foundation.png')}}') no-repeat center;">
        <div class="general-overlay"></div>
        <h2>OUR STRATEGIC</h2>
    </section>
    <div class="section">
        <div class="container">
            <ul class="">
                @foreach($missions as $mission)
                <li class="centerized">
                    <p>{{$mission->description}}</p>
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
@endsection