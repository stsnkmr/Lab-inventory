@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-sm-10">
                <h2>新規作成</h2>
                <hr>
                {{ Form::open(['url' => action('UserController@store', [$user]), 'method' => 'POST', 'files' => false]) }}
                    {{ Form::token() }}
                    {{ Form::hidden('role', $user->role) }}
                    <div class="form-group">
                        {{ Form::label('name', '名前') }}
                        {{ Form::text('name', $user->name,['class' => 'form-control', 'placeholder' => '名前']) }}
                        <span class="help-block">{{$errors->first('name')}}</span>
                    </div>
                    <div class="form-group">
                        {{ Form::label('email', 'メールアドレス') }}
                        {{ Form::text('email', $user->email,['class' => 'form-control', 'placeholder' => 'メールアドレス']) }}
                        <span class="help-block">{{$errors->first('email')}}</span>
                    </div>
                    <div class="form-group">
                        {{ Form::label('password', 'パスワード') }}
                        {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'パスワード']) }}
                        <span class="help-block">{{$errors->first('password')}}</span>
                    </div>
                    <div class="form-group">
                        {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'パスワード確認']) }}
                        <span class="help-block">{{$errors->first('password')}}</span>
                    </div>
                    <div style="margin-top: 3%">
                        {{ Form::submit("決定", ['class' => 'btn btn-primary btn-block']) }}
                    {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
