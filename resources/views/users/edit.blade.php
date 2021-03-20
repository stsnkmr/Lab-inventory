@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-sm-10">
                <h2>編集</h2>
                <hr>
                {{ Form::open(['url' => action('UserController@update', [$user]), 'method' => 'PUT', 'files' => false]) }}
                    {{ Form::token() }}
                    <div>
                        {{ Form::label('name', '名前') }}
                        {{ Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => '名前']) }}
                        {{--  <span class="help-block">{{$errors->first('name')}}</span>  --}}
                    </div>
                    <div>
                        {{ Form::label('email', 'メールアドレス') }}
                        {{ Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' => 'メールアドレス']) }}
                        {{--  <span class="help-block">{{$errors->first('email')}}</span>  --}}
                    </div>
                    <div>
                        {{ Form::label('role', 'root') }}
                        {{ Form::radio('role', '1', (old('role')== '1' ? true: ($user->role == '1'))? true:false, ['class' => 'radio-button__input', 'disabled']) }}
                        {{ Form::label('role', '管理者') }}
                        {{ Form::radio('role', '2', (old('role')== '2' ? true: ($user->role == '2'))? true:false, ['class' => 'radio-button__input']) }}
                        {{ Form::label('role', '一般') }}
                        {{ Form::radio('role', '3', (old('role')== '3' ? true: ($user->role == '3'))? true:false, ['class' => 'radio-button__input']) }}
                        {{--  <span class="help-block">{{$errors->first('email')}}</span>  --}}
                    </div>
                    <div style="margin-top: 3%">
                        {{ Form::submit("決定", ['class' => 'btn btn-primary btn-block']) }}
                    {{ Form::close() }}
                        <a href="{{ action('UserController@index') }}">
                            <button class="btn btn-block btn-secondary" style="margin-top: 1%">戻る</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
