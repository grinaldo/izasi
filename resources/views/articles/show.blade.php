@extends('layouts.master')

@section('page-title')
@if(\Session::get('locale') == 'en_US')
Izasi | News & Events - {{$article->name}}
@else
Izasi | Berita & Kegiatan - {{$article->name_ina}}
@endif
@endsection

@section('content')
<div class="section">
    <div class="container is-fluid">
        <div class="columns">
            <div class="column is-three-quarters-desktop is-full-mobile">
                @if(!empty($article->image))
                <img src="{{ asset($article->image) }}" alt="">
                @endif
                @if(\Session::get('locale') == 'en_US')
                <h1 class="article-title">{{ strtoupper($article->name) }}</h1>
                @else
                <h1 class="article-title">{{ strtoupper($article->name_ina) }}</h1>
                @endif
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
                    @if(\Session::get('locale') == 'en_US')
                    Updated: {{ $updateTime->format('d M Y') }} | Written By: {{ $article->writer }}
                    @else
                    Diperbarui: {{ $updateTime->format('d M Y') }} | Ditulis oleh: {{ $article->writer }}
                    @endif
                </div>
                <div class="article-content">
                    @if(\Session::get('locale') == 'en_US')
                    {!! $article->description !!}
                    @else
                    {!! $article->description_ina !!}
                    @endif
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
                                    @if(\Session::get('locale') == 'en_US')
                                    <p class="title is-5">{{ strtoupper($article->name) }}</p>
                                    @else
                                    <p class="title is-5">{{ strtoupper($article->name_ina) }}</p>
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
                @endforeach
            </div>
        </div>
    </div>
</div>
    
@endsection

@section('page-script')
@endsection