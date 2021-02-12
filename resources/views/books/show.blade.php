@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-10">
            <h2>詳細</h2>
            <hr>
            <div class="row">
                <div class="col-sm">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">タイトル</th>
                                <td>{{ $book->title }}</td>
                            </tr>
                            <tr>
                                <th scope="row">著者</th>
                                <td>{{ $book->author }}</td>
                            </tr>
                            <tr>
                                <th scope="row">説明</th>
                                <td>{{ $book->description }}</td>
                            </tr>
                            <tr>
                                <th scope="row">ISBN</th>
                                <td>{{ $book->isbn }}</td>
                            </tr>
                            <tr>
                                <th scope="row">出版社</th>
                                <td>{{ $book->publisher }}</td>
                            </tr>
                            <tr>
                                <th scope="row">発売日</th>
                                <td>{{ $book->published_date }}</td>
                            </tr>
                            <tr>
                                <th scope="row">作成日</th>
                                <td>{{ $book->created_at }}</td>
                            </tr>
                            <tr>
                                <th scope="row">URL</th>
                                <td>
                                    <a href="{{ $book->buyURL }}">GoogleBooks</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm">
                    <img src={{ $book->imgURL }} class="rounded" alt={{ $book->title }}>
                </div>
            </div>
            <div class="mx-auto" style="margin-top: 4%">
                <a href="{{ action('BookController@index') }}">
                    <button class="btn btn-block btn-secondary">戻る</button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
