<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BPM&#160;&#8212; @yield('title')"</title>
    <link rel="stylesheet" href="{{ asset('front/css/main.css') }}">

    <link rel="icon" type="image/x-icon" href="{{asset('front/img/favicons/favicon.svg')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('front/img/favicons/apple-touch-icon.png') }}">
</head>

<body>

    @include('front.partials.header')

    @include('front.partials.mobile_menu_popup')

    @include('front.partials.mobile_catalog_popup')

    @yield('content')

    @include('front.partials.footer')

    @include('front.partials.cart_popup')

    @include('front.partials.metal_calculator_popup')

    <script src="{{ asset('front/js/index.bundle.js') }}"></script>
</body>

</html>
