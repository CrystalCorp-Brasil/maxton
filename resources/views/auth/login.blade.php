@extends('layouts.adminLayout',['headTitle'=>'Autenticação','pageActive'=>'auth'])
@section('content')
        <div class="section-authentication-cover">
            <div class="">
                <div class="row g-0">
                    <div class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex border-end bg-transparent">
                        <div class="card rounded-0 mb-0 border-0 shadow-none bg-transparent bg-none">
                            <div class="card-body"><img src="{{ asset('images/corp/login.png') }}" class="img-fluid auth-img-cover-login" width="650" alt="Grupo CrystalCorp"></div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center border-top border-4 border-primary border-gradient-2">
                        <div class="card rounded-0 m-3 mb-0 border-0 shadow-none bg-none">
                            <div class="card-body p-sm-5">
                                <a href="{{ route('home') }}"><img src="{{ asset('images/admin/crystalcorp2.png') }}" class="mb-4" width="145" alt="Grupo CrystalCorp"></a>
                                <h4 class="fw-bold">Bem vindo</h4>
                                <p class="mb-0">Digite sua credenciais para acessar sua conta</p>
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
                                    <form class="row g-3" method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">E-mail ou Usuário</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fad fa-user"></i></span>
                                                <input type="text" class="form-control" id="inputEmailAddress" name="login" placeholder="E-mail ou Usuário">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Senha</label>
                                            <div class="input-group" id="show_hide_password">
                                                <span class="input-group-text fad fa-key" style="padding-top: 10px"></span>
                                                <input type="password" class="form-control" id="inputChoosePassword" name="password" placeholder="Digite a senha">
                                                <a href="javascript:;" class="input-group-text bg-transparent"><i class="bi bi-eye-slash-fill"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                                <label class="form-check-label" for="flexSwitchCheckChecked">Lembrar Me</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-end"><a href="{{ route('password.request') }}">Esqueceu a senha?</a></div>
                                        <div class="col-12">
                                            <div class="d-grid"><button type="submit" class="btn btn-grd-deep-blue">Login</button></div>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-start">
                                                <p class="mb-0">Ainda não tem uma conta? <a href="{{ route('register') }}">Registre-se aqui</a></p>
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
