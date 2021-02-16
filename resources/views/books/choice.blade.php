@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-10">
        <h1>選択</h1>
        <hr>
            <div class="card-deck">
                <div class="card text-center">
                    <a href="{{ action('BookController@create_with_barcode') }}">
                        <img class="bd-placeholder-img card-img-top" src="{{ asset('images/nimotsu_picking_barcode_woman.png') }}" alt="バーコード登録画像">
                        <div class="card-body">
                            <h5 class="card-title">バーコード登録</h5>
                            <p class="card-text">[推奨]本の裏表紙のISBNのバーコードを読み取り、登録します。（複数登録可能）</br>
                                (注意:978or979から始まるバーコードを読み取るようにしてください。そのほかのバーコードは手で隠してください。)
                            </p>
                        </div>
                    </a>
                </div>
                <div class="card text-center">
                    <a href="{{ action('BookController@create_with_form') }}">
                        <img class="bd-placeholder-img card-img-top" src="{{ asset('images/keyboard_typing.png') }}" alt="キーボード入力をしている人の画像">
                        <div class="card-body">
                            <h5 class="card-title">手入力登録</h5>
                            <p class="card-text">バーコード入力ができない場合にこちらをご利用ください。</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="mx-auto" style="margin-top: 3%">
                <a href="{{ action('BookController@index') }}">
                    <button class="btn btn-block btn-secondary">戻る</button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection('content')
