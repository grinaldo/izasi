@extends('layouts.master')

@section('page-title')
Izasi | Contact Form
@endsection

@section('content')
<div class="bg-light-grey mgb-min-2-step">
    
    <section class="small-hero" style="background:url('{{asset('images/header-contact.jpg')}}') no-repeat center;">
        <div class="general-overlay"></div>
        <h2>CONTACT</h2>
    </section>

    <section class="section container">
        <div class="columns">
            <div class="column is-half-desktop is-full-mobile">
                <form class="site-form" role="form" method="POST" action="{{ route('contacts.store') }}">
                    <h3>Contact Us Now</h3>
                    {{ csrf_field() }}
                    <div class="centerized form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <input id="name" type="text" class="form-control form-site-input" name="name" value="{{ old('name') }}" placeholder="Your Name" required autofocus>

                        @if ($errors->has('name'))
                        <span class="help-block">
                            <strong class="warning-text">{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="centerized form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email" class="form-control form-site-input" name="email" value="{{ old('email') }}"  placeholder="Your Email" autofocus>

                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong class="warning-text">{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="centerized form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                        <input id="phone" type="text" class="form-control form-site-input" name="phone" value="{{ old('phone') }}"  placeholder="Your Phone" required autofocus>

                        @if ($errors->has('phone'))
                        <span class="help-block">
                            <strong class="warning-text">{{ $errors->first('phone') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="centerized form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                        <textarea id="content" class="form-control form-site-input materialize-textarea" name="content" value="{{ old('content') }}"  placeholder="Message" required autofocus></textarea>

                        @if ($errors->has('content'))
                        <span class="help-block">
                            <strong class="warning-text">{{ $errors->first('content') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="g-recaptcha" data-sitekey="6LcMD0QUAAAAAANMrafoU4WKO9CioqELPcwRSybb"></div>
                    <br><br>
                    <div class="form-group centerized">
                        <button type="submit" class="circle-button" onclick="">
                            SUBMIT
                        </button>
                    </div>
                </form>
            </div>
            <div class="column is-half-desktop is-full-mobile">
                <div class="geocode" data-geo="{{$geocode->description}}"></div>
                <div id ="g-map"></div>
            </div>
        </div>
    </section>
</div>

@endsection

@section('page-script')
<script>
function initGMap() {
    var getGeocode = $('.geocode').data('geo').split(',');
    var coord = {lat: -6.217279, lng:106.813875};
    var map = new google.maps.Map(document.getElementById('g-map'), {
        zoom: 18,
        center: coord
    });
    var marker = new google.maps.Marker({
        position: coord,
        map: map
    });
    $('#g-map').height($('.site-form').outerHeight());
}
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_KEY')}}&callback=initGMap">
</script>
<script src='https://www.google.com/recaptcha/api.js'></script>
@endsection