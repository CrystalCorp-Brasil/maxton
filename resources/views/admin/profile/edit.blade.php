@extends('admin.layouts.layout',['pageActive'=>'dashboard','pageTitle'=>'Editar Perfil','classBody'=>'pace-done','mainClass'=>'main-wrapper'])
@section('headTitle')Editar Perfil @endsection
@section('styles')
        <link href="{{ asset('plugins/summernote/summernote-bs5.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
                <div class="card rounded-4">
                    <div class="card-body p-4">
                        <div class="position-relative mb-5">
                            <img src="assets/images/gallery/profile-cover.png" class="img-fluid rounded-4 shadow" alt="">
                            <div class="profile-avatar position-absolute top-100 start-50 translate-middle"><img src="@if($user->image == null){{ asset('images/admin/user.png') }}@else{{ asset($user->image) }}@endif" class="img-fluid rounded-circle p-1 bg-grd-danger shadow" width="170" height="170" alt="{{ $user->username }}"></div>
                        </div>
                        <div class="profile-info pt-5 d-flex align-items-center justify-content-between">
                            <div class="">
                                <h3>{{ $user->name }}</h3>
                                <p class="mt-0">{{ $user->level }}</p>
                                <p class="mb-1"><i class="i-Calendar text-16 me-1"></i> Cadastrado em <span>{{ $user->created_at->format('d/m/Y') }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card rounded-4 border-top border-4 border-primary border-gradient-1">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start justify-content-between mb-3"><h5 class="mb-0 fw-bold">Editar Perfil</h5></div>
                                <form class="row g-4" action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    @method('PATCH')

                                    <div class="card">
                                        <div class="card-body p-4">
                                            <h5 class="mb-4">Cadastro</h5>
                                            <div class="row mb-3">
                                                <label for="name" class="col-sm-3 col-form-label">Nome</label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class="fad fa-user"></i></span>
                                                        <input class="form-control" id="name" name="name" type="text" value="{{ old('name', $user->name) }}" autofocus autocomplete="name"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class="fad fa-envelope"></i></span>
                                                        <input class="form-control" id="email" name="email" type="email" class="mt-1 block w-full" value="{{ old('email', $user->email) }}" autocomplete="email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="image" class="col-sm-3 col-form-label">Thumbnail</label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="document.getElementById('preview').src = window.URL.createObjectURL(this.files[0]);document.getElementById('preview').style.display = 'block';">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row my-5">
                                                <label for="preview" class="form-label text-center pb-3">Preview</label>
                                                <div class="col-sm-6 offset-5"><img src="{{ asset('images/admin/user.png') }}" id="preview" alt="Image Preview" width="30%"/></div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="bio" class="col-form-label text-center">Biografia</label>
                                                <div class="col-9 offset-3">
                                                    <textarea id="summernote" name="bio">{!! $user->bio !!}</textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-6 offset-6">
                                                    <div class="input-group"><button type="submit" class="btn btn-grd-deep-blue px-5">Salvar</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
@section('scripts')
        <script src="{{ asset('plugins/summernote/summernote-bs5.js') }}"></script>
        <script>
            $(function() {
                $('#summernote').summernote({
                    placeholder: 'Sua apresentação pessoal',
                    tabsize: 4,
                    height: 250,
                });
            });
        </script>
@endsection
