@extends('site.layouts.layout')
@section('headTitle')Editoriais @endsection
@section('content')
            @include('site.layouts.header')
            <section class="mt-5 mt-lg-0 py-lg-7 p-5" id="Editorials">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8 px-1 mb-3 mb-xl-4 mt-3 mt-xl-4">
                            @include('site.editorials.sections.bodyEditorials')
                            <nav aria-label="Blog Pagination">
                                {{ $posts->appends(request()->query())->links() }}
                            </nav>
                        </div>
                        <div class="col-lg-4 px-1 mb-3 mb-xl-4 mt-3 mt-xl-4">
                            @include('site.editorials.sections.sideBarEditorials')
                        </div>
                    </div>
                </div>
            </section>
@endsection
