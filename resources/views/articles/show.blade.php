@extends('layouts.master')

@section('page-title')
Izasi | News & Events - {{$article->name}}
@endsection

@section('content')
<div class="section">
    <div class="container is-fluid">
        <div class="columns">
            <div class="column is-three-quarters-desktop is-full-mobile">
                @if(!empty($article->image))
                <img src="{{ asset($article->image) }}" alt="">
                @endif
                <h1 class="article-title">{{ strtoupper($article->name) }}</h1>
                <div class="article-share">
                    <ul>
                        <li><a href="https://www.facebook.com/sharer/sharer.php?u={{url('/articles/'.$article->slug)}}"><img src="{{asset('images/icon-c-facebook.png')}}" alt=""></a></li>
                        <li><a href="https://twitter.com/home?status={{url(urlencode($article->name))}}"><img src="{{asset('images/icon-c-twitter.png')}}" alt=""></a></li>
                        <li><a href="https://plus.google.com/share?url={{url('/articles/'.$article->slug)}}"><img src="{{asset('images/icon-c-gplus.png')}}" alt=""></a></li>
                        <li><a href="whatsapp://send?text={{url('/articles/'.$article->slug)}}"><img src="{{asset('images/icon-c-wa.png')}}" alt=""></a></li>
                        <li><a href="https://lineit.line.me/share/ui?url={{url('/articles/'.$article->slug)}}"><img src="{{asset('images/icon-c-line.png')}}" alt=""></a></li>
                    </ul>
                </div>
                <div class="article-info">
                    Updated: {{ $updateTime->format('d M Y') }} | Written By: {{ $article->writer }}
                </div>
                <div class="article-content">
                    {!! $article->description !!}
                </div>
            </div>
            <div class="column is-one-quarter-desktop is-full-mobile bg-grey">
                @foreach($others as $article)
                <div class="card article-others bg-white">
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
                @endforeach
            </div>
        </div>
    </div>
</div>
    
@endsection

@section('page-script')
@endsection