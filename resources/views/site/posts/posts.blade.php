@extends('site.layouts.layout')
@section('content')
            @include('site.layouts.header')
            <section class="mt-5 mt-lg-0 py-lg-7 p-5" id="Posts">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8 px-1 mb-3 mb-xl-4 mt-3 mt-xl-4">
                            @include('site.posts.sections.bodies')
                            <div class="col-11">
                                {{ $posts->appends(request()->query())->links() }}
                            </div>
                        </div>
                        <div class="col-lg-4 px-1 mb-3 mb-xl-4 mt-3 mt-xl-4">
                            @include('site.posts.sections.sideBar')
                        </div>
                    </div>
                </div>
            </section>
@endsection
