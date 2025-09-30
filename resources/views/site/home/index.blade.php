@extends('site.layouts.layout')
@section('headTitle')Home @endsection
@section('content')
            @include('site.home.sections.mosaic')
            @include('site.home.sections.register')
            @include('site.home.sections.content')
            @include('site.home.sections.featurings')
            @include('site.home.sections.leagueHall')
            @include('site.home.sections.parallax')
            @include('site.home.sections.signup_db')
            @include('site.home.sections.footer')
@endsection
