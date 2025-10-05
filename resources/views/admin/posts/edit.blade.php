@extends('admin.layouts.layout',['pageActive'=>'dashboard','pageTitle'=>'Editar Perfil','classBody'=>'pace-done','mainClass'=>'main-wrapper'])
@section('headTitle')Editar Perfil @endsection
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
                                            <form action="{{ route('post.update', $post->id) }}" method="POST" class="row g-3" enctype="multipart/form-data">
                                                @csrf

                                                @method('PUT')

                                                <div class="row p-2 rounded mb-4">
                                                    <div class="mb-3">
                                                        <label for="title" class="form-label">Título</label>
                                                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title',$post->title) }}" placeholder="Título da Publicação">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="category" class="form-label">Categoria</label>
                                                        <select class="form-select" id="category" name="category" style="width: 100%;">
                                                            <option value="{{ $post->category }}">{{ $post->category }}</option>
@foreach ($cats as $cat)
                                                            <option value="{{ $cat->category }}">{{ $cat->category }}</option>
@endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row p-2 rounded mb-4">
                                                    <label for="bio" class="form-label">Matéria</label>
                                                    <textarea id="summernote" name="subject">{!! $post->content !!}</textarea>
                                                </div>
                                                <div class="row p-2 rounded mb-4">
                                                    <div class="mb-3">
                                                        <label for="image" class="form-label">Capa da Publicação</label>
                                                        <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="document.getElementById('preview').src = window.URL.createObjectURL(this.files[0]);document.getElementById('preview').style.display = 'block';" value="{{ $post->image }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="preview" class="form-label text-center">Preview</label>
                                                        <div class="text-center"><img src="{{ asset($post->image) }}" class="rounded-4" id="preview" alt="Image Preview" width="70%"/></div>
                                                    </div>
                                                </div>
                                                <div class="row p-2 rounded mb-4">
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

