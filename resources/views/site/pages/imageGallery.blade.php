@extends('site.layouts.layout')
@section('headTitle')Galeria de Imagens @endsection
@section('content')
            @include('site.layouts.header')
            <section class="mt-5 mt-lg-0 py-lg-7 px-5 bg-trans-crystal pt-4 mt-3" id="Gallery">
                <div class="container-fluid">
                    <div class="row mb-5 mb-lg-7">
                        <div class="col-lg-6">
                            <h2 class="d-inline">Aprecie as imagens enviadas por nossos colaboradores</h2>
                        </div>
                    </div>
                    <ul class="nav font-secondary mb-3" data-filter-nav="data-filter-nav">
                        <li class="nav-item me-1"><a class="nav-link isotope-nav active px-4 py-2" href="#!" data-filter="*">todos</a></li>
                        <li class="nav-item mx-1"><a class="nav-link isotope-nav px-4 py-2" href="#!" data-filter=".admin">administrador</a></li>
                        <li class="nav-item mx-1"><a class="nav-link isotope-nav px-4 py-2" href="#!" data-filter=".editor">editores</a></li>
                        <li class="nav-item ms-1"><a class="nav-link isotope-nav px-4 py-2" href="#!" data-filter=".user">usuários</a></li>
                    </ul>
                    <div class="row g-3 mt-2" id="portfolio-gallery" data-zanim-timeline="{}" data-zanim-trigger="scroll" data-isotope='{"layoutMode":"packery"}'>
@forelse ($images as $image)
                        <div class="col-6 col-md-3 bg-trans-crystal pt-4 mt-3 isotope-item {{ $image->user->level }}">
                            <a href="#!" data-bp="{{ asset($image->image) }}" data-bigpicture='{"gallery":"#portfolio-gallery"}' data-caption="{{ $image->slug }}">
                                <img class="rounded w-100 fit-cover" src="{{ asset($image->image) }}" alt="{{ $image->title }}" data-zanim-xs='{"animation":"zoom-in","delay":0.2}'/>
                            </a>
                            <div class="col-12 mt-2">
                                <p class="text-center fs-9">Postado por <span class="text-info text-capitalize">{{ $image->user->username }}</span> em: {{ $image->created_at->format('d/m/Y H:i:s') }}</p>
                            </div>
                        </div>
@empty
                        <div class="col-md-12 pt-4 text-center bg-trans-crystal pt-4 mt-3"><h4 class="font-secondary">Ainda não temos Imagens publicadas!</h4></div>
@endforelse
                        {{ $images->appends(request()->query())->links() }}
                    </div>
                </div>
            </section>
@endsection
