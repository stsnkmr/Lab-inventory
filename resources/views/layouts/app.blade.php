<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        @if (file_exists('css/app.css'))
            <link rel="stylesheet" href="{{ asset('css/app.css') }}?v={{ hash_file('md5', 'css/app.css') }}">
        @else
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @endif
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/monthSelect/style.css">
        <title>LabInventorySystem</title>
    </head>
    <body>
        @include('layouts.header')
        <div class="container-fluid">
	    {{-- @if(auth()->user())
		<div class="row">
                    @include('layouts.sidemenu')
                    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
			@yield('content')
                    </main>
		</div>
	    @else --}}
		<main class="mt-6">
		    @yield('content')
		</main>
	    {{-- @endif --}}
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        @if (file_exists('js/app.js'))
            <script src="{{ asset('js/app.js') }}?v={{ hash_file('md5', 'js/app.js') }}"></script>
        @else
            <script src="{{ asset('js/app.js') }}"></script>
        @endif
        <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/monthSelect/index.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ja.js"></script>
    </body>
</html>
