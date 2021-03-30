@extends('layouts.app')
@section('content')
@foreach ($errors->all() as $error)
<span class="danger">{!! $error !!}</span>
@endforeach
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-sm-10">
                <h2>@lang(__('title.change_password'))</h2>
                <hr>
                {{ Form::open(['url' => action('UserController@update_password'), 'method' => 'POST', 'files' => false]) }}
                {{ Form::token() }}
                <div class="form-group">
                    {{ Form::label('パスワード') }}
                    {{ Form::password('password',  ['class' => 'form-control', 'placeholder' => 'パスワード']) }}
                </div>
                <div class="form-group">
                    {{ Form::password('password_confirmation',  ['class' => 'form-control', 'placeholder' => 'パスワード確認']) }}
                </div>
                <div style="margin-top: 3%">
                    {{ Form::submit("決定", ['class' => 'btn btn-primary btn-block']) }}
                {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection
