        <nav class="fancynavbar fancynavbar-expand-lg" data-zanim-lg='{"from":{"opacity":1,"x":70},"to":{"opacity":1,"x":0},"ease":"CubicBezier","duration":0.8,"delay":0.3}' data-zanim-xs='{"from":{"opacity":1,"y":-37},"to":{"opacity":1,"y":0},"ease":"CubicBezier","duration":0.8,"delay":0.3}' data-zanim-trigger="scroll" data-exclusive="true">
            <div class="fancynavbar-togglerbar">
                <a class="fancynavbar-brand" href="{{  route('home') }}" data-bs-toggle="tooltip" data-bs-placement="left" title="Home">
                    <img class="fancynavbar-brand-img" src="{{ asset('images/corp/crystalcorp.png') }}" alt="Grupo CrystalCorp" width="70" height="70" data-zanim-lg='{"from":{"opacity":0,"x":45},"to":{"opacity":1,"x":0},"ease":"CubicBezier","duration":0.8,"delay":0.4}' data-zanim-trigger="scroll" />
                </a>
                <div class="fancynavbar-toggler">
                    <svg class="fancynavbar-toggler-icon" viewBox="0 0 70 70" xmlns="http://www.w3.org/2000/svg" data-zanim-lg='{"from":{"opacity":0,"x":45},"to":{"opacity":1,"x":0},"ease":"CubicBezier","duration":0.8,"delay":0.5}' data-zanim-trigger="scroll">
                        <path id="path-top" d="M20,25c0,0,22,0,30,0c16,0,18.89,40.71-.15,21.75C38.7,35.65,19.9,16.8,19.9,16.8"></path>
                        <path id="path-middle" d="M20,32h30"></path>
                        <path id="path-bottom" d="M19.9,46.98c0,0,18.8-18.85,29.95-29.95C68.89-1.92,66,38.78,50,38.78c-8,0-30,0-30,0"></path>
                    </svg>
                </div>
                <div class="fancynavbar-addon fancynavbar-addon-height" data-zanim-lg='{"from":{"opacity":1,"x":45},"to":{"opacity":1,"x":0},"ease":"CubicBezier","duration":0.8,"delay":0.4}' data-zanim-trigger="scroll">
@auth
@if ($user->level =='user')
                    <a class="fancynavbar-addon-item" href="{{ route('user.show',$user) }}"><span><i class="fad fa-desktop fa-2x px-3" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Painel de Usuário"></i></span></a><br/>
@else
                    <a class="fancynavbar-addon-item" href="{{ route('dashboard') }}"><span><i class="fad fa-desktop fa-2x px-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Painel de Usuário"></i></span></a><br/>
@endif
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button class="btn btn-corp-b" type="submit"><span><i class="bx bx-lg bx-log-out px-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Logout"></i></span></button>
                    </form>
@else
                    <a class="fancynavbar-addon-item" href="{{ route('login') }}"><span><i class="bx bx-lg bx-log-in px-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Login"></i></span></a>
@endauth
                </div>
            </div>
            <div class="fancynavbar-collapse">
                <ul class="fancynavbar-nav">
                    <li class="fancynav-item fancy-dropdown">
                        <a class="fancynav-link fancy-dropdown-toggle" href="JavaScript:void(0)"><span class="fancynav-link-content">páginas</span></a>
                        <div class="fancy-dropdown-menu">
                            <div class="row pb-4 pt-3">
                                <div class="col-sm-auto pe-4 ps-2">
                                    <a class="fancy-dropdown-item" href="{{ route('projects') }}"> Projetos</a>
                                    <a class="fancy-dropdown-item" href="{{ route('imageGallery') }}"> Galeria</a>
                                </div>
                                <div class="col-sm-auto pe-4">
                                    <a class="fancy-dropdown-item" href="{{ route('editorials') }}"> Editoriais</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="fancynav-item fancy-dropdown">
                        <a class="fancynav-link fancy-dropdown-toggle" href="JavaScript:void(0)"><span class="fancynav-link-content">dc universe online</span></a>
                        <div class="fancy-dropdown-menu">
                            <div class="row pb-2 pt-3">
                                <div class="col-sm-auto mb-3">
                                    <div class="row">
                                        <div class="col-sm-auto pe-4 ps-2">
                                            <a class="fancy-dropdown-item" href="{{ route('walkthrough') }}"> Guia & Walkthrough</a>
                                        </div>
                                        <div class="col-sm-auto pe-4">
                                            <a class="fancy-dropdown-item" href=""> Episódios</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="fancynav-item fancy-dropdown">
                        <a class="fancynav-link fancy-dropdown-toggle" href="JavaScript:void(0)"><span class="fancynav-link-content">universo crystalcorp</span></a>
                        <div class="fancy-dropdown-menu">
                            <div class="row pb-4 pt-3">
                                <div class="col-auto ps-2">
                                    <a class="fancy-dropdown-item" href="{{ route('chars') }}"> Personagens</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="fancynav-item"><a class="fancynav-link" href="{{ route('faqs') }}"><span class="fancynav-link-content">faqs</span></a></li>
                    <li class="fancynav-item"><a class="fancynav-link" href="{{  route('termsOfUse') }}"><span class="fancynav-link-content">termos de uso</span></a></li>
                    <li class="fancynav-item"><a class="fancynav-link" href="{{  route('privacyPolicy') }}"><span class="fancynav-link-content">política de privacidade</span></a></li>
                    <li class="fancynav-item"><a class="fancynav-link" href="{{ route('contact') }}"><span class="fancynav-link-content">contato</span></a></li>
                    <li class="fancynav-item"><a class="fancynav-link" href="{{  route('about') }}"><span class="fancynav-link-content">sobre nós</span></a></li>

                </ul>
            </div>
        </nav>
