@extends('site.layouts.layout')
@section('headTitle')Editoriais @endsection
@section('content')
            <section class="py-9 py-lg-10" id="Gallery" data-zanim-xs='{"delay":0.4,"animation":"zoom-out"}' data-zanim-trigger="scroll">
                <div class="bg-holder" style="background-image:url({{ asset($post->image) }});"></div>
                <div class="container-fluid px-5">
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="overflow-hidden">
                                <h1 class="text-decoration-underline text-white fs-5" data-zanim-xs='{"delay":0.6}' data-zanim-trigger="scroll"> {{ $pageTitle }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="mt-5 mt-lg-0 py-lg-7 p-5" id="Editorials">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8 px-1 mb-3 mb-xl-4 mt-3 mt-xl-4">
                            @include('site.editorials.sections.bodyEditorial')
                            <button class="btn btn-a-link-1" onclick="window.history.back()"><i class="fal fa-2x fa-arrow-square-left"></i>&nbsp;&nbsp;&nbsp;editoriais</button>
                        </div>
                        <div class="col-lg-4 px-1 mb-3 mb-xl-4 mt-3 mt-xl-4">
                            @include('site.editorials.sections.sideBarEditorials')
                        </div>
                    </div>
                </div>
            </section>
@endsection
