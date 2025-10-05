@extends('admin.layouts.layout',['pageActive'=>'dashboard','pageTitle'=>'Cadastrar Personagem','classBody'=>'pace-done','mainClass'=>'main-wrapper'])
@section('headTitle')Cadastrar Personagem @endsection
@section('styles')
    <link href="{{ asset('plugins/summernote/summernote-bs5.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
                <div class="card w-100 rounded-1 rounded-4 border-top border-4 border-info border-gradient1 mt-4">
                    <div class="card-body">
                        <div class="product-table">
                            <div class="block block-rounded">
                                <div class="block-content">
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <form action="{{ route('char.store') }}" method="POST" class="row g-3" enctype="multipart/form-data">
                                                <input type="hidden" id="user_id" name="user_id" value="{{ $user->id }}">
                                                @csrf

                                                @method('PATCH')

                                                <div class="row my-4 rounded mb-4">
                                                    <div class="mb-3">
                                                        <label for="nick" class="form-label">Nick</label>
                                                        <input type="text" class="form-control" id="nick" name="nick" value="{{ old('nick') }}" placeholder="Nick do personagem">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">Nome</label>
                                                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Nome do personagem" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="row my-4 rounded mb-4">
                                                    <label for="bio" class="form-label">Biografia</label>
                                                    <textarea id="summernote" name="bio"></textarea>
                                                </div>
                                                <div class="row my-4 rounded mb-4">
                                                    <div class="mb-3">
                                                        <label for="image" class="form-label">Capa da Publicação</label>
                                                        <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="document.getElementById('preview').src = window.URL.createObjectURL(this.files[0]);document.getElementById('preview').style.display = 'block';">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="preview" class="form-label text-center">Preview</label>
                                                        <div class="text-center"><img src="{{ asset('images/corp/preview.png') }}" id="preview" alt="Image Preview" width="70%"/></div>
                                                    </div>
                                                </div>
                                                <div class="row my-4 rounded mb-4">
                                                    <button type="submit" class="btn btn-grd-success text-dark">Cadastrar</button>
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
@section('scripts')
    <script src="{{ asset('plugins/summernote/summernote-bs5.js') }}"></script>
    <script>
        $(function() {
            $('#summernote').summernote({
                placeholder: 'Digite a história do personagem',
                tabsize: 2,
                height: 500,
            });
        });
    </script>
@endsection
