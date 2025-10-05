@extends('admin.layouts.layout',['pageActive'=>'dashboard','pageTitle'=>'Links do YouTube','classBody'=>'pace-done','mainClass'=>'main-wrapper'])
@section('headTitle')Links do YouTube @endsection
@section('content')
                <div class="row row-cols-1 row-cols-lg-4">
@forelse ($links as $link)
                    <div class="col">
                        <div class="card w-100 rounded-1 rounded-4 border-top border-4 border-info border-gradient1 mt-4">
                            <div class="card-body">
                                <img src="{{ asset($link->image) }}" class="img-fluid rounded-4" alt="{{ $link->slug }}">
                                <div class="mt-3">
                                    <h5 class="mb-0 fw-bold product-short-title">{{ $link->title }}</h5>
                                    <p class="mb-0 product-short-name">{{ $link->created_at->format('d/m/Y H:i:s') }}</p>
                                </div>
                                <div class="d-grid mt-2"><a href="{{ asset($link->image) }}" class="btn btn-grd-info rounded-4" data-alt="{{ $link->slug }}" data-lightbox="{{ $link->title }}" data-title="{{ $link->title }}">Ampliar</a></div>
                            </div>
                        </div>
                    </div>
@empty
                    <div class="col">
                        <div class="card rounded-4">
                            <div class="card-body">
                                <img src="{{ asset('links/corp/preview.png') }}" class="img-fluid rounded-4" alt="Image Preview">
                                <div class="mt-3">
                                    <h5 class="mb-0 fw-bold product-short-title">Preview</h5>
                                    <p class="mb-0 product-short-name">Você ainda não cadastrou links.</p>
                                </div>
                                <div class="d-grid mt-2"><a href="{{ asset('images/corp/preview.png') }}" class="btn btn-grd-success rounded-4"  data-alt="Image Preview" data-lightbox="Image Preview" data-title="Image Preview">Ampliar</a></div>
                            </div>
                        </div>
                    </div>
@endforelse
                </div>
@endsection
