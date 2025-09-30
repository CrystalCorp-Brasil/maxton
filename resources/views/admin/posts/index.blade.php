@extends('admin.layouts.layout',['pageActive'=>'dashboard','pageTitle'=>'Publicações','classBody'=>'pace-done','mainClass'=>'main-wrapper'])
@section('headTitle')Publicações @endsection
@section('content')
                <div class="row g-3">
                    <div class="col-2 offset-10">
                        <div class="d-flex align-items-center gap-2 justify-content-lg-end">
                            <button type="button" class="btn btn-primary px-4" ><a href="{{ route('post.create') }}" class="text-white"><i class="bi bi-plus-lg me-2"></i>Nova Publicação</a></button>
                        </div>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="product-table">
                            <div class="table-responsive white-space-nowrap">
                                <table class="table align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Título</th>
                                            <th>Categoria</th>
                                            <th>Visitas</th>
                                            <th>Publicado em</th>
                                            <th>Matéria</th>
                                            <th>Atualizado em</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
@forelse ($posts as $post)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="product-box"><img src="@if($post->image == null){{ asset('images/admin/post.png') }}@else{{ asset($post->image) }}@endif" width="70px" alt="{{ $post->title }}"></div>
                                                    <div class="product-info">
                                                        <a href="javascript:void(0)" class="product-title">{{ $post->title }}</a>
                                                        <p class="mb-0 product-category">{{ $post->title }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $post->category }}</td>
                                            <td>{{ $post->visits }}</td>
                                            <td>{{ $post->created_at }}</td>
                                            <td class="text-justify pt-4">{!! Str::limit($post->subject,150,'...') !!}</td>
                                            <td>{{ $post->updated_at->format('d/m/Y H:i:s') }}</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3">
                                                    <a href="{{ route('post.edit',$post->slug) }}" type="button" class="btn btn-success p-1 m-1"><i class="fa-2x nav-icon i-Pen-2"></i></a>
                                                    <button type="button" class="btn btn-danger p-1 m-1" data-bs-toggle="modal" data-bs-target="#deletePost{{ $post->id }}"><i class="fa-2x fa fa-trash"></i></button>
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
@foreach ($posts as $post)
                @include('admin.posts.delete')
@endforeach
@endsection
