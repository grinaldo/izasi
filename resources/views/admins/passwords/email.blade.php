@extends('admins._layouts.login')

@section('page-title')
<h3>Password Reset</h3>
@endsection

@section('content')
<div class="login_wrapper">
    <div class="animate form login_form">
        <section class="login_content">
            <form role="form" method="POST" action="{{ route('backend.password.email') }}">
                <div class="">
                    <img src="{{asset('images/logo.png')}}" width="100" alt="">
                </div>
                <br>
                <h1>Password Reset</h1>
                {{ csrf_field() }}
                <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                    {!! Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'email' , 'required']) !!}
                </div>
                <div>
                    <button type="submit" class="btn btn-default submit" href="index.html"> Send Email
                    </button>
                    {{-- <a class="reset_pass" href="#">Lost your password?</a> --}}
                </div>

                <div class="clearfix"></div>

                <div class="separator">
                    <div>
                        <h1><i class="fa fa-user"></i> Izasi Admin</h1>
                        <p>©2018 All Rights Reserved. CMS for Izasi Website</p>
                    </div>
                </div>
            </form>
        </section>
    </div>
</div>
@endsection

@section('page-script')
@endsection