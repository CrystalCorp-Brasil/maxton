@extends('admin.layouts.layout',['pageActive'=>'dashboard','pageTitle'=>'Personagens','classBody'=>'pace-done','mainClass'=>'main-wrapper'])
@section('headTitle')Personagens @endsection
@section('content')
                <div class="row g-3">
                    <div class="col-2 offset-10">
                        <div class="d-flex align-items-center gap-2 justify-content-lg-end">
                            <button type="button" class="btn btn-grd-success px-4" ><a href="{{ route('char.create') }}" class="text-dark"><i class="bi bi-plus-lg me-2"></i>Personagem</a></button>
                        </div>
                    </div>
                </div>
                <div class="bg-trans-crystal pt-4 mt-3">
                    <div class="card-body">
                        <div class="product-table">
                            <div class="table-responsive white-space-nowrap">
                                <table class="table align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Nick</th>
                                            <th>Nome</th>
                                            <th>Publicado em</th>
                                            <th>Biografia</th>
                                            <th>Atualizado em</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
@forelse ($chars as $char)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="product-box"><img src="@if($char->image == null){{ asset('images/corp/preview.png') }}@else{{ asset($char->image) }}@endif" width="70px" alt="{{ $char->nick }}"></div>
                                                    <div class="product-info">
                                                        <a href="javascript:void(0)" class="product-title">{{ $char->nick }}</a>
                                                        <p class="mb-0 product-category">{{ $char->nick }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $char->name }}</td>
                                            <td>{{ $char->created_at->format('d/m/Y H:i:s') }}</td>
                                            <td class="text-justify pt-4">{!! Str::limit($char->bio,150,'...') !!}</td>
                                            <td>{{ $char->updated_at->format('d/m/Y H:i:s') }}</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3">
                                                    <a href="{{ route('char.edit',$char->slug) }}" type="button" class="btn btn-success p-1 m-1"><i class="fa-2x nav-icon i-Pen-2"></i></a>
                                                    <button type="button" class="btn btn-danger p-1 m-1" data-bs-toggle="modal" data-bs-target="#deleteChar{{ $char->id }}"><i class="fa-2x fa fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr>
@empty
                                        <tr><td colspan="7" class="text-center">Registro não encontrado</td></tr>
@endforelse
                                    </tbody>
                                </table>
                            </div>
                            <hr>
                            {{ $chars->appends(request()->query())->links() }}
                        </div>
                    </div>
                </div>
@foreach ($chars as $char)
                @include('admin.crystalcorp.delete')
@endforeach
@endsection
