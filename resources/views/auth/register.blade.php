@extends('layouts.adminLayout',['headTitle'=>'Autenticação','pageActive'=>'auth'])
@section('content')
        <div class="section-authentication-cover">
            <div class="">
                <div class="row g-0">
                    <div class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex border-end bg-transparent">
                        <div class="card rounded-0 mb-0 border-0 shadow-none bg-transparent bg-none">
                            <div class="card-body"><img src="{{ asset('images/corp/register.png') }}" class="img-fluid auth-img-cover-login" width="650" alt=""></div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center border-top border-4 border-primary border-gradient-2">
                        <div class="card rounded-0 m-3 mb-0 border-0 shadow-none bg-none">
                            <div class="card-body p-sm-5">
                                <a href="{{ route('home') }}"><img src="{{ asset('images/admin/crystalcorp2.png') }}" class="mb-4" width="145" alt="Grupo CrystalCorp"></a>
                                <h4 class="fw-bold">Bem vindo</h4>
                                <p class="mb-0">Digite sua credenciais para registrar sua conta</p>
                                <div class="row g-3 my-4">
                                    <div class="col-12 col-lg-6">
                                        <button class="btn btn-light py-2 font-text1 fw-bold d-flex align-items-center justify-content-center w-100"><img src="{{ asset('images/dev/google.png') }}" width="20" class="me-2" alt="">&nbsp;Google</button>
                                    </div>
                                    <div class="col col-lg-6">
                                        <button class="btn btn-light py-2 font-text1 fw-bold d-flex align-items-center justify-content-center w-100"><img src="{{ asset('images/dev/facebook.png') }}" width="20" class="me-2" alt="">&nbsp;Facebook</button>
                                    </div>
                                </div>
                                <div class="separator section-padding">
                                    <div class="line"></div>
                                    <p class="mb-0 fw-bold">OU</p>
                                    <div class="line"></div>
                                </div>
                                <div class="form-body mt-4">
                                    <form class="row g-3" method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="col-12">
                                            <label class="col-form-label py-0" for="name">Nome</label>
                                            <div class="input-group">
                                                <span class="input-group-text px-3" id="basic-addon3"><i class="fad fa-user"></i></span>
                                                <input class="form-control" type="name" id="name" name="name"  placeholder="Nome" value="{{ old('name') }}" autocomplete="name" autofocus>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label class="col-form-label py-0" for="username">Nome de Usuário</label>
                                            <div class="input-group">
                                                <span class="input-group-text px-3" id="basic-addon3"><i class="fad fa-user"></i></span>
                                                <input class="form-control" type="username" id="username" name="username"  placeholder="Nome de Usuário" value="{{ old('username') }}" autocomplete="username" autofocus>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label class="col-form-label py-0" for="email">E-mail</label>
                                            <div class="input-group">
                                                <span class="input-group-text px-3" id="basic-addon3"><i class="fad fa-user"></i></span>
                                                <input class="form-control" type="email" id="email" name="email"  placeholder="Email" value="{{ old('email') }}" autocomplete="email" autofocus>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Senha</label>
                                            <div class="input-group" id="show_hide_password">
                                                <span class="input-group-text fad fa-key" style="padding-top: 10px"></span>
                                                <input type="password" class="form-control" id="inputChoosePassword" name="password" placeholder="Senha">
                                                <a href="javascript:;" class="input-group-text bg-transparent"><i class="bi bi-eye-slash-fill"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label class="col-form-label py-0" for="password">Confirme a Senha</label>
                                            <div class="input-group" id="show_hide_password">
                                                <span class="input-group-text fad fa-key" style="padding-top: 10px"></span>
                                                <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirme a Senha" autocomplete="current-password"/>
                                                <a href="javascript:;" class="input-group-text bg-transparent"><i class="bi bi-eye-slash-fill"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                                <label class="form-check-label" for="flexSwitchCheckChecked">Li e concordo com os Termos &amp; Condições</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid"><button type="submit" class="btn btn-grd-deep-blue"><i class="far fa-save"></i>&nbsp;&nbsp;Registrar</button></div>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-start">
                                                <p class="mb-0">Já tem uma conta? <a href="{{ route('login') }}">Logar</a></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('scripts')
        <script>
            $(document).ready(function () {
                $("#show_hide_password a").on('click', function (event) {
                    event.preventDefault();
                    if ($('#show_hide_password input').attr("type") == "text") {
                        $('#show_hide_password input').attr('type', 'password');
                        $('#show_hide_password i').addClass("bi-eye-slash-fill");
                        $('#show_hide_password i').removeClass("bi-eye-fill");
                    } else if ($('#show_hide_password input').attr("type") == "password") {
                        $('#show_hide_password input').attr('type', 'text');
                        $('#show_hide_password i').removeClass("bi-eye-slash-fill");
                        $('#show_hide_password i').addClass("bi-eye-fill");
                    }
                });
            });
        </script>
@endsection
