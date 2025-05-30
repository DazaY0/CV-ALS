<!doctype html>
<html lang="en">
<head>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header-form.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/accordion.css') }}">
    <link rel="stylesheet" href="{{ asset('css/picture_caption.css') }}">
    <!-- Stack for block-specific styles -->

    @stack('block_styles')

</head>
<body >
<x-menu/>

<div class="p-3">

    @yield('content')

</div>

<x-footer/>
</body>
</html>
