@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2>{{ __('title.book_search_results') }}</h2>
            @include('layouts.search_box')
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-10 col-xs-12">
            <div class="card">
                <div class="card-body">
                    <table class="table text-center">
                        <thead class="table-light">
<<<<<<< HEAD
                            <th>{{ __('item.id') }}</th>
                            <th class="text-left">{{ __('item.title') }}</th>
                            <th class="d-none d-sm-table-cell text-left">{{ __('item.author') }}</th>
                            <th class="d-none d-sm-table-cell text-left">{{ __('item.published_year') }}</th>
                            @can('user') {{-- userのみ表示 --}}
                            <th class="text-left">{{ __('item.author') }}</th>
                            <th></th>
                            @elsecan('admin-higher') {{-- adminのみ表示 --}}
                            <th class="text-left">{{ __('item.created_at') }}</th>
                            <th></th>
=======
                            <th>
                                @sortablelink('id', 'ID')
                            </th>
                            <th class="text-left">
                                @sortablelink('title', 'タイトル')
                            </th>
                            <th class="d-none d-sm-table-cell text-left">
                                @sortablelink('author', '著者')
                            </th>
                            <th class="d-none d-sm-table-cell text-left">
                                @sortablelink('published_year', '発売年')
                            </th>
                            @can('user') {{-- userのみ表示 --}}
                            <th class="text-left d-none d-sm-table-cell">@sortablelink('publisher', '出版社')</th>
                            <th>アクション</th>
                            @elsecan('admin-higher') {{-- adminのみ表示 --}}
                            <th class="text-left d-none d-sm-table-cell">@sortablelink('created_at', '登録日')</th>
                            <th class="d-none d-sm-table-cell">アクション</th>
>>>>>>> master
                            @endcan
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <td style="width: 5%">{{ $book->id }}</td>
                                    <td style="width: 30%" class="d-none d-sm-table-cell text-left">{{ $book->title }}</td>
                                    <td style="width: 65%" class="d-table-cell d-sm-none text-left">{{ $book->title }}</td>
                                    <td style="width: 15%" class="d-none d-sm-table-cell text-left">{{ $book->author }}</td>
                                    <td style="width: 10%" class="d-none d-sm-table-cell text-left ">{{ $book->published_year }}</td>
                                    @can('admin-higher') {{-- admin権限のみ表示 --}}
                                    <td style="width: 15%" class="text-left d-none d-sm-table-cell">{{ $book->created_at->format('Y/m/d')  }}</td>
                                    <td style="width: 30%" class="d-none d-sm-table-cell">
                                        <a href="{{ action('BookController@show', [$book]) }}">
                                            <button type="button" class="btn btn-primary">詳細</button>
                                        </a>
                                        <a href="{{ action('BookController@edit', [$book]) }}">
                                            <button type="button" class="btn btn-primary">編集</button>
                                        </a>
                                        <div style="display: inline-flex">
                                            @if ($loop->first)  {{-- 変更予定 一時的にこれで --}}
                                                <form action=""></form>
                                            @endif
                                            {{ Form::open(['method' => 'delete', 'url' => action('BookController@destroy', [$book])]) }}
                                            {{ Form::submit('削除', ['class' => 'btn btn-danger']) }}
                                            {{ Form::close() }}
                                        </div>
                                    <td style="width: 30%;" class="d-table-cell d-sm-none">
                                        <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle" type="button" id="actionMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                操作
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="actionMenu">
                                                <button class="dropdown-item" type="button">
                                                    <a class="text-body" href="{{ action('BookController@show', [$book]) }}">
                                                        詳細
                                                    </a>
                                                </button>
                                                <button class="dropdown-item" type="button">
                                                    <a class="text-body" href="{{ action('BookController@edit', [$book]) }}">
                                                        編集
                                                    </a>
                                                </button>
                                                {{ Form::open(['method' => 'delete', 'url' => action('BookController@destroy', [$book])]) }}
                                                {{ Form::submit('削除', ['class' => 'dropdown-item', 'type' => "button"]) }}
                                                {{ Form::close() }}
                                            </div>
                                        </div>
                                    </td>
                                    @elsecan('user') {{-- userのみ表示 --}}
                                    <td style="width: 20%" class="text-left">
                                        {{ $book->publisher }}
                                    </td>
                                    <td style="width: 20%">
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
@endsection
<style>
    .pagination {
        justify-content: center;
    }
</style>
