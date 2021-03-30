<div id="search_box" class="card" style="padding: 2rem 2rem">
    <h3 class="card-title">@lang(__('title.book_search'))</h3>
    <div class="row">
        <div class="col-12 justify-content-center">
            <div class="form-check form-check-inline">
                {{ Form::open(['url' => action('BookController@search'), 'method' => 'GET']) }}
                {{ Form::token() }}
                {{ Form::radio('search_type', 'title', true, ['id' => '1', 'class' => 'form-check-input']) }}
                {{ Form::label('search_type', 'タイトル', ['class' => 'form-check-label']) }}
                {{ Form::radio('search_type', 'author', false, ['id' => '2', 'class' => 'form-check-input']) }}
                {{ Form::label('search_type', '著者', ['class' => 'form-check-label']) }}
                {{ Form::radio('search_type', 'publisher', false, ['id' => '3', 'class' => 'form-check-input']) }}
                {{ Form::label('search_type', '出版社', ['class' => 'form-check-label']) }}
            </div>
            <div>
                {{ Form::label('keyword', '検索ワード') }}
                {{ Form::text('keyword', old('keyword'), ['class' => 'form-control', 'placeholder' => '何か入力してください。',]) }}
            </div>
            <div class="text-right" style="margin-top: 1rem">
                {{ Form::submit("検索", ['class' => 'btn btn-primary']) }}
            </div>
        </div>
    </div>
</div>
