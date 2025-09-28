<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="{{ str_replace ('_', '-', app ()->getLocale ()) }}" data-bs-theme="blue-theme">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="NHOJunior Design">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="msapplication-TileImage" content="{{ asset('favicon.png') }}">
        <title>{{ config('app.name', 'CrystalCorp') }} | @yield('headTitle')</title>
        <link href="{{ asset('favicon.ico') }}" rel="icon" type="image/png" sizes="32x32">
        <link href="{{ asset('css/admin.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
@yield('content')
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
@if ($pageActive != 'auth')
        <script src="{{ asset('js/admin/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('js/admin/metisMenu.min.js') }}"></script>
        <script src="{{ asset('js/admin/apexcharts.min.js') }}"></script>
        <script src="{{ asset('js/admin/simplebar.min.js') }}"></script>
        <script src="{{ asset('js/admin/jquery.peity.min.js') }}"></script>
        <script src="{{ asset('js/admin/pace.min.js') }}"></script>
        <script> $(".data-attributes span").peity("donut") </script>
        <script src="{{ asset('js/admin/main.js') }}"></script>
        <script src="{{ asset('js/admin/dashboard1.js') }}"></script>
        <script> new PerfectScrollbar(".user-list") </script>
@endif
        @include('components.mySweetAlertMessages')
@yield('scripts')
    </body>
</html>

