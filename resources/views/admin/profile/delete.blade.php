@extends('admin.layouts.layout',['pageTitle'=>'Excluir Perfil','pageActive'=>'dashboard','classBody'=>'pace-done','mainClass'=>'main-wrapper'])
@section('headTitle')Excluir Perfil @endsection
@section('content')
                <div class="bg-trans-crystal pt-4">
                    <div class="card-body p-4">
                        <div class="position-relative mb-5">
                            <img src="assets/images/gallery/profile-cover.png" class="img-fluid rounded-4 shadow" alt="">
                            <div class="profile-avatar position-absolute top-100 start-50 translate-middle"><img src="{{ asset($user->image) }}" class="img-fluid rounded-circle p-1 bg-grd-danger shadow" width="170" height="170" alt="{{ $user->username }}"></div>
                        </div>
                        <div class="profile-info pt-5 d-flex align-items-center justify-content-between">
                            <div class="">
                                <h3>{{ $user->name }}</h3>
                                <p class="mt-0">{{ $user->level }}</p>
                                <p class="mb-1"><i class="i-Calendar text-16 me-1"></i> Cadastrado em <span>{{ $user->created_at->now()->format('d/m/Y') }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="bg-trans-crystal pt-4 mt-4">
                            <div class="card-body p-4">
                                <header>
                                    <div class="d-flex align-items-start justify-content-between mb-3"><h2 class="mb-0 fw-bold">{{ __('Delete Account') }}</h2></div>
                                    <p class="mt-1 text-justify">{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}</p>
                                </header>
                                <button type="button" class="btn btn-danger px-5" data-bs-toggle="modal" data-bs-target="#deleteUser">{{ __('Delete Account') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
                @include('admin.profile.sections.modalDelete')
@endsection
