@extends('layouts.master-home')

@section('page-title')
Izasi | Indonesia Zinc-Alumunium Steel Industries
@endsection

@section('content')
<div class="home_logo__container">
    <a href="/">
        <img src="{{asset('images/logo.png')}}" alt="izasi-logo" class="home_logo__image">
    </a>
</div>
<section class="home_hero__slider" style="height: 100vh !important; width:100vw !important;">
    @foreach($banners as $banner)
    <div style="background:url('{{asset($banner->image)}}') no-repeat center; height: 100vh !important; width:100% !important; background-size:cover !important; position: relative;">
        <div class="home_hero__slider-overlay"></div>
        <div class="home_hero__slider-text">
            <h2 class ="home_hero__slider-heading">
                {{$banner->name}}
            </h2>
            <p class="home_hero__slider-description">
                {{$banner->description}}
            </p>
        </div>
    </div>
    @endforeach
</section>
<section class="home_menu">
    <ul>
        <li><a href="{{route('about')}}">ABOUT US</a></li>
        <li><a href="{{route('articles.index')}}">NEWS & EVENT</a></li>
        <li><a href="{{route('members.index')}}">MEMBERS</a></li>
        <li><a href="{{route('contacts.index')}}">CONTACT</a></li>
    </ul>
</section>
<section class="home_footer" style="position: fixed; color: white; z-index: 9999;">
    <small>
        Copyright © 2018 Izasi all rights reserved
    </small>
</section>
@endsection

@section('page-script')
@endsection