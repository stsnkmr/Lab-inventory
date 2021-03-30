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
                            @endcan
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <td style="width: 5%">{{ $book->id }}</td>
                                    <td style="width: 30%" class="text-left">{{ $book->title }}</td>
                                    <td style="width: 15%" class="d-none d-sm-table-cell text-left">{{ $book->author }}</td>
                                    <td style="width: 10%" class="d-none d-sm-table-cell text-left ">{{ $book->published_year }}</td>
                                    @can('admin-higher') {{-- admin権限のみ表示 --}}
                                    <td style="width: 15%" class="text-left ">{{ $book->created_at->format('Y/m/d')  }}</td>
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
