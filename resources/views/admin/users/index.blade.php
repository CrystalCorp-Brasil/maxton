@extends('admin.layouts.layout',['pageActive'=>'dashboard','pageTitle'=>'Usuários','classBody'=>'pace-done','mainClass'=>'main-wrapper'])
@section('headTitle')Usuários @endsection
@section('content')
                    <div class="bg-trans-crystal pt-4">
                        <div class="card-body">
                            <div class="product-table">
                                <div class="table-responsive white-space-nowrap">
                                    <table class="table align-middle">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Nome</th>
                                                <th>Usuário</th>
                                                <th>Nível de Acesso</th>
                                                <th>E-mail</th>
                                                <th>Biografia</th>
                                                <th>Cadastro</th>
                                                <th>Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
@forelse ($users as $user)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="product-box"><img src="@if($user->image == null){{ asset('images/admin/user.png') }}@else{{ asset($user->image) }}@endif" width="50" class="rounded-3" alt="{{ $user->username }}"></div>
                                                        <div class="product-info">
                                                            <a href="javascript:void(0)" class="product-title">{{ $user->name }}</a>
                                                            <p class="mb-0 product-category">{{ $user->name }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $user->username }}</td>
                                                <td>{{ $user->level }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td class="text-justify pt-4">@if($user->bio == null)Registro não encontrado @else{!! Str::limit($user->bio,150,'...') !!}@endif</td>
                                                <td>{{ $user->created_at->format('d/m/Y') }}</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm btn-filter dropdown-toggle dropdown-toggle-nocaret" type="button" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="{{ route('user.show',$user->id) }}">Perfil</a></li>
                                                            <li><a class="dropdown-item" href="javascript:void(0)">E-mail</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
@empty
                                            <tr><td colspan="7" class="text-center">Registro não encontrado</td></tr>
@endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection
