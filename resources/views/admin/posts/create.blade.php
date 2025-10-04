@extends('admin.layouts.layout',['pageActive'=>'dashboard','pageTitle'=>'Nova Publicação','classBody'=>'pace-done','mainClass'=>'main-wrapper'])
@section('headTitle')Nova Publicação @endsection
@section('styles')
    <link href="{{ asset('plugins/summernote/summernote-bs5.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="product-table">
                            <div class="block block-rounded">
                                <div class="block-content">
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <form action="{{ route('post.store') }}" method="POST" class="row g-3" enctype="multipart/form-data">
                                                <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
                                                @csrf

                                                @method('PATCH')

                                                <div class="row my-4 rounded mb-4">
                                                    <div class="mb-3">
                                                        <label for="title" class="form-label">Título</label>
                                                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Título da Publicação">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="category" class="form-label">Categoria</label>
                                                        <select class="form-select" id="category" name="category" style="width: 100%;">
                                                            <option>Selecione a Categoria</option>
@foreach ($cats as $cat)
                                                            <option value="{{ $cat->category }}">{{ $cat->category }}</option>
@endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row my-4 rounded mb-4">
                                                    <label for="bio" class="form-label">Matéria</label>
                                                    <textarea id="summernote" name="subject"></textarea>
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
                                                    <button type="submit" class="btn btn-grd-success text-dark">Publicar</button>
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
                placeholder: 'Digite sua publicação',
                tabsize: 2,
                height: 500,
            });
        });
    </script>
@endsection
