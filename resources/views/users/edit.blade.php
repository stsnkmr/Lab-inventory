@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-sm-10">
                <h2>編集</h2>
                <hr>
                {{ Form::open(['url' => action('UserController@update', [$user]), 'method' => 'PUT', 'files' => false]) }}
                    {{Form::token()}}
                    {{ Form::hidden('id', $user->id) }}
                    <div>
                        {{ Form::label('name', '名前') }}
                        {{ Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => '名前']) }}
                        <span class="help-block">{{$errors->first('name')}}</span>
                    </div>
                    <div>
                        {{ Form::label('student_number', '学籍番号') }}
                        {{ Form::text('student_number', $user->student_number, ['class' => 'form-control', 'placeholder' => '学籍番号']) }}
                        <span class="help-block">{{$errors->first('student_number')}}</span>
                    </div>
                    <div>
                        {{ Form::label('email', 'メールアドレス') }}
                        {{ Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' => 'メールアドレス']) }}
                        <span class="help-block">{{$errors->first('email')}}</span>
                    </div>
                    <div>
                        <label class="radio-button">
                            {{ Form::radio('role', '2', (old('role')== '2' ? true: ($user->role == '2'))? true:false, ['class' => 'radio-button__input']) }}
                            <span class="radio-button__icon">管理者</span>
                        </label>
                        <label class="radio-button">
                            {{ Form::radio('role', '3', (old('role')== '3' ? true: ($user->role == '3'))? true:false, ['class' => 'radio-button__input']) }}
                            <span class="radio-button__icon">一般</span>
                        </label>
                        <span class="help-block">{{$errors->first('role')}}</span>
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
