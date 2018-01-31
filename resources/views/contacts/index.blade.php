@extends('layouts.master')

@section('page-title')
Izasi | Contact Form
@endsection

@section('content')
<div class="bg-light-grey mgb-min-2-step">
    
    <section class="small-hero" style="background:url('{{asset('images/header-contact2.jpg')}}') no-repeat center;">
        <div class="general-overlay"></div>
        <h2>CONTACT</h2>
    </section>

    <section class="section container">
        <div class="columns">
            <div class="column is-one-third-desktop is-full-mobile">
                <form class="site-form" role="form" method="POST" action="{{ route('contacts.store') }}">
                    <h3>Contact Us Now</h3>
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <input id="name" type="text" class="form-control form-site-input" name="name" value="{{ old('name') }}" placeholder="Your Name" required autofocus>

                        @if ($errors->has('name'))
                        <span class="help-block">
                            <strong class="warning-text">{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email" class="form-control form-site-input" name="email" value="{{ old('email') }}" autofocus>

                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong class="warning-text">{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                        <input id="phone" type="text" class="form-control form-site-input" name="phone" value="{{ old('phone') }}" required autofocus>

                        @if ($errors->has('phone'))
                        <span class="help-block">
                            <strong class="warning-text">{{ $errors->first('phone') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                        <textarea id="content" class="form-control form-site-input materialize-textarea" name="content" value="{{ old('content') }}" required autofocus></textarea>

                        @if ($errors->has('content'))
                        <span class="help-block">
                            <strong class="warning-text">{{ $errors->first('content') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn-uniform" onclick="">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="column is-two-thirds-desktop is-full-mobile">
                
            </div>
        </div>
    </section>
</div>

@endsection

@section('page-script')
@endsection