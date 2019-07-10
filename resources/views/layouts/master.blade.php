<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $title }} | {{ config('app.name') }}</title>

    {{-- stylesheets --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.jpg') }}" type="image/jpg">
</head>
<body>
    @include('layouts.navbar')

    <div class="container">
        @include('layouts.flashes')

        @section('content')

        @show
    </div>

    {{-- scripts --}}
    @section('scripts')
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    @show
</body>
</html>