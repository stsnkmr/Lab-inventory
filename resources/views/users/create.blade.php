@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-sm-10">
                <h2>@lang(__('item.user_create'))</h2>
                <hr>
                {{ Form::open(['url' => action('UserController@store', [$user]), 'method' => 'POST', 'files' => false]) }}
                    {{ Form::token() }}
                    {{ Form::hidden('role', $user->role) }}
                    <div class="form-group">
                        {{ Form::label('name',  __('item.name')) }}
                        {{ Form::text('name', $user->name,['class' => 'form-control', 'placeholder' => __('item.name')]) }}
                        <span class="help-block">{{$errors->first('name')}}</span>
                    </div>
                    <div class="form-group">
                        {{ Form::label('email', __('item.email')) }}
                        {{ Form::text('email', $user->email,['class' => 'form-control', 'placeholder' => __('item.email')]) }}
                        <span class="help-block">{{$errors->first('email')}}</span>
                    </div>
                    <div class="form-group">
<<<<<<< HEAD
                        {{ Form::label('password', __('item.password')) }}
                        {{ Form::password('password', ['class' => 'form-control', 'placeholder' => __('password_confirmation')]) }}
=======
                        {{ Form::label('student_number', '学籍番号') }}
                        {{ Form::text('student_number', $user->student_number,['class' => 'form-control', 'placeholder' => '学籍番号']) }}
                        <span class="help-block">{{$errors->first('student_number')}}</span>
                    </div>
                    <div class="form-group">
                        {{ Form::label('password', 'パスワード') }}
                        {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'パスワード']) }}
>>>>>>> master
                        <span class="help-block">{{$errors->first('password')}}</span>
                    </div>
                    <div class="form-group">
                        {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => __('item.password_confirmation')]) }}
                        <span class="help-block">{{$errors->first('password')}}</span>
                    </div>
                    <div style="margin-top: 3%">
                        {{ Form::submit(__('item.submit'), ['class' => 'btn btn-primary btn-block']) }}
                    {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
