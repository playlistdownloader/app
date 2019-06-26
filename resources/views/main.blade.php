<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- begin::Head -->
<head>
    <base href="/">
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>
    <meta name="description" content="Updates and statistics">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('header')
    <!-- Styles -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="/favicon.ico" />
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body>
    @yield('content')

    @yield('footer')
    <!--begin::Global App Bundle(used by all pages) -->
    <script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>
    <!--end::Global App Bundle -->
</body>

<!-- end::Body -->

</html>