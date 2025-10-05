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
                        <div class="col-xl-5 py-5 card text-justify p-3">
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
                                                    <h6 class="text-uppercase ls mt-4">Deixe seu like.</h6>
                                                    <div class="mt-3 fs-10">
@auth
@if ($char->isLikedBy(auth()->user()))
                                                        <div class="d-flex justify-content-center align-items-center gap-3">
                                                            <div>
                                                                <form action="{{ route('like.char',$char->id) }}" method="POST">
                                                                    @csrf

                                                                    <button class="btn btn-success btn-xs border mx-2" type="submit"><i class="fa-2x i-Like-2 mr-2"></i>{{ $char->likes ?: 0 }}</button>
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
@else
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

                                                                    <button class="btn btn-danger btn-xs border mx-2" type="submit"><i class="fa-2x i-Unlike-2 mr-2"></i>{{ $char->likes ?: 0 }}</button>
                                                                </form>
                                                            </div>
                                                        </div>
@endif
@else
                                                        <span class="btn btn-success btn-xs border mr-2"><i class="fa-2x i-Like-2 mr-2"></i>{{ $char->likes ?: 0 }}</span>
                                                        <span class="btn btn-danger btn-xs border ml-2"><i class="fa-2x i-Unlike-2 mr-2"></i>{{ $char->dislikes ?: 0 }}</span>
                                                        <p><small>Você precisa estar logado para deixar seu Like ou deslike.</small></p>
@endauth
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="text-white">
                                    <button class="btn btn-a-link-1 text-bold ml-2" onclick="history.back()"><span class="d-inline-block ms-1">&xlarr;</span>&nbsp; Voltar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
