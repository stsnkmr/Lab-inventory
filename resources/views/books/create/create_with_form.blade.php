@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-10 col-sm-10">
        <h2>新規作成</h2>
        {{ Form::open(['url' => action('BookController@store', [$book]), 'method' => 'POST', 'files' => false]) }}
            {{ Form::token() }}
            {{ Form::label('title', 'タイトル') }}
            {{ Form::text('title', $book->title, ['class' => 'form-control']) }}
            {{ Form::label('author', '著者') }}
            {{ Form::text('author', $book->author, ['class' => 'form-control']) }}
            {{ Form::label('description', '説明') }}
            {{ Form::text('description', $book->description, ['class' => 'form-control']) }}
            {{ Form::label('isbn', 'ISBN') }}
            {{ Form::text('isbn', $book->isbn, ['class' => 'form-control']) }}
            {{ Form::label('publisher', '出版社') }}
            {{ Form::text('publisher', $book->publisher, ['class' => 'form-control']) }}
            {{ Form::label('published_date', '発売日') }}
            {{ Form::text('published_date', $book->published_date, ['class' => 'form-control']) }}
            {{ Form::label('buyURL', 'GoogleURL') }}
            {{ Form::text('buyURL', $book->buyURL, ['class' => 'form-control']) }}
            {{ Form::label('imgURL', '表紙画像URL') }}
            {{ Form::text('imgURL', $book->imgURL, ['class' => 'form-control']) }}
            {{ Form::submit("決定", ['class' => 'btn btn-primary btn-block']) }}
        {{ Form::close() }}
        <div class="mx-auto">
            <a href="{{ action('BookController@index') }}">
                <button class="btn btn-secondary">戻る</button>
            </a>
        </div>
    </div>
</div>
@endsection
