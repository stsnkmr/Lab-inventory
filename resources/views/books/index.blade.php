@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-10">
            <h2>書籍リスト</h2>
            <hr>
            @include('layouts.search_box')
            <div class="text-right">
                <div class="btn-group">
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ソート
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item">@sortablelink('title', 'タイトル')</a>
                        <a class="dropdown-item">@sortablelink('author', '著者')</a>
                        <a class="dropdown-item">@sortablelink('published_at', '出版日')</a>
                      </div>
                    @can('admin-higher')
                    <a href="{{ action('BookController@choose') }}">
                        <button type="button" class="btn btn-primary">新規登録</button>
                    </a>
                    @endcan
                </div>
                <hr>
            </div>
            <h4>{{ $books->total() }}件中{{ $books->count() }}件表示中です。</h4>
            <div class="card">
                <div class="card-body">
                    <table class="table text-center">
                        <thead class="table-light">
                            <th>ID</th>
                            <th class="text-left">タイトル</th>
                            <th class="text-left">著者</th>
                            <th class="text-left">発売日</th>
                            @can('user') {{-- userのみ表示 --}}
                            <th class="text-left">出版社</th>
                            <th>アクション</th>
                            @elsecan('admin-higher') {{-- adminのみ表示 --}}
                            <th>アクション</th>
                            @endcan
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <td style="width: 5%">{{ $book->id }}</td>
                                    <td style="width: 35%" class="text-left">{{ $book->title }}</td>
                                    <td style="width: 15%" class="text-left">{{ $book->author }}</td>
                                    <td style="width: 15%" class="text-left">{{ $book->published_date }}</td>
                                    @can('admin-higher') {{-- admin権限のみ表示 --}}
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
                                    @elsecan('user') {{-- userのみ表示 --}}
                                    <td style="width: 15%" class="text-left">
                                        {{ $book->publisher }}
                                    </td>
                                    <td style="width: 15%">
                                        <a href="{{ action('BookController@show', [$book]) }}">
                                            <button type="button" class="btn btn-primary">詳細</button>
                                        </a>
                                    </td>
                                    @endcan
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $books->appends(request()->query())->links() }}
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
