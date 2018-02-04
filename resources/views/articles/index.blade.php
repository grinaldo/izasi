@extends('layouts.master')

@section('page-title')
Izasi | News & Events
@endsection

@section('content')
<section class="small-hero" style="background:url('{{asset('images/header-articles.jpg')}}') no-repeat center;">
    <div class="general-overlay"></div>
    <h2>NEWS & EVENTS</h2>
</section>
<div class="section">
    <div class="container is-fluid">
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
                                    <p class="title is-5">{{ strtoupper($article->name) }}</p>
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            {{ substr($article->description, 0, 140)}} ...
                            <br><br>
                            <a class="small-btn--blue" href="{{route('articles.index').'/'.$article->slug}}"> READ MORE</a>
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
@endsection