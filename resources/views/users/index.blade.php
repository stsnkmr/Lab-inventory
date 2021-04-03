@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <a href="{{ action('UserController@create') }}">
                <button type="button" class="btn btn-primary text-right">新規登録</button>
            </a>
            <div class="card">
                <div class="card-body">
                    <table class="table text-center">
                        <thead class="table-light">
                            <th>
                                @sortablelink('id', 'ID')
                            </th>
                            <th class="text-left">
                                @sortablelink('name', '名前')
                            </th>
                            <th class="text-left d-none d-md-table-cell">
                                @sortablelink('stuent_number', '学籍番号')
                            </th>
                            <th class="text-left d-none d-md-table-cell">
                                @sortablelink('email', 'メールアドレス')
                            </th>
                            <th class="text-center">
                                アクション
                            </th>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td style="width: 5%">{{ $user->id }}</td>
                                    <td style="width: 25%" class="text-left">{{ $user->name }}</td>
                                    <td style="width: 25%" class="text-left d-none d-md-table-cell">{{ $user->student_number }}</td>
                                    <td style="width: 20%" class="text-left d-none d-md-table-cell">{{ $user->email }}</td>
                                    <td style="width: 20%">
                                        <a href="{{ action('UserController@edit', [$user]) }}">
                                            <button type="button" class="btn btn-primary">編集</button>
                                        </a>
                                        <div style="display: inline-flex">
                                            @if ($user -> is(Auth::user()))
                                                <button type="button" class="btn btn-danger disabled">削除</button>
                                            @else
                                                {{ Form::open(['method' => 'delete', 'url' => action('UserController@destroy', [$user])]) }}
                                                {{ Form::submit('削除', ['class' => 'btn btn-danger']) }}
                                                {{ Form::close() }}
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $users->appends(request()->query())->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')
<style>
    a {
        color: black; !important
    }
    .pagination {
        justify-content: center;
    }
</style>
