@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-10">
        <h1>あなたは？</h1>
        <hr>
            <div class="card-deck">
                <div class="card text-center">
                    <a href="{{ action('BuyerController@index') }}">
                        <img style="display: inline-block" class="bd-placeholder-img card-img-top" src="{{ asset('images/shopping_shufu.png_woman.png') }}" alt="バーコード登録画像">
                        <div class="card-body">
                            <h5 class="card-title text-black">購入者</h5>
                            <p class="card-text text-black">購入する場合はこちらから。</p>
                        </div>
                    </a>
                </div>
                <div class="card text-center">
                    <a href="{{ action('SellerController@index') }}">
                        <img style="display: inline-block" class="bd-placeholder-img card-img-top" src="{{ asset('images/shopping_blackmarket.png') }}" alt="キーボード入力をしている人の画像">
                        <div class="card-body">
                            <h5 class="card-title text-black">出品者</h5>
                            <p class="card-text text-black">出品、在庫管理、PayPayの設定はこちらから。</p>
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
