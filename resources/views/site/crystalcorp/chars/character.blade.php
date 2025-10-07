@extends('site.layouts.layout')
@section('headTitle')$pageTitle @endsection
@section('content')
            <section class="py-0" id="page-profile">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-7 px-0">
                            <div class="sticky-top overflow-hidden min-vh-50 min-vh-xl-100">
                                <div class="bg-holder" style="background-image:url({{ asset($char->image) }});" data-zanim-trigger="scroll" data-zanim-lg='{"animation":"zoom-out-slide-right","delay":0.4}'></div>
                            </div>
                        </div>
                        <div class="col-xl-5 py-5 text-justify p-3 bg-trans-crystal pt-4 mt-3">
                            <div class="row h-100">
                                <div class="col-lg-12">
                                    <div class="row justify-content-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                        <div class="col-md-10 col-lg-12">
                                            <div class="overflow-hidden"><h4 data-zanim-xs='{"delay":0.1}'>{{ $char->nick }}</h4></div>
                                            <div class="overflow-hidden"><h6 class="text-body fw-normal text-uppercase ls mb-4" data-zanim-xs='{"delay":0.2}'>{{ $char->name }}</h6>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-lg-12">
                                            <div class="overflow-hidden">
                                                <p class="mb-0 pe-sm-5 pe-lg-0" data-zanim-xs='{"delay":0.3}'>{!! $char->bio !!}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-12 mt-6 mt-md-0 mt-lg-6">
                                            <div class="overflow-hidden"><h6 class="text-uppercase ls" data-zanim-xs='{"delay":0.4}'>Postado por:</h6></div>
                                            <div class="overflow-hidden"><p data-zanim-xs='{"delay":0.5}'>{{ $char->user->username }}</p></div>
                                            <div class="overflow-hidden">
                                                <div data-zanim-xs='{"delay":0.6}'>
@if(Auth::check())
                                                    <h6 class="text-uppercase ls mt-4">Deixe seu like.</h6>
                                                    <div class="mt-3 fs-10">
@switch(($char->isLikedBy(auth()->user())))
@case($char->likes ?: 0)
                                                        <div class="d-flex justify-content-center align-items-center gap-3">
                                                            <div>
                                                                <form action="{{ route('like.char',$char->id) }}" method="POST">
                                                                    @csrf

                                                                    <button class="btn btn-primary btn-xs border mx-2" type="submit"><i class="fa-2x i-Like-2 mr-2"></i>{{ $char->likes ?: 0 }}</button>
                                                                </form>
                                                            </div>
                                                            <div>
                                                                <form action="{{ route('dislike.char',$char->id) }}" method="POST">
                                                                    @csrf

                                                                    @method('DELETE')

                                                                    <button class="btn btn-outline-secondary btn-xs border mx-2" type="submit"><i class="fa-2x i-Unlike-2 mr-2"></i>{{ $char->dislikes ?: 0 }}</button>
                                                                </form>
                                                            </div>
                                                        </div>
@break
@case($char->dislikes ?: 0)
                                                        <div class="d-flex justify-content-center align-items-center gap-3">
                                                            <div>
                                                                <form action="{{ route('like.char',$char->id) }}" method="POST">
                                                                    @csrf

                                                                    <button class="btn btn-outline-secondary btn-xs border mx-2" type="submit"><i class="fa-2x i-Like-2 mr-2"></i>{{ $char->likes ?: 0 }}</button>
                                                                </form>
                                                            </div>
                                                            <div>
                                                                <form action="{{ route('dislike.char',$char->id) }}" method="POST">
                                                                    @csrf

                                                                    @method('DELETE')

                                                                    <button class="btn btn-outline-secondary btn-xs border mx-2" type="submit"><i class="fa-2x i-Unlike-2 mr-2"></i>{{ $char->dislikes ?: 0 }}</button>
                                                                </form>
                                                            </div>
                                                        </div>
@break
@default
                                                        <div class="d-flex justify-content-center align-items-center gap-3">
                                                            <div>
                                                                <form action="{{ route('like.char',$char->id) }}" method="POST">
                                                                    @csrf

                                                                    <button class="btn btn-outline-secondary btn-xs border mx-2" type="submit"><i class="fa-2x i-Like-2 mr-2"></i>{{ $char->likes ?: 0 }}</button>
                                                                </form>
                                                            </div>
                                                            <div>
                                                                <form action="{{ route('dislike.char',$char->id) }}" method="POST">
                                                                    @csrf

                                                                    @method('DELETE')

                                                                    <button class="btn btn-primary btn-xs border mx-2" type="submit"><i class="fa-2x i-Unlike-2 mr-2"></i>{{ $char->dislikes ?: 0 }}</button>
                                                                </form>
                                                            </div>
                                                        </div>
@endswitch
                                                    </div>
@endif
@if(!Auth::check())
                                                    <hr class="text-white">
                                                    <h5>Você precisa estar logado para deixar seu Like ou Deslike.</h5>
                                                    <div class="d-flex justify-content-center align-items-center gap-3">
                                                        <span class="badge bg-primary border mr-2"><i class="fa-2x i-Like-2 mr-2"></i>{{ $char->likes ?: 0 }}</span>
                                                        <span class="badge bg-primary border ml-2"><i class="fa-2x i-Unlike-2 mr-2"></i>{{ $char->dislikes ?: 0 }}</span>
                                                    </div>
@endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <div><a href="{{ route('chars') }}" class="btn btn-a-link-1 text-bold ml-2">&xlarr;</span>&nbsp; Voltar</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
