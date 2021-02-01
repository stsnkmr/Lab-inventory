@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>編集</h2>
        {{ Form::open(['url' => action('BookController@update', [$book]), 'method' => 'PUT', 'files' => false]) }}
            {{ Form::token() }}
            {{ Form::label('title', 'タイトル') }}
            {{ Form::text('title', $book->title, ['class' => 'form-control', 'placeholder' => 'タイトル']) }}
            {{ Form::label('author', '著者') }}
            {{ Form::text('author', $book->author, ['class' => 'form-control', 'placeholder' => '著者']) }}
            {{ Form::label('isbn', 'ISBN') }}
            {{ Form::text('isbn', $book->isbn, ['class' => 'form-control', 'placeholder' => 'ISBN']) }}
            {{ Form::label('imgURL', '表紙画像URL') }}
            {{ Form::text('imgURL', $book->imgURL, ['class' => 'form-control', 'placeholder' => '表紙画像URL']) }}
            {{ Form::label('publisher', '出版社') }}
            {{ Form::text('publisher', $book->publisher, ['class' => 'form-control', 'placeholder' => '出版社']) }}
            {{ Form::label('release_date', '出版日') }}
            {{ Form::text('release_date', $book->release_date, ['class' => 'form-control', 'placeholder' => '出版日']) }}
            {{ Form::label('amazonURL', 'AmazonURL') }}
            {{ Form::text('amazonURL', $book->amazonURL, ['class' => 'form-control', 'placeholder' => 'AmazonURL']) }}
            {{ Form::submit("決定", ['class' => 'btn btn-primary btn-block']) }}
        {{ Form::close() }}
    </div>
@endsection
