@extends('layouts.app')
@section('content')
<div class="container">
    <h2>詳細</h2>
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
                        <th scope="row">ISBN</th>
                        <td>{{ $book->isbn }}</td>
                    </tr>
                    <tr>
                        <th scope="row">出版社</th>
                        <td>{{ $book->publisher }}</td>
                    </tr>
                    <tr>
                        <th scope="row">発売日</th>
                        <td>{{ $book->release_date }}</td>
                    </tr>
                    <tr>
                        <th scope="row">AmazonURL</th>
                        <td>
                            <a href="{{ $book->amazonURL }}">Amazon</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm">
            <img src={{ $book->imgURL }} class="rounded" alt={{ $book->title }}><
        /div>
    </div>
</div>
@endsection
