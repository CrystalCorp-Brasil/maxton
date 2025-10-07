@extends('site.layouts.layout')
@section('headTitle')Perguntas Frequentes @endsection
@section('content')
            @include('site.layouts.header')
            <section class="font-secondary py-0">
                <div class="container-fluid px-5 bg-trans-crystal pt-4 mt-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between"><h1 class="fs-6 mb-2">FAQs</h1></div>
                        </div>
                    </div>
                    <div class="checkout-tabs">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-gen-ques-tab" data-bs-toggle="pill" href="#v-pills-gen-ques" role="tab" aria-controls="v-pills-gen-ques" aria-selected="true"><i class= "bx bx-question-mark d-block check-nav-icon mt-4 mb-2"></i><p class="fw-bold mb-4">Perguntas Gerais</p></a>
                                    <a class="nav-link" id="v-pills-privacy-tab" data-bs-toggle="pill" href="#v-pills-privacy" role="tab" aria-controls="v-pills-privacy" aria-selected="false"><i class= "bx bx-check-shield d-block check-nav-icon mt-4 mb-2"></i><p class="fw-bold mb-4">CrystalCorp Brasil</p></a>
                                    <a class="nav-link" id="v-pills-support-tab" data-bs-toggle="pill" href="#v-pills-support" role="tab" aria-controls="v-pills-support" aria-selected="false"><i class= "bx bx-support d-block check-nav-icon mt-4 mb-2"></i><p class="fw-bold mb-4">Suporte</p></a>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-gen-ques" role="tabpanel" aria-labelledby="v-pills-gen-ques-tab">
                                        <h4 class="card-title text-light mb-5">Perguntas Gerais</h4>
                                        <div class="faq-box d-flex mb-4">
                                            <div class="flex-shrink-0 me-3 faq-icon"><i class="bx bx-help-circle font-size-20 text-success"></i></div>
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-15">O que são Facções?</h5>
                                                <p class="text-muted text-justify">Isso está mais para personalidade de personagem, ao criar um você pode escolher entre ser Herói ou Vilão. Até o episódio 34 (Justice League Dark/JLD) Hubs (Watchtower/Hall of Doom), missões (On Duty) e estilos (Styles) eram divididos pelas facções.</p>
                                            </div>
                                        </div>
                                        <div class="faq-box d-flex mb-4">
                                            <div class="flex-shrink-0 me-3 faq-icon"><i class="bx bx-help-circle font-size-20 text-success"></i></div>
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-15">O que são Mentores?</h5>
                                                <p class="text-muted text-justify">Os Mentores serão definidos dependendo da facção escolhida. Divididos em 3 tipos: Meta (Superman/Lex Luthor), Tech (Batman/Joker) e Magic (Wonder Woman/Circe).</p>
                                            </div>
                                        </div>
                                        <div class="faq-box d-flex mb-4">
                                            <div class="flex-shrink-0 me-3 faq-icon"><i class="bx bx-help-circle font-size-20 text-success"></i></div>
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-15">Quais os tipos de Movimentos?</h5>
                                                <p class="text-muted text-justify">O game possui quatro tipos de Movimentos: Super Speed, Acrobatics, Flight e Skimming. Cada Movimento possui sua Skill Tree para evoluir. Você pode mudar o Movimento adquirindo um Respect Token no Marketplace por 1000 DB cash.</p>
                                            </div>
                                        </div>
                                        <div class="faq-box d-flex mb-4">
                                            <div class="flex-shrink-0 me-3 faq-icon"><i class="bx bx-help-circle font-size-20 text-success"></i></div>
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-15">Quais são os tipos de Poderes?</h5>
                                                <p class="text-muted text-justify">O game conta com 15 poderes sendo 5 Tanks (Tanques), 5 Controllers (Controladores) e 5 Healers (Curadores). Todos são DPS (Dano). Tanks: Fire (Fogo), Ice (Gelo), Earth (Terra), Rage (Raiva/Ira) e Atomic (Atômico). Controllers: Gadgets (Bugigangas), Mental, Light (Luz), Quantum, Munitions (Munições). Healer: Nature (Natureza), Sorcery (Magia), Electric (Elétrico), Celestial e Water (Água). Você pode mudar o Poder adquirindo um Respect Token no Marketplace por 1000 DB cash.</p>
                                            </div>
                                        </div>
                                        <div class="faq-box d-flex mb-4">
                                            <div class="flex-shrink-0 me-3 faq-icon"><i class="bx bx-help-circle font-size-20 text-success"></i></div>
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-15">O que devo fazer primeiro?</h5>
                                                <p class="text-muted text-justify">Seguir o modo história até o nível 30 é seu objetivo inicial. Siga as missões principais de seu Journal (Diário) e procure completar as missões secundárias para experiência extra e aquisição de Source Marks (Marcas de Origem) moeda do game para vários itens essenciais.</p>
                                            </div>
                                        </div>
                                        <div class="faq-box d-flex">
                                            <div class="flex-shrink-0 me-3 faq-icon"><i class="bx bx-help-circle font-size-20 text-success"></i></div>
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-15">Nível 30. E agora?</h5>
                                                <p class="text-muted text-justify">Agora é trabalhar para evoluir CR (Combat Rating) e SP (Stats Points), Artefacts (Artefatos), Augments (Ampliadores) e Allies (Aliados). Adquirir Base, carregar Geradores, habilitar Sidekicks/Henchmen, Orbital Strike, Supply Drop e Tatical Mods. Continuar a cumprir as missões de seu Journal (Diário) e os Eventos que são por temporadas.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-privacy" role="tabpanel" aria-labelledby="v-pills-privacy-tab">
                                        <h4 class="card-title text-light mb-5">CrystalCorp Brasil</h4>
                                        <div class="faq-box d-flex mb-4">
                                            <div class="flex-shrink-0 me-3 faq-icon"><i class="bx bx-help-circle font-size-20 text-success"></i></div>
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-15">O que é CrystalCorp Brasil?</h5>
                                                <p class="text-muted text-justify">Fundada para ajudar jogadores brasileiros no game. A CrystalCorp possui League Hall (Salão da Liga) nas 2 Facçções: Heróis (CrystalCorp Brasil) e Vilões (CrystalCorp Dark). </p>
                                            </div>
                                        </div>
                                        <div class="faq-box d-flex mb-4">
                                            <div class="flex-shrink-0 me-3 faq-icon"><i class="bx bx-help-circle font-size-20 text-success"></i></div>
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-15">Quem são os responsáveis?</h5>
                                                <p class="text-muted text-justify">A Presidente da CrystalCorp Brasil é a Miss FireCrystal e a Presidente da CrystalCorp Dark é a Lady LightStroke.</p>
                                            </div>
                                        </div>
                                        <div class="faq-box d-flex mb-4">
                                            <div class="flex-shrink-0 me-3 faq-icon"><i class="bx bx-help-circle font-size-20 text-success"></i></div>
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-15">Quais são os requisitos para associação?</h5>
                                                <p class="text-muted text-justify">Em ambas as Leagues (Ligas) não há requisitos para associação. Cada novo integrante é atribuido automticamente ao Rank de 'Candidato' podendo evoluir de Rank conforme sua evolução no game.</p>
                                            </div>
                                        </div>
                                        <div class="faq-box d-flex mb-4">
                                            <div class="flex-shrink-0 me-3 faq-icon"><i class="bx bx-help-circle font-size-20 text-success"></i></div>
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-15">O que são Prestige Points?</h5>
                                                <p class="text-muted text-justify">Essa é a moeda que a Liga utiliza para aquisição do League Hall (Salão da Liga), Banks (Bancos), Statuary (Estatuários) e Buffs mensal.</p>
                                            </div>
                                        </div>
                                        <div class="faq-box d-flex">
                                            <div class="flex-shrink-0 me-3 faq-icon"><i class="bx bx-help-circle font-size-20 text-success"></i></div>
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-15">Como posso contribuir?</h5>
                                                <p class="text-muted text-justify">Você pode contribuir doando Gears e Itens de Base. Alguns itens de kraft também contribuem com Prestige Points (Pontos de Prestigio). Adquirindo, decorando e visitando sua base semanalmente. Quanto mais itens na base mais Prestige Points (Pontos de Prestigio). Obs.: o Gerador deve ter carga. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-support" role="tabpanel" aria-labelledby="v-pills-support-tab">
                                        <h4 class="card-title text-light mb-5">Suporte</h4>
                                        <div class="faq-box d-flex mb-4">
                                            <div class="flex-shrink-0 me-3 faq-icon"><i class="bx bx-help-circle font-size-20 text-success"></i></div>
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-15">Onde posso conseguir ajuda?</h5>
                                                <p class="text-muted text-justify">Você pode conseguir ajuda no próprio game pelo chat da Liga ou pelo chat exclusivo da Liga: CrystalCorp BR. Utilize no chat do game o comando '/chatjoin CrystalCorpBR'. Digite igual ao que está escrito para não entrar em outro canal.</p>
                                            </div>
                                        </div>
                                        <div class="faq-box d-flex mb-4">
                                            <div class="flex-shrink-0 me-3 faq-icon"><i class="bx bx-help-circle font-size-20 text-success"></i></div>
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-15">Outros canais de suporte?</h5>
                                                <p class="text-muted text-justify">Também temos canal no <a href="https://discord.gg/jsB5ybfR" target="_blank">Discord</a> e no <a href="https://www.youtube.com/@crystalcorpbrasil4353" target="_blank">Youtube</a>.</p>
                                            </div>
                                        </div>
                                        <div class="faq-box d-flex mb-4">
                                            <div class="flex-shrink-0 me-3 faq-icon"><i class="bx bx-help-circle font-size-20 text-success"></i></div>
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-15">Posso me comunicar por e-mail?</h5>
                                                <p class="text-muted text-justify">Sim, voce pode nos enviar e-mail para: admin@crystalcorp.com.br.</p>
                                            </div>
                                        </div>
                                        <div class="faq-box d-flex mb-4">
                                            <div class="flex-shrink-0 me-3 faq-icon"><i class="bx bx-help-circle font-size-20 text-success"></i></div>
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-15">Em qualquer horário?</h5>
                                                <p class="text-muted text-justify">No game quase sempre em qualquer horário tem um ou mais integrantes online. As obrigações e particularidades de cada um podem influenciar na disponibilidade de alguns jogadores, mas na maior parte do tempo, sempre encontrará um integrante online.</p>
                                            </div>
                                        </div>
                                        <div class="faq-box d-flex">
                                            <div class="flex-shrink-0 me-3 faq-icon"><i class="bx bx-help-circle font-size-20 text-success"></i></div>
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-15">Qual tipo de ajuda posso ter?</h5>
                                                <p class="text-muted text-justify">Sobre o game, qualquer dúvida será explicada e esclarecida na maioria das vezes. Problemas técnicos de instalação ou desempenho terão sugestões em como solucionar. Esses são suscetiveis a vários fatores.</p>
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
