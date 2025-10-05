@extends('admin.layouts.layout',['headTitle'=>'Autenticação','pageActive'=>'auth','classBody'=>'pace-done','mainClass'=>''])
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
                                <h4 class="fw-bold">Esqueceu a senha?</h4>
                                <p class="mb-0">Digite o e-mail registrado para resetar a senha</p>
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
                                    <form method="POST" action="{{ route('password.email') }}" class="row g-3">
                                        @csrf

                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">E-mail</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon3"><i class="fad fa-envelope"></i></span>
                                                <input class="form-control" type="email" id="inputEmailAddress" name="email"  placeholder="Digite o e-mail cadastrado" value="{{ old('email') }}" autocomplete="email" autofocus>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-grd-deep-blue">Enviar E-mail</button>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <a href="{{ route('login') }}" class="btn btn-light">Logar</a>
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
