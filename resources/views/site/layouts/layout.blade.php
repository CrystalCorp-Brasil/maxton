<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="{{ str_replace ('_', '-', app ()->getLocale ()) }}" dir="ltr" class="has-sidemenu">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="NHOJunior Design">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="msapplication-TileImage" content="{{ asset('favicon.png') }}">
        <meta name="theme-color" content="#031141">
        <title>{{ config('app.name', 'CrystalCorp') }} | {{ $pageTitle }}</title>
        <link href="{{ asset('favicon.png') }}" rel="apple-touch-icon" sizes="180x180">
        <link href="{{ asset('favicon.png') }}" rel="icon" type="image/png" sizes="32x32">
        <link href="{{ asset('favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
        <link href="{{ asset('css/site.css') }}" rel="stylesheet" type="text/css"/>
@yield('styles')
    </head>
    <body class="overflow-hidden-x">
        @include('site.layouts.navbar')
        <main class="main min-vh-100 card" id="top">
            @include('site.layouts.preLoader')
@yield('content')
        </main>
        @include('site.layouts.footer')
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/site/anchor.min.js') }}"></script>
        <script src="{{ asset('js/site/is.min.js') }}"></script>
        <script src="{{ asset('js/site/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('js/site/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/site/packery-mode.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/site/BigPicture.js') }}"></script>
        <script src="{{ asset('js/site/rellax.min.js') }}"></script>
        <script src="{{ asset('js/site/all.min.js') }}"></script>
        <script src="{{ asset('js/site/lodash.min.js') }}"></script>
        <script src="{{ asset('js/site/polyfill.min.js') }}"></script>
        <script src="{{ asset('js/site/imagesloaded.pkgd.js') }}"></script>
        <script src="{{ asset('js/site/gsap.js') }}"></script>
        <script src="{{ asset('js/site/customEase.js') }}"></script>
        <script src="{{ asset('js/site/drawSVGPlugin.js') }}"></script>
        <script src="{{ asset('js/site/theme.js') }}"></script>
@yield('scripts')
    </body>
</html>
