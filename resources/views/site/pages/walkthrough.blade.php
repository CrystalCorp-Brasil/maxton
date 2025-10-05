@extends('site.layouts.layout')
@section('headTitle')Guia e Walkthrough @endsection
@section('content')
            <section class="py-0 text-center" id="bigcartel-header">
                <div class="bg-holder overlay overlay-1" style="background-image:url({{ asset('images/web/dcuo/DC-Universe-Online.jpg') }});" data-zanim-xs='{"delay":0.4,"animation":"zoom-out"}' data-zanim-trigger="scroll">
                    <div class="yt-video" data-youtube-embed='{"videoId":"WesAW1f5KoQ","startSeconds":0,"endSeconds":120}'></div>
                </div>
                <div class="container-fluid">
                    <div class="row min-vh-100 flex-center py-8">
                        <div class="col-lg-7" data-zanim-timeline='{"delay":0.6}' data-zanim-trigger="scroll">
                            <img class="img-fluid" src="{{ asset('images/web/dcuo/dcuo_bg.jpg') }}" alt="DC-Universe-Online" data-zanim-xs='{"delay":0,"from":{"opacity":0},"to":{"opacity":0.25}}'/>
                            <div class="overflow-hidden mb-4">
                                <p class="text-justify px-lg-6 font-secondary" data-zanim-xs='{"delay":0}'>DC Universe Online ou DCUO é um jogo de MMO desenvolvido pela Sony Online's Austin studio para PS 3, PS 4, PS 5, PC e Xbox baseado na série de superheróis DC Comics.</p>
                                <p class="text-justify px-lg-6 font-secondary" data-zanim-xs='{"delay":0}'>Todos os vídeos que publicamos tem legendas em português. Se não visualizar a legenda clique no botão do vídeo para habilitá-la.</p>
                            </div>
                            <a class="cursor-pointer" href="#!" data-bigpicture='{"ytSrc":"WesAW1f5KoQ"}'>
                                <svg class="mx-auto d-block" width="50" height="50" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 274.19 274.19" data-zanim-svg='{"duration":2,"ease":"CubicBezier"}' data-zanim-svg-trigger="scroll">
                                    <defs><style>.play-path {fill: none;stroke: #FFAA00;stroke-linecap: round;stroke-linejoin: round;stroke-width: 12px;}</style></defs>
                                    <g><path class="play-path" d="M208.31,29.4A129.12,129.12,0,1,1,137.1,8m-1.48,170.53L199.94,137,104.07,79.46v113"></path></g>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <a class="indicator indicator-down" data-zanim-timeline='{"delay":2}' data-zanim-trigger="scroll" href="#target-down"><span class="indicator-arrow indicator-arrow-one border-300" data-zanim-xs='{"from":{"opacity":0,"y":15},"to":{"opacity":1,"y":-5,"scale":1},"ease":"Back.easeOut","duration":0.4,"delay":0.25}'></span><span class="indicator-arrow indicator-arrow-two border-300" data-zanim-xs='{"from":{"opacity":0,"y":15},"to":{"opacity":1,"y":-5,"scale":1},"ease":"Back.easeOut","duration":0.4,"delay":0.5}'></span></a>
                </div>
            </section>
            <div id="target-down"></div>
            <section class="card">
                <div class="container-fluid px-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="text-decoration-underline d-inline fs-5 fs-md-4">passo a passo</h1>
                            <p class="mt-3 font-secondary text-justify">Essa série de vídeos tutoriais são para os jogadores que estão jogando pela primeira vez DC Universe Online. São as primeiras aventuras do game com legendas em português e um passo a passo do essencial para uma boa evolução.</p>
                        </div>
                    </div>
                    <div class="row mb-5">
@foreach($links as $link)
                        <div class="col-lg-4 mt-5 card p-2"><img class="h-lg-100 w-100 rounded fit-cover" src="{{ asset($link->image) }}" alt="O Plano de Brainiac"/></div>
                        <div class="col-lg-2 mt-5 card p-2">
                            <div class="badge border border-warning text-warning mb-2 font-secondary"><span class="fas fa-star me-1"></span>{{ $link->tag }}</div>
                            <h5 class="my-5">{{ $link->title }}</h5>
                            <p class="lead font-secondary my-3"><small>{{ Str::limit($link->resume,100,'...') }}</small></p>
                            Postado por:
                            <div class="badge border border-info text-info my-2 font-secondary"><span class="fas fa-user me-1"></span>{{ $link->user->username }}</div><br>
                            <div class="text-center"><a class="btn btn-primary w-100 rounded mt-1" href="{{ $link->link }}" target="_blank"><i class="fab fa-youtube-square"></i>&nbsp;&emsp14;assista</a></div>
                        </div>
@endforeach
                    </div>
                    {{ $links->appends(request()->query())->links() }}
                </div>
            </section>
@endsection
