@extends('admin.layouts.layout',['pageActive'=>'dashboard','pageTitle'=>'Perfil de '.$user->name,'classBody'=>'pace-done','mainClass'=>'main-wrapper'])
@section('headTitle')Perfil de Usuário @endsection
@section('content')
                <div class="row">
                    <div class="col-12 col-lg-4 d-flex">
                        <div class="bg-trans-crystal pt-4">
                            <div class="card-body">
                                <div class="position-relative">
                                    <img src="{{ asset('images/admin/crystalcorp2.png') }}" class="img-fluid rounded" alt="">
                                    <div class="position-absolute top-100 start-50 translate-middle"><img src="@if($user->image == null){{ asset('images/admin/user.png') }}@else{{ asset($user->image) }}@endif" width="100" height="100" class="rounded-circle raised p-1 bg-white" alt="{{ $user->username }}"></div>
                                </div>
                                <div class="text-center mt-5 pt-5">
                                    <h4 class="mb-1">{{ $user->name }}</h4>
                                    <p class="mb-0">{{ $user->level }}</p>
                                    <p class="mb-0">Cadastro em: {{ $user->created_at->format('d/m/Y H:i:s') }}</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-around">
                                    <div class="d-flex flex-column gap-2">
                                        <h4 class="mb-0">798</h4>
                                        <p class="mb-0">Publicações</p>
                                    </div>
                                    <div class="d-flex flex-column gap-2">
                                        <h4 class="mb-0">48K</h4>
                                        <p class="mb-0">Categorias</p>
                                    </div>
                                    <div class="d-flex flex-column gap-2">
                                        <h4 class="mb-0">24.3M</h4>
                                        <p class="mb-0">Comentários</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8 d-flex">
                        <div class="bg-trans-crystal pt-4 w-100">
                            <div class="card-body">
                                <h5 class="mb-3">Biografia</h5>
                                <div class="customer-notes mb-3">
                                    <div class="bg-light mx-3 my-0 rounded-3 p-3">
                                        <div class="notes-item">
                                            <p class="mb-2 text-justify">@if($user->bio == null)Registro não encontrado @else{!! $user->bio !!}@endif</p>
                                            <p class="mb-0 text-end fst-italic text-secondary">Atualizado em: @if($user->updated_at == null)Sem atualização @else{{ $user->updated_at->format('d/m/Y H:i:s') }}@endif</p>
                                        </div>
                                        <hr class="border-dotted">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
