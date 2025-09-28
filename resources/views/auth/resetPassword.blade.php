@extends('layouts.adminLayout',['headTitle'=>'Autenticação','pageActive'=>'auth'])
@section('content')
        <div class="mx-3 mx-lg-0" style="margin-top: 6%">
            <div class="card my-5 col-xl-9 col-xxl-8 mx-auto rounded-4 overflow-hidden p-4">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6 d-flex">
                        <div class="card-body">
                            <img src="{{ asset('images/admin/crystalcorp2.png') }}" class="mb-4" width="145" alt="Grupo CrystalCorp">
                            <h4 class="fw-bold">Resetar senha</h4>
                            <p class="mb-0">Recebemos sua solicitação de redefinição de senha. Digite sua nova senha!</p>
                            <div class="form-body mt-4">
                                <form method="POST" action="{{ route('password.store') }}" class="row g-3">
                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                    @csrf

                                    <div class="col-12">
                                        <label class="col-form-label py-0" for="email">E-mail</label>
                                        <div class="input-group">
                                            <span class="input-group-text px-3" id="basic-addon3"><i class="fad fa-user"></i></span>
                                            <input class="form-control" id="email" name="email" type="email" placeholder="E-mail" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username"/>
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
                                        <div class="d-grid gap-2">
                                            <button type="submit" class="btn btn-grd-info">{{ __('Reset Password') }}</button>
                                            <a href="{{ route('login') }}" class="btn btn-light">Logar</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-lg-flex d-none">
                        <div class="p-3 rounded-4 w-100 d-flex align-items-center justify-content-center bg-grd-royal"><img src="{{ asset('images/corp/reset-password.png') }}" class="img-fluid" alt="Grupo CrystalCorp"></div>
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
