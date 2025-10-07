        <aside class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div class="logo-icon"><a href="{{ route('dashboard') }}"><img src="{{ asset('images/corp/crystalcorp.png') }}" class="logo-img" alt=""></a></div>
                <div class="logo-name flex-grow-1"><h5 class="mb-0">CrystalCorp</h5></div>
                <div class="sidebar-close"><span class="material-icons-outlined">close</span></div>
            </div>
            <div class="sidebar-nav">
                <ul class="metismenu" id="sidenav">
                    <li class="menu-label">Paínel de Usuário</li>
                    <li>
                        <a href="{{ route('profile.show') }}">
                            <div class="parent-icon"><i class="bx-sm material-icons-outlined">home</i></div>
                            <div class="menu-title">Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-label">Imagens</li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0)">
                            <div class="parent-icon"><i class="bx bx-sm bx-images"></i></div>
                            <div class="menu-title">Galeria</div>
                        </a>
                        <ul>
                            <li><a href="{{ route('gallery.index') }}"><i class="material-icons-outlined">arrow_right</i>Galeria</a></li>
                            <li><a href="{{ route('gallery.upload') }}"><i class="material-icons-outlined">arrow_right</i>Upload</a></li>
                        </ul>
                    </li>
                    <li class="menu-label">CrystalCorp</li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0)">
                            <div class="parent-icon"><i class="bx-sm lni lni-apartment"></i></div>
                            <div class="menu-title">Personagens</div>
                        </a>
                        <ul>
                            <li><a href="{{ route('chars.index') }}"><i class="material-icons-outlined">arrow_right</i>Personagens</a></li>
                            <li><a href="{{ route('char.create') }}"><i class="material-icons-outlined">arrow_right</i>Novo Personagem</a></li>
                        </ul>
                    </li>
@if (Auth::user()->level != 'user')
                    <li class="menu-label">Ferramentas</li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0)">
                            <div class="parent-icon"><i class="bx-sm i-File-Horizontal-Text"></i></i></div>
                            <div class="menu-title">Publicações</div>
                        </a>
                        <ul>
                            <li><a href="{{ route('post.index') }}"><i class="material-icons-outlined">arrow_right</i>Listar Publicações</a></li>
                            <li><a href="{{ route('post.create') }}"><i class="material-icons-outlined">arrow_right</i>Nova Publicação</a></li>
                            <li><a href="{{ route('category.index') }}"><i class="material-icons-outlined">arrow_right</i>Listar Categorias</a></li>
                            <li><a href="javascript:void(0)"><i class="material-icons-outlined">arrow_right</i>Listar Comentários</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0)">
                            <div class="parent-icon"><i class="fa-2x i-Youtube"></i></div>
                            <div class="menu-title">Links do YouTube</div>
                        </a>
                        <ul>
                            <li><a href="{{ route('video.index') }}"><i class="material-icons-outlined">arrow_right</i>Links Cadastrados</a></li>
                            <li><a href="{{ route('video.upload') }}"><i class="material-icons-outlined">arrow_right</i>Cadastrar Link</a></li>
                        </ul>
                    </li>
                    <li class="menu-label">utilitários</li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0)">
                            <div class="parent-icon"><i class="material-icons-outlined">view_agenda</i></div>
                            <div class="menu-title">Ícones</div>
                        </a>
                        <ul>
                            <li><a href="{{ route('icons.boxicons') }}"><i class="material-icons-outlined">arrow_right</i>Boxicons</a></li>
                            <li><a href="{{ route('icons.fontawesome') }}"><i class="material-icons-outlined">arrow_right</i>Font Awesome</a></li>
                            <li><a href="{{ route('icons.iconsmind') }}"><i class="material-icons-outlined">arrow_right</i>IconsMind</a></li>
                            <li><a href="{{ route('icons.lineicon') }}"><i class="material-icons-outlined">arrow_right</i>Line Icons</a></li>
                            <li><a href="icons-feather-icons.html"><i class="material-icons-outlined">arrow_right</i>Feather Icons</a></li>
                        </ul>
                    </li>
@if (Auth::user()->level === 'admin')
                    <li>
                        <a href="{{ route('user.index') }}">
                            <div class="parent-icon"><i class="material-icons-outlined">person</i></div>
                            <div class="menu-title">Usuários</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <div class="parent-icon"><i class="material-icons-outlined">help_outline</i></div>
                            <div class="menu-title">FAQ</div>
                        </a>
                    </li>
                    <li>
                        <a href="timeline.html">
                            <div class="parent-icon"><i class="material-icons-outlined">join_right</i></div>
                            <div class="menu-title">Timeline</div>
                        </a>
                    </li>
                    <li class="menu-label">Others</li>
                    <li>
                        <a class="has-arrow" href="javascript:void(0)">
                            <div class="parent-icon"><i class="material-icons-outlined">face_5</i></div>
                            <div class="menu-title">Menu Levels</div>
                        </a>
                        <ul>
                            <li>
                                <a class="has-arrow" href="javascript:void(0)"><i class="material-icons-outlined">arrow_right</i>Level One</a>
                                <ul>
                                    <li>
                                        <a class="has-arrow" href="javascript:void(0)"><i class="material-icons-outlined">arrow_right</i>Level Two</a>
                                        <ul>
                                            <li><a href="javascript:void(0)"><i class="material-icons-outlined">arrow_right</i>Level Three</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascrpt:void(0)">
                            <div class="parent-icon"><i class="material-icons-outlined">support</i></div>
                            <div class="menu-title">Support</div>
                        </a>
                    </li>
@endif
@endif
                </ul>
            </div>
        </aside>
