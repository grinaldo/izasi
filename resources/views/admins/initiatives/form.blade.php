@extends('admins._layouts.default')

@section('page-title')
    @yield('page-title')
@endsection

@section('page-breadcrumb')
    @yield('page-breadcrumb')
    <li>
        <i class="fa fa-angle-right"></i>
        {{ $pageName }}
    </li>
@stop

@section('content')
    {!! Form::model(
            $model, 
            [
                'route'     => ($model->exists ? ['backend.'.$routePrefix.'.update',$model] : 'backend.'.$routePrefix.'.store'),
                'method'    => ($model->exists ? 'PUT' : 'POST'),
                'class'     => 'form-horizontal form-label-left'
            ]
        ) 
    !!}
    {{-- {!! Form::backendText('url_prefix', 'URL') !!} --}}
    {{-- {!! Form::backendText('layout', 'Layout') !!} --}}
    {!! Form::backendNumber('order', 'Order') !!}
    {!! Form::backendFileBrowser('image', "Select Image")!!}
    {!! Form::backendText('name', 'Name') !!}
    {!! Form::backendSelect('published', 'Published', ['No', 'Yes']) !!}

    <div class="x_content">
        <div class="" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">English Content</a></li>
                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Indonesia Content</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                    {!! Form::backendText('name', 'Name') !!}
                    {!! Form::backendWysiwyg('description', 'Description') !!}
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                    {!! Form::backendText('name_ina', 'Name') !!}
                    {!! Form::backendWysiwyg('description_ina', 'Description') !!}
                </div>
            </div>
        </div>
    </div>
    
    <div class="form-actions">
        <div class="row">
            <div class="col-md-offset-3 col-md-9">
                {!! Form::backendSubmit() !!}
                {!! Form::backendReset() !!}
                {!! Form::backendBack() !!}
            </div>
        </div>
    </div>

{!! Form::close() !!}
@endsection

@section('page-script')
@endsection