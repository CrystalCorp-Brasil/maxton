@extends('site.layouts.layout')
@section('headTitle')Sobre Nós @endsection
@section('content')
            <section class="p-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 px-0 order-lg-2">
                            <div class="sticky-top vh-lg-100 py-9">
                                <div class="bg-holder" style="background-image:url({{ asset('images/web/crystalcorp/miss-firecrystal-003.jpg') }});" data-zanim-trigger="scroll" data-zanim-lg='{"animation":"zoom-out-slide-left","delay":0.4}'></div>
                            </div>
                        </div>
                        <div class="col-lg-6 py-5">
                            <div class="row h-100 flex-center">
                                <div class="col-lg-10">
                                    <div class="mb-5">
                                        <div class="overflow-hidden">
                                            <h1 class="text-decoration-underline fs-5 fs-md-4 mb-0" data-zanim-xs='{"delay":0.4}' data-zanim-trigger="scroll">nossa história</h1>
                                        </div>
                                    </div>
                                    <div class="px-3 py-5  bg-trans-crystal pt-4 mt-3">
                                        <p class="dropcap text-justify" data-zanim-xs='{"delay":0.5}' data-zanim-trigger="scroll">A <span class="text-orange">CrystalCorp Brasil</span> foi criada no ano de <span class="text-orange">2015</span> com o intuito de ajudar aos novos jogadores aprenderem os principios básicos do jogo. Inicialmente composta apenas por personagens do fundador: <span class="text-green">nhojunior</span>. Foram mais de 2 anos na aquisição de <span class="text-info">Prestige Points</span> para aquisição do <span class="text-info">Hall da Liga</span> e dos <span class="text-info">estatuários</span>. Com passar dos anos, tivemos contribuições de outros <span class="text-info">players</span> que colaboraram na manutenção dos <span class="text-info">Buffs</span>. Em <span class="text-orange">2021</span>, criamos a <span class="text-orange">CrystalCorp Dark</span>, mesmo principios e ideais só que para <span class="text-info">vilões</span>. Atualmente as duas ligas estão com vários integrantes ativos e colaboradores com os principios iniciais de suas fundações.</p>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-6"><img class="rounded img-fluid" src="{{ asset('images/web/crystalcorp/about-02.jpg') }}" alt="" data-zanim-xs='{"delay":0.5,"animation":"zoom-in"}' data-zanim-trigger="scroll" /></div>
                                        <div class="col-6"><img class="rounded img-fluid" src="{{ asset('images/web/crystalcorp/about-01.jpg') }}" alt="" data-zanim-xs='{"delay":0.9,"animation":"zoom-in"}' data-zanim-trigger="scroll" /></div>
                                    </div>
                                    <blockquote class="blockquote text-center my-6 border p-5 px-xl-7 rounded" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">
                                        <p class="blockquote-content bg-trans-crystal">Lembro-me da insegurança que tive ao ter conciência dos meus poderes. O medo e a insegurança eram constantes na minha vida. Com ajuda de minha mentora e amiga, Professora Crystal, aprendi a controlar e usá-los. A CrystalCorp Brasil oferece essa ajuda para todos.</p>
                                        <footer class="blockquote-footer mt-0"><span class="text-body-highlight">Miss FireCrystal,</span> C.E.O. CrystalCorp Brasil.</footer>
                                    </blockquote>
                                </div>
                                <div class="col-lg-10"><img class="rounded img-fluid" src="{{ asset('images/web/crystalcorp/about-04.jpg') }}" alt="" data-zanim-xs='{"animation":"zoom-in","delay":0.1}' data-zanim-trigger="scroll"/>
                                    <div class="row gx-4 mt-6">
                                        <div class="col-md col-lg-12 col-xl-6 px-3 py-5 bg-trans-crystal mt-3">
                                            <div class="overflow-hidden">
                                                <h6 class="text-uppercase ls" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">crescimento</h6>
                                            </div>
                                            <div class="overflow-hidden">
                                                <p class="text-justify" data-zanim-xs='{"delay":0.2}' data-zanim-trigger="scroll">"Com o apoio de minha mentora e amiga, <span class="text-green">Professora Crystal</span>, passei a compreender e controlar meus poderes. Alguns mais tarde, junto com ela e minhas irmãs, <span class="text-green">Miss BlackCrystal</span> e <span class="text-green">Miss WaterCrystal</span>, fundamos a <span class="text-orange">CrystalCorp Brasil</span> para ajudar as pessoas que despertaram seu potencial adormecido e desconhecido." - Miss FireCrystal</p>
                                            </div>
                                        </div>
                                        <div class="col-md col-lg-12 col-xl-6 px-3 py-5 bg-trans-crystal mt-3">
                                            <div class="overflow-hidden">
                                                <h6 class="text-uppercase ls" data-zanim-xs='{"delay":0.1}' data-zanim-trigger="scroll">constatação</h6>
                                            </div>
                                            <div class="overflow-hidden">
                                                <p class="text-justify" data-zanim-xs='{"delay":0.2}' data-zanim-trigger="scroll">"Gostaria que tudo pudesse ser como antes. Nos 3 brincando juntas no quintal de casa. Zoando uma e outra, fazendo travessuras, deixando nossos pais enlouquecidos. E no final do dia, todos juntos na sala, contando histórias, assistindo, jogando. Mas o mundo mudou. E agora só me resta as  recordações de nossa infância!" - Miss WaterCrystal</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
