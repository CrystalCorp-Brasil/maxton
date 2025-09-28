@extends('layouts.adminLayout',['headTitle'=>'Autenticação','pageActive'=>'auth'])
@section('content')
        <div class="mx-3 mx-lg-0" style="margin-top: 6%">
            <div class="card my-5 col-xl-9 col-xxl-8 mx-auto rounded-4 overflow-hidden p-4">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6 d-flex">
                        <div class="card-body">
                            <img src="{{ asset('images/admin/crystalcorp2.png') }}" class="mb-4" width="145" alt="Grupo CrystalCorp">
                            <h4 class="fw-bold">verificação de e-mail</h4>
                            <p class="mb-0 text-justify">{{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}</p>
@if (session('status') == 'verification-link-sent')
                            <div class="alert alert-success border-0 bg-grd-success alert-dismissible fade show mt-3">
                                <div class="d-flex align-items-center">
                                    <div class="font-35 text-white"><span class="material-icons-outlined fs-2">check_circle</span></div>
                                    <div class="ms-3">
                                        <h6 class="mb-0">Concluído</h6>
                                        <div class="text-justify">{{ __('A new verification link has been sent to the email address you provided during registration.') }}</div>
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
@endif
                            <div class="form-body mt-4">
                                <form method="POST" action="{{ route('verification.send') }}" class="row g-3">
                                    @csrf

                                    <div class="col-12">
                                        <label class="col-form-label py-0" for="email">E-mail</label>
                                        <div class="input-group">
                                            <span class="input-group-text px-3" id="basic-addon3"><i class="fad fa-user"></i></span>
                                            <input class="form-control" type="email" id="email" name="email"  placeholder="Email" value="{{ old('email') }}" autocomplete="email" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-12 py-3">
                                        <div class="d-grid gap-2">
                                            <button type="submit" class="btn btn-grd-info">{{ __('Resend Verification Email') }}</button>
                                            <a href="{{ route('login') }}" class="btn btn-light">Login</a>
                                        </div>
                                    </div>
                                </form>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <div class="col-12">
                                        <div class="d-grid gap-2">
                                            <button type="submit" class="btn btn-grd-danger"><i class="far fa-sign-out-alt"></i><span class="ml-2"> Encerrar</span></button>
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
