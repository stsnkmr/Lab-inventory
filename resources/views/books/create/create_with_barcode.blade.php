@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-10">
            <h2>@lang(__('title.create_with_barcode'))</h2>
            <hr></hr>
            <div id="barcode"></div>
        </div>
    </div>
</div>
@endsection('content')
