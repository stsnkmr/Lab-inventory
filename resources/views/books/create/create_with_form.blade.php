@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-10">
            <h2>新規作成</h2>
            {{ Form::open(['url' => action('BookController@store', [$book]), 'method' => 'POST', 'files' => false]) }}
                {{ Form::token() }}
                <div>
                        {{ Form::label('title', 'タイトル') }}
                        {{ Form::text('title', $book->title, ['class' => 'form-control']) }}
                        <span class="help-block">{{$errors->first('title')}}</span>
                    </div>
                    <div>
                        {{ Form::label('author', '著者') }}
                        {{ Form::text('author', $book->author, ['class' => 'form-control']) }}
                        <span class="help-block">{{$errors->first('author')}}</span>
                    </div>
                    <div>
                        {{ Form::label('description', '説明') }}
                        {{ Form::text('description', $book->description, ['class' => 'form-control']) }}
                        <span class="help-block">{{$errors->first('description')}}</span>
                    </div>
                    <div>
                        {{ Form::label('isbn', 'ISBN') }}
                        {{ Form::text('isbn', $book->isbn, ['class' => 'form-control']) }}
                        <span class="help-block">{{$errors->first('isbn')}}</span>
                    </div>
                    <div>
                        {{ Form::label('imgURL', '表紙画像URL') }}
                        {{ Form::text('imgURL', $book->imgURL, ['class' => 'form-control']) }}
                        <span class="help-block">{{$errors->first('imgURL')}}</span>
                    </div>
                    <div>
                        {{ Form::label('publisher', '出版社') }}
                        {{ Form::text('publisher', $book->publisher, ['class' => 'form-control']) }}
                        <span class="help-block">{{$errors->first('publisher')}}</span>
                    </div>
                    <div>
                        {{ Form::label('published_year', '発売年') }}
                        {{ Form::text('published_year', $book->published_year, ['class' => 'form-control']) }}
                        <span class="help-block">{{$errors->first('published_year')}}</span>
                    </div>
                    <div>
                        {{ Form::label('buyURL', 'GoogleBooksURL') }}
                        {{ Form::text('buyURL', $book->buyURL, ['class' => 'form-control']) }}
                        <span class="help-block">{{$errors->first('buyURL')}}</span>
                    </div>
                <div style="margin-top: 3%">
                    {{ Form::submit("決定", ['class' => 'btn btn-primary btn-block']) }}
                </div>
                {{ Form::close() }}
                <button onclick="history.back()" class="btn btn-secondary btn-block" style="margin-top: 1%">戻る</button>
        </div>
    </div>
</div>
@endsection
