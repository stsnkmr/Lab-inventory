@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-10">
            <h1>商品リスト</h1>
            <hr>
            <div class="card">
                <div class="row">
                    @foreach ($items as $item)
                        <div class="card col-md-3" style="width: 18rem;">
                            <img class="card-img-top" width="100%" height="180" src='/storage/app/public/items/600400.png' alt={{ $item->name }}>
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{ $item->name }}<br>
                                    (¥{{ number_format($item->price) }})
                                </h5>
                                <p class="card-text">{{ $item->description }}</p>
                            </div>
                            <div class="card-footer bg-transparent border-secondary text-center">
                                <button class="btn btn-success">購入</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<button class="minus">－</button><input type="text" name="input01" value="0" readonly class="number"><button class="plus">＋</button>
@endsection('content')
