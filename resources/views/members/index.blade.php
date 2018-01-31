@extends('layouts.master')

@section('page-title')
Izasi | Members
@endsection

@section('content')
<section class="small-hero" style="background:url('{{asset('images/header-members.jpg')}}') no-repeat center;">
    <div class="general-overlay"></div>
    <h2>OUR MEMBERS</h2>
</section>
<div class="section">
    <div class="container is-fluid">
        <div class="columns members-desktop">
            <img src="{{asset(!empty($memberimage->image) ? $memberImage->image : 'images/boards.png')}}" alt="">
        </div>
        <div class="columns members-mobile">
            <h2>OUR MEMBERS</h2>
            @foreach($members as $member)
            <div class="card is-full-mobile">
                <div class="card-image">
                    <figure class="image is-4by3">
                        <img src="{{asset(!empty($member->image)?$member->image:asset('images/banner-1.jpg'))}}" alt="Placeholder image">
                    </figure>
                </div>
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
                    <h3>{{$company->name}}</h3>
                    <a href="{{$company->link}}" class="small-btn--blue">VISIT WEBSITE</a>
                </div>
                <div>
                    <p>{{$company->description}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
    
@endsection

@section('page-script')
@endsection