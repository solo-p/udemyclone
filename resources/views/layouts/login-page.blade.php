<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>

        @yield('title')

    </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('assets/css/core.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/thesaas.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">



    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">
    <link rel="icon" href="{{ asset('img/favicon.png') }}">
</head>

<body class="layout-centered bg-img" style="background-image: url({{ asset('assets/img/bg-girl.jpg') }});">




<!-- Page Content -->
@yield('content')






<script src="{{ asset('js/libs.js') }}"></script>


@yield('scripts')



<!-- Scripts -->
<script src="{{ asset('assets/js/core.min.js') }}"></script>
<script src="{{ asset('assets/js/thesaas.min.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
