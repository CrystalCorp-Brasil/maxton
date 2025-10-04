@extends('admin.layouts.layout',['pageActive'=>'dashboard','pageTitle'=>'Galeria de Imagens','classBody'=>'pace-done','mainClass'=>'main-wrapper'])
@section('headTitle')Galeria de Imagens @endsection
@section('content')
                <div class="row row-cols-1 row-cols-lg-4">
@forelse ($images as $image)
                    <div class="col">
                        <div class="card rounded-4">
                            <div class="card-body">
                                <img src="{{ asset($image->image) }}" class="img-fluid rounded-4" alt="{{ $image->slug }}">
                                <div class="mt-3">
                                    <h5 class="mb-0 fw-bold product-short-title">{{ $image->title }}</h5>
                                    <p class="mb-0 product-short-name">{{ $image->created_at->format('d/m/Y H:i:s') }}</p>
                                </div>
                                <div class="d-grid mt-2"><a href="{{ asset($image->image) }}" class="btn btn-grd-info rounded-4" data-alt="{{ $image->slug }}" data-lightbox="{{ $image->title }}" data-title="{{ $image->title }}">Ampliar</a></div>
                            </div>
                        </div>
                    </div>
@empty
                    <div class="col">
                        <div class="card rounded-4">
                            <div class="card-body">
                                <img src="{{ asset('images/corp/preview.png') }}" class="img-fluid rounded-4" alt="Image Preview">
                                <div class="mt-3">
                                    <h5 class="mb-0 fw-bold product-short-title">Preview</h5>
                                    <p class="mb-0 product-short-name">Você não fez upload de imagens</p>
                                </div>
                                <div class="d-grid mt-2"><a href="{{ asset('images/corp/preview.png') }}" class="btn btn-grd-success rounded-4"  data-alt="Preview" data-lightbox="Preview" data-title="Preview">Ampliar</a></div>
                            </div>
                        </div>
                    </div>
@endforelse
                </div>
@endsection
