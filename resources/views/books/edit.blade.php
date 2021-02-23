@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-sm-10">
                <h2>編集</h2>
                <hr>
                {{ Form::open(['url' => action('BookController@update', [$book]), 'method' => 'PUT', 'files' => false]) }}
                    {{ Form::token() }}
                    <div>
                        {{ Form::label('title', 'タイトル') }}
                        {{ Form::text('title', $book->title, ['class' => 'form-control', 'placeholder' => 'タイトル']) }}
                        <span class="help-block">{{$errors->first('title')}}</span>
                    </div>
                    <div>
                        {{ Form::label('author', '著者') }}
                        {{ Form::text('author', $book->author, ['class' => 'form-control', 'placeholder' => '著者']) }}
                        <span class="help-block">{{$errors->first('author')}}</span>
                    </div>
                    <div>
                        {{ Form::label('description', '説明') }}
                        {{ Form::text('description', $book->description, ['class' => 'form-control', 'placeholder' => '説明']) }}
                        <span class="help-block">{{$errors->first('description')}}</span>
                    </div>
                    <div>
                        {{ Form::label('isbn', 'ISBN') }}
                        {{ Form::text('isbn', $book->isbn, ['class' => 'form-control', 'placeholder' => 'ISBN']) }}
                        <span class="help-block">{{$errors->first('isbn')}}</span>
                    </div>
                    <div>
                        {{ Form::label('imgURL', '表紙画像URL') }}
                        {{ Form::text('imgURL', $book->imgURL, ['class' => 'form-control', 'placeholder' => '表紙画像URL']) }}
                        <span class="help-block">{{$errors->first('imgURL')}}</span>
                    </div>
                    <div>
                        {{ Form::label('publisher', '出版社') }}
                        {{ Form::text('publisher', $book->publisher, ['class' => 'form-control', 'placeholder' => '出版社']) }}
                        <span class="help-block">{{$errors->first('publisher')}}</span>
                    </div>
                    <div>
                        {{ Form::label('published_year', '発売年') }}
                        {{ Form::text('published_year', $book->published_year, ['class' => 'form-control', 'placeholder' => '発売年']) }}
                        <span class="help-block">{{$errors->first('published_year')}}</span>
                    </div>
                    <div>
                        {{ Form::label('buyURL', 'GoogleBooksURL') }}
                        {{ Form::text('buyURL', $book->buyURL, ['class' => 'form-control', 'placeholder' => 'buyURL']) }}
                        <span class="help-block">{{$errors->first('buyURL')}}</span>
                    </div>

                    <div style="margin-top: 3%">
                        {{ Form::submit("決定", ['class' => 'btn btn-primary btn-block']) }}
                {{ Form::close() }}
                        <a href="{{ action('BookController@index') }}">
                            <button class="btn btn-block btn-secondary" style="margin-top: 1%">戻る</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
