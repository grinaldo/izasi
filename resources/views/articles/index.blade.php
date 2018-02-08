@extends('layouts.master')

@section('page-title')
@if(\Session::get('locale') == 'en_US')
Izasi | News & Events
@else
Izasi | Berita & Kegiatan
@endif
@endsection

@section('content')
{{-- <section class="small-hero" style="background:url('{{asset('images/header-articles.jpg')}}') no-repeat center;">
    <div class="general-overlay"></div>
    @if(\Session::get('locale') == 'en_US')
    <h2>NEWS & EVENTS</h2>
    @else
    <h2>BERITA</h2>
    @endif
</section> --}}
<section class="small-hero-rellax">
    <div class="general-overlay"></div>
    <img src="{{ asset('images/header-articles.jpg') }}" alt="" data-rellax-speed="2">
    @if(\Session::get('locale') == 'en_US')
    <h2 class="rellax-title-dedicate" data-rellax-speed="-10">NEWS & EVENTS</h2>
    @else
    <h2 class="rellax-title-dedicate" data-rellax-speed="-10">BERITA</h2>
    @endif
</section>
<div class="section">
    <div class="container is-fluid">
        <div class="columns">
            <div class="column is-full has-text-right">
                <select class="sorter classic" name="sortby" id="" onchange="javascript:location.href = this.value;">
                    @if(\Session::get('locale') == 'en_US')
                    <option value="/">-- Sort By --</option>
                    <option value="?sortby=desc">Newest</option>
                    <option value="?sortby=asc">Oldest</option>
                    @else
                    <option value="/">-- Urutkan --</option>
                    <option value="?sortby=desc">Terbaru</option>
                    <option value="?sortby=asc">Terlama</option>
                    @endif
                </select>
            </div>
        </div>
        <div class="columns article-container">
            @foreach($articles as $article)
            <div class="column is-one-third-desktop is-full-mobile">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <a href="{{route('articles.index').'/'.$article->slug}}">
                                <img src="{{asset(!empty($article->image)?$article->image:asset('images/banner-1.jpg'))}}" alt="Placeholder image">
                            </a>
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content">
                                <a href="{{route('articles.index').'/'.$article->slug}}">
                                    @if(\Session::get('locale') == 'en_US')
                                    <p class="article-title is-5">{{ strtoupper($article->name) }}</p>
                                    @else
                                    <p class="article-title is-5">{{ strtoupper($article->name_ina) }}</p>
                                    @endif
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            @if(\Session::get('locale') == 'en_US')
                            {{ substr($article->description, 0, 140)}} ...
                            @else
                            {{ substr($article->description_ina, 0, 140)}} ...
                            @endif
                            <br><br>
                            @if(\Session::get('locale') == 'en_US')
                            <a class="small-btn--blue" href="{{route('articles.index').'/'.$article->slug}}"> READ MORE</a>
                            @else
                            <a class="small-btn--blue" href="{{route('articles.index').'/'.$article->slug}}"> BACA</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="columns">
            <center class="pagination centerized">
                {{ $articles->render() }}
            </center>
        </div>
    </div>
</div>
    
@endsection

@section('page-script')
<script src="{{asset('js/rellax.min.js')}}"></script>
<script>
var rellax = new Rellax('.small-hero-rellax img');
var rellax = new Rellax('.rellax-title-dedicate');
</script>
@endsection