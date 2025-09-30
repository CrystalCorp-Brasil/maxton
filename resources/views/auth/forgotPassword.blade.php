@extends('admin.layouts.layout',['headTitle'=>'Autenticação','pageActive'=>'auth','classBody'=>'pace-done','mainClass'=>''])
@section('content')
        <div class="section-authentication-cover">
            <div class="">
                <div class="row g-0">
                    <div class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex border-end bg-transparent">
                        <div class="card rounded-0 mb-0 border-0 shadow-none bg-transparent bg-none">
                            <div class="card-body"><img src="{{ asset('images/corp/reset-password.png') }}" class="img-fluid auth-img-cover-login" width="550" alt=""></div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center">
                        <div class="card rounded-0 m-3 mb-0 border-0 shadow-none bg-none">
                            <div class="card-body p-sm-5">
                                <img src="assets/images/logo1.png" class="mb-4" width="145" alt="">
                                <h4 class="fw-bold">Esqueceu a senha?</h4>
                                <p class="mb-0">Digite o e-mail registrado para resetar a senha</p>
                                <div class="form-body mt-4">
                                    <form method="POST" action="{{ route('password.email') }}" class="row g-4">
                                        @csrf

                                        <div class="col-12">
                                            <label class="col-form-label py-0" for="email">E-mail</label>
                                            <div class="input-group">
                                                <span class="input-group-text px-3" id="basic-addon3"><i class="fad fa-user"></i></span>
                                                <input class="form-control" type="email" id="email" name="email"  placeholder="Digite o e-mail cadastrado" value="{{ old('email') }}" autocomplete="email" autofocus>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid gap-2">
                                                <button type="submit" class="btn btn-grd-deep-blue">Enviar E-mail</button>
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
