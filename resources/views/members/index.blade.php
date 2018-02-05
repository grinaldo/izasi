@extends('layouts.master')

@section('page-title')
@if(\Session::get('locale') == 'en_US')
Izasi | Members
@else
Izasi | Keanggotaan
@endif
@endsection

@section('content')
<section class="small-hero" style="background:url('{{asset('images/header-members.jpg')}}') no-repeat center;">
    <div class="general-overlay"></div>
    @if(\Session::get('locale') == 'en_US')
    <h2>OUR MEMBERS</h2>
    @else
    <h2>KEANGGOTAAN KAMI</h2>
    @endif
</section>
<div class="section">
    <div class="container is-fluid">
        <div class="columns members-desktop">
            <img class="centerized pad-2-step" src="{{asset(!empty($membersImage->image) ? $membersImage->image : 'images/boards.png')}}" alt="">
        </div>
        <div class="columns members-mobile">
            @if(\Session::get('locale') == 'en_US')
            <h2>OUR MEMBERS</h2>
            @else
            <h2>KEANGGOTAAN KAMI</h2>
            @endif
            
            @foreach($members as $member)
            <div class="card is-full-mobile">
                @if(!empty($member->image))
                <div class="card-image">
                    <figure class="image is-4by3">
                        <img src="{{asset(!empty($member->image)?$member->image:asset('images/banner-1.jpg'))}}" alt="Placeholder image">
                    </figure>
                </div>
                @endif
                <div class="card-content">
                    <div class="media">
                        <div class="media-content">
                            <p class="title is-5">{{ strtoupper($member->name) }}</p>
                        </div>
                    </div>
                    <div class="content">
                        {{ substr($member->title, 0, 140)}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="section">
    <div class="container is-fluid">
        @foreach($companies as $company)
        <div class="columns companies_container">
            <div class="column companies_image is-one-fifth-desktop is-one-full-mobile">
                <img src="{{asset(!empty($company->image) ? $company->image : 'images/banner-1.png')}}" alt="">
            </div>    
            <div class="column companies_description is-four-fifths-desktop is-one-full-mobile">
                <div class="companies_description_title_container">
                    <div class="companies_description-title centerized">
                        <h3>{{$company->name}}</h3>
                    </div>
                    <div class="companies_description-link centerized">
                        @if(\Session::get('locale') == 'en_US')
                        <a href="{{url($company->link)}}" class="small-btn--blue">VISIT WEBSITE</a>
                        @else
                        <a href="{{url($company->link)}}" class="small-btn--blue">KUNJUNGI SITUS</a>
                        @endif
                    </div>
                </div>
                <div class="justified">
                    @if(\Session::get('locale') == 'en_US')
                    <p>{!!$company->description!!}</p>
                    @else
                    <p>{!!$company->description_ina!!}</p>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
    
@endsection

@section('page-script')
@endsection