<!doctype html>
<html lang="en">

<head>
    {{--Meta--}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--Links--}}
    <link rel="stylesheet" href="{{ URL::to('css/app.css') }}">

    {{--Title--}}
    <title>chrisknoll.com</title>
</head>
<body>
    {{--Nav--}}
    @include('partials.nav')

    {{--Content--}}
    <div class="container">
        @yield('content')
    </div>

    {{--Footer--}}
    {{--@include('partials.footer')--}}

    {{--Scripts--}}
    <script src="{{ URL::to('js/app.js') }}"></script>
</body>
</html>