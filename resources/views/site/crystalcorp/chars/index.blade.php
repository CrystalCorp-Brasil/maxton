@extends('site.layouts.layout')
@section('headTitle')Personagens @endsection
@section('content')
            @include('site.layouts.header')
            <section class="py-0 bg-trans-crystal pt-4 mt-3" id="charsCrystalCorp">
                <div class="container-fluid px-4">
                    <div class="row mb-5">
@forelse ($chars as $char)
                        <div class="col-sm-6 col-md-4 col-lg-3 mt-5 card p-2">
                            <a href="{{ route('char.show',$char->slug) }}" class="row g-0">
                                <div class="col-12 overflow-hidden rounded position-relative" data-zanim-timeline='{"delay":0}' data-zanim-trigger="scroll">
                                    <div class="hoverbox">
                                        <div class="row">
                                            <div class="col">
                                                <img class="w-100" src="{{ $char->image }}" alt="{{ $char->slug }}" data-zanim-xs='{"delay":0.1,"animation":"zoom-in"}'/>
                                            </div>
                                        </div>
                                        <div class="hoverbox-content hoverbox-background">
                                            <div class="hoverbox-bg d-flex flex-center h-100 w-100">
                                                <img class="w-100" src="{{ $char->image }}" alt="{{ $char->slug }}"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mt-2"><h5 class="fs-9">{{ $char->nick }}</h5></div>
                                <div class="col-6 mt-2 text-end"><h6 class="fw-normal mb-0 d-inline-block">{{ $char->name }}</h6></div>
                            </a>
                        </div>
@empty
@endforelse
                    </div>
                </div>
            </section>
@endsection
