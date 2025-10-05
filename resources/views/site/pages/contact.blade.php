@extends('site.layouts.layout')
@section('headTitle')Sobre Nós @endsection
@section('styles')
        <link href="{{ asset('css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
            <section class="py-0" id="page-contact">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 bg-body pt-5 pb-4 card">
                            <div class="row h-100 flex-center">
                                <div class="col-lg-8 rounded-3" data-zanim-lg='{"animation":"slide-left","delay":0.6}' data-zanim-trigger="scroll">
                                    <h1 class="text-decoration-underline d-inline-block mb-4 mb-lg-6">contato</h1>
                                    <p class="fw-bold mb-4">E-mail:<span class="ms-2 fw-normal fst-italic"><a class="text-body" href="mailto:admin@crystalcorp.com.br">admin@crystalcorp.com.br</a></span></p>
                                    <h3 class="mt-7">Envie-nos uma mensagem</h3>
                                    <form class="mt-4" method="POST" action="{{ route('sendMail') }}">
                                        @csrf

                                        <div class="col-12 mt-3">
                                            <div class="input-group">
                                                <span class="input-group-text px-3" id="basic-addon3"><i class="fal fa-user text-orange"></i></span>
                                                <input class="form-control" type="text" id="name" name="name"  placeholder="Nome" value="{{ old('name') }}" autocomplete="name" autofocus>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <div class="input-group">
                                                <span class="input-group-text px-3" id="basic-addon3"><i class="fal fa-envelope text-orange"></i></span>
                                                <input class="form-control" type="email" id="email" name="email"  placeholder="Email" value="{{ old('email') }}" autocomplete="email" autofocus>
                                            </div>
                                        </div>
                                        <div class="col-12 my-3">
                                            <div class="input-group">
                                                <span class="input-group-text px-3" id="basic-addon3"><i class="i-File-Horizontal-Text text-orange"></i></span>
                                                <input class="form-control" type="text" id="subject" name="subject"  placeholder="Assunto" value="{{ old('subject') }}" autocomplete="subject" autofocus>
                                            </div>
                                        </div>
                                        <textarea class="form-control mb-3" rows="10" id="message" name="message" placeholder="Sua Mensagem"></textarea>
                                        <div class="col-12">
                                            <div class="d-grid"><button type="submit" class="btn btn-outline-primary border-2 mt-3"><i class="fa fa-paper-plane ms-1"></i>&nbsp;&nbsp;Enviar</button></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 px-0">
                            <div class="sticky-top ovrflow-hidden-y"><div class="swiper-container theme-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide min-vh-lg-100 py-9">
                                        <div class="bg-holder" style="background-image:url({{ asset('images/web/metropolis.jpg') }});"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
@section('scripts')
        <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
        @include('components.mySweetAlertMessages')
@endsection
