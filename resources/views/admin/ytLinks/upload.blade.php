@extends('admin.layouts.layout',['pageActive'=>'dashboard','pageTitle'=>'Cadastro de Link YT','classBody'=>'pace-done','mainClass'=>'main-wrapper'])
@section('headTitle')Cadastro de Link YT @endsection
@section('content')
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="product-table">
                            <div class="block block-rounded">
                                <div class="block-content">
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <form action="{{ route('linkYT.store') }}" method="POST" class="row g-3" enctype="multipart/form-data">
                                                <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
                                                @csrf

                                                @method('PATCH')

                                                <div class="row p-2 rounded mb-4">
                                                    <div class="mb-3">
                                                        <label for="title" class="form-label">Título</label>
                                                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Título da Vídeo" maxlength="25">
                                                        <p class="mt-3">Limite de caracteres <span class="text-danger">25</span>. Disponível: <span class="text-info" id="counterTitle">0</span></p>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="resume" class="form-label">Descrição</label>
                                                        <input type="text" class="form-control" id="resume" name="resume" value="{{ old('resume') }}" placeholder="Resumo do conteúdo do Vídeo" maxlength="150">
                                                        <p class="mt-3">Limite de caracteres <span class="text-danger">150</span>. Disponível: <span class="text-info" id="counterResume">0</span></p>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="link" class="form-label">Link</label>
                                                        <input type="text" class="form-control" id="link" name="link" value="{{ old('link') }}" placeholder="Link do Vídeo no YouTube">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="tag" class="form-label">Etiqueta</label>
                                                        <select class="form-select" id="tag" name="tag" style="width: 100%;">
                                                            <option>Selecione a Etiqueta</option>
@foreach ($links as $link)
                                                            <option value="{{ $link->tag }}">{{ $link->tag }}</option>
@endforeach
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="image" class="form-label">Capa do Vídeo</label>
                                                        <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="document.getElementById('preview').src = window.URL.createObjectURL(this.files[0]);document.getElementById('preview').style.display = 'block';">
                                                    </div>
                                                    <div class="mb-3">
                                                        <p for="preview" class="form-label text-center">Preview</p>
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
@section('scripts')
        <script>
            $(document).on("input", "#title", function () {
                var caracteresRestantes = 25;
                var caracteresDigitados = parseInt($(this).val().length);
                var caracteresRestantes = caracteresRestantes - caracteresDigitados;
                $("#counterTitle").text(caracteresRestantes);
            });
            $(document).on("input", "#resume", function () {
                var caracteresRestantes = 150;
                var caracteresDigitados = parseInt($(this).val().length);
                var caracteresRestantes = caracteresRestantes - caracteresDigitados;
                $("#counterResume").text(caracteresRestantes);
            });
        </script>
@endsection
