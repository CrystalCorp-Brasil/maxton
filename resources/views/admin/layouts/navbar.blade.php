            <nav class="navbar navbar-expand align-items-center gap-4">
                <div class="btn-toggle"><a href="javascript:;"><i class="material-icons-outlined">menu</i></a></div>
                @include('admin.layouts.search')
                <ul class="navbar-nav gap-1 nav-right-links align-items-center">
                    <li class="nav-item d-lg-none mobile-search-btn"><a class="nav-link" href="javascript:;"><i class="material-icons-outlined">Pesquisar</i></a></li>
                    @include('admin.layouts.flags')
                    @include('admin.layouts.megamenu')
                    @include('admin.layouts.apps')
                    @include('admin.layouts.notifications')
                    <li class="nav-item d-md-flex d-none">
                        <a class="nav-link position-relative" data-bs-toggle="offcanvas" href="#offcanvasCart"><i class="material-icons-outlined">shopping_cart</i><span class="badge-notify">8</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="javascrpt:;" class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown"><img src="{{ asset(Auth::user()->image) }}" class="rounded-circle p-1 border" width="45" height="45" alt=""></a>
                        <div class="dropdown-menu dropdown-user dropdown-menu-end shadow">
                            <a class="dropdown-item  gap-2 py-2" href="javascript:;">
                                <div class="text-center">
                                    <img src="{{ asset(Auth::user()->image) }}" class="rounded-circle p-1 shadow mb-3" width="90" height="90" alt="">
                                    <h5 class="user-name mb-0 fw-bold text-capitalize">olá, {{ Auth::user()->username }}</h5>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{ route('profile.edit') }}"><i class="material-icons-outlined">person_outline</i>Ver Perfil</a>
                            <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{ route('profile.delete') }}"><i class="material-icons-outlined">delete</i>Excluir Conta</a>
                            <hr class="dropdown-divider">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <button class="btn dropdown-item d-flex align-items-center gap-2 py-2" type="submit"><i class="material-icons-outlined">power_settings_new</i>Encerrar</button>
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
