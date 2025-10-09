@extends('site.layouts.layout')
@section('headTitle')$pageTitle @endsection
@section('styles')
        <style>
            .reaction-buttons button {transition: all 0.3s ease;font-weight: 500;border-width: 2px;position: relative;}
            .reaction-buttons button:hover {transform: scale(1.05);}
            .reaction-buttons button.active {color: #fff !important;transform: scale(1.1);}
            .reaction-buttons .btn-like.active {background-color: #28a745 !important;border-color: #28a745 !important;box-shadow: 0 0 15px rgba(40, 167, 69, 0.5);}
            .reaction-buttons .btn-dislike.active {background-color: #dc3545 !important;border-color: #dc3545 !important;box-shadow: 0 0 15px rgba(220, 53, 69, 0.5);}
            /* Efeito de brilho rápido quando clica */
            .reaction-buttons button.flash {animation: flash 0.4s ease-in-out;}
            @keyframes flash {
                0% { box-shadow: 0 0 0 rgba(255,255,255,0); }
                50% { box-shadow: 0 0 25px rgba(255,255,255,0.8); }
                100% { box-shadow: 0 0 0 rgba(255,255,255,0); }
            }
            /* Partículas (animação flutuante) */
            .reaction-particle {position: absolute;font-size: 1.5rem;opacity: 1;animation: floatUp 1s ease-out forwards;pointer-events: none;z-index: 9999;}
            @keyframes floatUp {
                0% {transform: translateY(0) scale(1);opacity: 1;}
                70% {opacity: 0.8;transform: translateY(-30px) scale(1.3);}
                100% {opacity: 0;transform: translateY(-60px) scale(0.8);}
            }
        </style>
@endsection
@section('content')
            <section class="py-0" id="page-profile">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-7 px-0">
                            <div class="sticky-top overflow-hidden min-vh-50 min-vh-xl-100">
                                <div class="bg-holder" style="background-image:url({{ asset($char->image) }});" data-zanim-trigger="scroll" data-zanim-lg='{"animation":"zoom-out-slide-right","delay":0.4}'></div>
                            </div>
                        </div>
                        <div class="col-xl-5 text-justify bg-trans-crystal">
                            <div class="row h-100">
                                <div class="col-lg-12">
                                    <div class="row justify-content-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                        <div class="col-md-10 col-lg-12 py-5">
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
                                                <meta name="csrf-token" content="{{ csrf_token() }}">
                                                <div class="reaction-buttons d-flex gap-3 align-items-center mt-3" data-type="char" data-slug="{{ $char->slug }}">
                                                    <button type="button" class="btn btn-like {{ $isLiked ? 'btn-success' : 'btn-outline-success' }}" data-type="char" data-slug="{{ $char->slug }}" data-action="like" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $isLiked ? 'Você curtiu isso' : 'Curtir' }}"><i class="bi bi-hand-thumbs-up"></i><span data-count-type="like" data-slug="{{ $char->slug }}">{{ $likesCount }}</span></button>
                                                    <button type="button" class="btn btn-dislike {{ $isDisliked ? 'btn-danger' : 'btn-outline-danger' }}" data-type="char" data-slug="{{ $char->slug }}" data-action="dislike" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $isDisliked ? 'Você não gostou disso' : 'Não curtir' }}"><i class="bi bi-hand-thumbs-down"></i><span data-count-type="dislike" data-slug="{{ $char->slug }}">{{ $dislikesCount }}</span></button>
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
            </section>
@endsection
@section('scripts')
        <script>
            function carregarEstado() {
                const likeBtn = document.querySelector('.btn-like');
                const dislikeBtn = document.querySelector('.btn-dislike');
                if (likeBtn && likeBtn.classList.contains('btn-success')) {
                    likeBtn.classList.add('btn-success');
                    likeBtn.classList.remove('btn-outline-success');
                }
                if (dislikeBtn && dislikeBtn.classList.contains('btn-danger')) {
                    dislikeBtn.classList.add('btn-danger');
                    dislikeBtn.classList.remove('btn-outline-danger');
                }
            }
            document.addEventListener("DOMContentLoaded", carregarEstado);
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', () => {const slug = "{{ $char->slug }}";carregarEstado(slug);});
        </script>
@endsection
