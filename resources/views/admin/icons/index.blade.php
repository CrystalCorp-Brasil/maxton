@extends('admin.layouts.layout',['pageActive'=>'dashboard','pageTitle'=>'Ícones','classBody'=>'pace-done','mainClass'=>'main-wrapper'])
@section('headTitle') Ícones @endsection
@section('search') @include('admin.layouts.search') @endsection
@section('content')
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 row-cols-xl-6 g-3">
@foreach ($family as $icon)
                    <div class="col">
                        <div class="d-flex align-items-center flex-column gap-3 theme-icons cursor-pointer bg-trans-crystal pt-4">
                            <div><i class="{{ $icon->class }}"></i></div>
                            <div class="ms-2 text-capitalize text-bold fs-5"><span>{{ str_replace('-', ' ', $icon->title) }}</span></div>
                            <pre id="{{ $icon->id }}-iconCode" style="display: none"><code>&lt;i class="{{ $icon->class }}"&gt;&lt;/i&gt;</code></pre>
                            <button class="btn btn-outline-success btn-sm px-4 d-flex gap-2" onclick="copyCode('{{ $icon->id }}-iconCode')">Copiar Classe HTML</button>
                        </div>
                    </div>
@endforeach
                </div>
                <hr>
                {{ $family->appends(request()->query())->links() }}
@endsection
@section('scripts')
        <script>
            function copyCode(idElemento) {
                const elemento = document.getElementById(idElemento);
                const texto = elemento.innerText;
                const textarea = document.createElement('textarea');
                textarea.value = texto;
                document.body.appendChild(textarea);
                textarea.select();
                document.execCommand('copy');
                document.body.removeChild(textarea);
                Swal.fire({
                    title: 'Sucesso!',
                    text: 'Código copiado para a área de transferência!',
                    icon: 'info',
                    confirmButtonText: 'OK'
                })
            }
        </script>
@endsection

