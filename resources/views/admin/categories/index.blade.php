@extends('admin.layouts.layout',['pageActive'=>'dashboard','pageTitle'=>'Categorias','classBody'=>'pace-done','mainClass'=>'main-wrapper'])
@section('headTitle')Categorias @endsection
@section('content')
                    <div class="row g-3">
                        <div class="col-2 offset-10">
                            <div class="d-flex align-items-center gap-2 justify-content-lg-end">
                                <button type="button" class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#createCat"><i class="bi bi-plus-lg me-2"></i>Nova Categoria</button>
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
                                                <th>Categorias</th>
                                            </tr>
                                        </thead>
                                        <tbody>
@forelse ($cats as $cat)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="product-box"><i class="fa fa-list-ol"></i></div>
                                                        <div class="product-info"><p class="mb-0 product-title">{{ $cat->category }}</p></div>
                                                    </div>
                                                </td>
                                            </tr>
@empty
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="product-info"><p class="mb-0 product-title">Registro não encontrado</p></div>
                                                    </div>
                                                </td>
                                            </tr>
@endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                @include('admin.categories.sections.modalCreateCat')
@endsection
