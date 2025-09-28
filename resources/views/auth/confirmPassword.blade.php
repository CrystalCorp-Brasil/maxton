@extends('layouts.adminLayout',['headTitle'=>'Autenticação','pageActive'=>'auth'])
@section('content')
        <div class="auth-layout-wrap" style="background-image: url({{ asset('images/BGHome.jpg') }})">
            <div class="auth-content">
                <div class="card o-hidden">
                    <div class="row">
                        <div class="col-md-10 offset-1">
                            <div class="p-4">
                                <div class="auth-logo text-center mb-4"><a href="{{ route('login') }}"><img src="{{ asset('images/crystalcorp.png') }}" alt="CrystalCorp"/></a></div>
                                <div class="mb-4 text-sm text-justify">{{ __('This is a secure area of the application. Please confirm your password before continuing.') }}</div>
                                <form method="POST" action="{{ route('password.confirm') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label text-primary" for="password">Senha</label>
                                        <div class="col-sm-9">
                                            <input type="password" id="password" name="password" class="form-control bg-light" placeholder="Senha" required autocomplete="current-password"/>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn w-100 btn-outline-warning btn-rounded mt-3">{{ __('Confirm') }}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('scripts')
        @include('components.mySweetAlertMessages')
@endsection

