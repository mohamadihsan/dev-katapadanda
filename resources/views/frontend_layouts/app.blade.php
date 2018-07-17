<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- title -->
        <title>Katapanda | @yield('title')</title>

        <!-- Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Landing page template for creative dashboard">
        <meta name="keywords" content="Landing page template">
        <!-- Favicon icon -->
        <link rel="icon" href="{{ asset('assets_frontend/logos/favicon.ico') }}" type="image/png" sizes="16x16">

        {{-- include style css --}}
        @include('includes.frontend.style')

    </head>

    <body>

        {{-- content --}}
        @yield('content')

        {{-- include script --}}
        @include('includes.frontend.script')

    </body>
</html>      
