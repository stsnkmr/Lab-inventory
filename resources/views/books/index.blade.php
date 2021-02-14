@extends('layouts.app')
@section('content')
<div class="container">
    {{-- <div class="card">
        {{ Breadcrumbs::render('book') }}
    </div> --}}
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-10">
            <h2>文献リスト</h2>
            <div class="text-right">
                <div class="btn-group">
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ソート
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="/book?sort=title">タイトル</a>
                        <a class="dropdown-item" href="/book?sort=author">著者</a>
                        <a class="dropdown-item" href="/book?sort=published_date">発売日</a>
                      </div>
                    <a href="{{ action('BookController@choose') }}">
                        <button type="button" class="btn btn-primary">新規登録</button>
                    </a>
                </div>
                <hr>
            </div>
            <div class="card"></div>
            <div class="card">
                <div class="card-body">
                    <table class="table text-center">
                        <thead class="table-light">
                            <th class="text-left">タイトル</th>
                            <th class="text-left">著者</th>
                            <th class="text-left">発売日</th>
                            <th>アクション</th>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <td style="width: 40%" class="text-left">{{ $book->title }}</td>
                                    <td style="width: 15%" class="text-left">{{ $book->author }}</td>
                                    <td style="width: 15%" class="text-left">{{ $book->published_date }}</td>
                                    <td style="width: 30%">
                                        <a href="{{ action('BookController@show', [$book]) }}">
                                            <button type="button" class="btn btn-primary">詳細</button>
                                        </a>
                                        <a href="{{ action('BookController@edit', [$book]) }}">
                                            <button type="button" class="btn btn-primary">編集</button>
                                        </a>
                                        <div style="display: inline-flex">
                                            {{ Form::open(['method' => 'delete', 'url' => action('BookController@destroy', [$book])]) }}
                                            {{ Form::submit('削除', ['class' => 'btn btn-danger']) }}
                                            {{ Form::close() }}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $books->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')
<style>
    .pagination {
        justify-content: center;
    }
</style>
