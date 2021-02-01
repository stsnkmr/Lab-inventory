@extends('layouts.app')
@section('content')
<div class="container text-right">
    {{-- <div class="card">
        {{ Breadcrumbs::render('book') }}
    </div> --}}
    <div class="btn-group">
        <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="margin-right: 0.3em">
          Sort
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Separated link</a></li>
        </ul>
        <button type="button" class="btn btn-primary col-mb-1 text-right" style="margin-right: 0.3em">新規登録</button>
        <button type="button" class="btn btn-primary col-mb-1 text-right" style="margin-right: 0.3em">新規一括登録</button>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table text-center">
                <thead class="table-light">
                    <th>ID</th>
                    <th class="text-left">タイトル</th>
                    <th class="text-left">著者</th>
                    <th>アクション</th>
                </thead>
                <tbody>
                    @foreach ($items as $book)
                        <tr>
                            <td style="width: 5%">{{ $book->id }}</td>
                            <td style="width: 35%" class="text-left">{{ $book->title }}</td>
                            <td style="width: 30%" class="text-left">{{ $book->author }}</td>
                            <td style="width: 30%">
                                <a href="{{ action('BookController@show', [$book]) }}">
                                    <button type="button" class="btn btn-primary">詳細</button>
                                </a>
                                <a href="{{ action('BookController@edit', [$book]) }}">
                                    <button type="button" class="btn btn-primary">編集</button>
                                </a>
                                <button type="button" class="btn btn-danger">削除</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $items->links() }}
        </div>
    </div>
</div>
@endsection('content')
