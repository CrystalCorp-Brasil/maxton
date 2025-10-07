@extends('admin.layouts.layout',['pageActive'=>'dashboard','pageTitle'=>'Upload de Imagens','classBody'=>'pace-done','mainClass'=>'main-wrapper','helper'=>'imgUpload'])
@section('headTitle')Upload de Imagens @endsection
@section('content')
                <div class="bg-trans-crystal pt-4">
                    <div class="card-body">
                        <div class="product-table">
                            <div class="block block-rounded">
                                <div class="block-content">
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <form action="{{ route('gallery.store') }}" method="POST" class="row g-3" enctype="multipart/form-data">
                                                <input type="hidden" id="user_id" name="user_id" value="{{ $user->id }}">
                                                @csrf

                                                @method('PATCH')

                                                <div class="row p-2 rounded mb-4">
                                                    <div class="mb-3">
                                                        <label for="title" class="form-label">Título</label>
                                                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Título da Publicação" maxlength="25">
                                                        <p class="mt-3">Limite de caracteres <span class="text-danger">25</span>. Disponível: <span class="text-info" id="counterTitle">0</span></p>
                                                    </div>
@if(!$chars != null)
                                                    <div class="mb-3">
                                                        <label for="category" class="form-label">Personagem</label>
                                                        <select class="form-select" id="char_id" name="char_id" style="width: 100%;">
                                                            <option>Selecione o Personagem</option>
@foreach ($chars as $char)
                                                            <option value="{{ $char->id }}">{{ $char->nick }}</option>
@endforeach
                                                        </select>
                                                    </div>
@endif
                                                    <div class="mb-3">
                                                        <label for="image" class="form-label">Capa da Publicação</label>
                                                        <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="document.getElementById('preview').src = window.URL.createObjectURL(this.files[0]);document.getElementById('preview').style.display = 'block';">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="preview" class="form-label text-center">Preview</label>
                                                        <div class="text-center"><img src="{{ asset('images/corp/preview.png') }}" id="preview" alt="Image Preview" width="70%"/></div>
                                                    </div>
                                                </div>
                                                <div class="row p-2 rounded mb-4">
                                                    <button type="submit" class="btn btn-grd-success text-dark">Upload</button>
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
@section('helper')
        @include('admin.components.settings')
@endsection
@section('scripts')
        <script>
            $(document).on("input", "#title", function () {
                var caracteresRestantes = 25;
                var caracteresDigitados = parseInt($(this).val().length);
                var caracteresRestantes = caracteresRestantes - caracteresDigitados;
                $("#counterTitle").text(caracteresRestantes);
            });
        </script>
@endsection
