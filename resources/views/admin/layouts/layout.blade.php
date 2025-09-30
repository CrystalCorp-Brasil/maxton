<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="{{ str_replace ('_', '-', app ()->getLocale ()) }}" data-bs-theme="blue-theme">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="NHOJunior Design">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="msapplication-TileImage" content="{{ asset('favicon.png') }}">
        <title>{{ config('app.name', 'CrystalCorp') }} | @yield('headTitle')</title>
        <link href="{{ asset('favicon.ico') }}" rel="icon" type="image/png" sizes="32x32">
        <link href="{{ asset('css/admin.css') }}" rel="stylesheet" type="text/css">
@yield('styles')
    </head>
    <body class="{{ $classBody }}">
@if ($pageActive != 'auth')
        <header class="top-header">
            @include('admin.layouts.navbar')
        </header>
        @include('admin.layouts.sidebar')
@endif
        <main class="{{ $mainClass }}">
            <div class="main-content">
@if ($pageActive != 'auth')
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Dashboard</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0)"></a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $pageTitle }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
@endif
@yield('content')
            </div>
        </main>
        <div class="overlay btn-toggle"></div>
        <footer class="page-footer"><p class="mb-0">Copyright © 2025. All right reserved.</p></footer>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCart">
            <div class="offcanvas-header border-bottom h-70">
                <h5 class="mb-0" id="offcanvasRightLabel">8 New Orders</h5>
                <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas"><i class="material-icons-outlined">close</i></a>
            </div>
            <div class="offcanvas-body p-0">
                <div class="order-list">
                    <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                        <div class="order-img"><img src="assets/images/orders/01.png" class="img-fluid rounded-3" width="75" alt=""></div>
                        <div class="order-info flex-grow-1">
                            <h5 class="mb-1 order-title">White Men Shoes</h5>
                            <p class="mb-0 order-price">$289</p>
                        </div>
                        <div class="d-flex">
                            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                        </div>
                    </div>
                    <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                        <div class="order-img"><img src="assets/images/orders/02.png" class="img-fluid rounded-3" width="75" alt=""></div>
                        <div class="order-info flex-grow-1">
                            <h5 class="mb-1 order-title">Red Airpods</h5>
                            <p class="mb-0 order-price">$149</p>
                        </div>
                        <div class="d-flex">
                            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                        </div>
                    </div>
                    <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                        <div class="order-img"><img src="assets/images/orders/03.png" class="img-fluid rounded-3" width="75" alt=""></div>
                        <div class="order-info flex-grow-1">
                            <h5 class="mb-1 order-title">Men Polo Tshirt</h5>
                            <p class="mb-0 order-price">$139</p>
                        </div>
                        <div class="d-flex">
                            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                        </div>
                    </div>
                    <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                        <div class="order-img"><img src="assets/images/orders/04.png" class="img-fluid rounded-3" width="75" alt=""></div>
                        <div class="order-info flex-grow-1">
                            <h5 class="mb-1 order-title">Blue Jeans Casual</h5>
                            <p class="mb-0 order-price">$485</p>
                        </div>
                        <div class="d-flex">
                            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                        </div>
                    </div>
                    <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                        <div class="order-img"><img src="assets/images/orders/05.png" class="img-fluid rounded-3" width="75" alt=""></div>
                        <div class="order-info flex-grow-1">
                            <h5 class="mb-1 order-title">Fancy Shirts</h5>
                            <p class="mb-0 order-price">$758</p>
                        </div>
                        <div class="d-flex">
                            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                        </div>
                    </div>
                    <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                        <div class="order-img"><img src="assets/images/orders/06.png" class="img-fluid rounded-3" width="75" alt=""></div>
                        <div class="order-info flex-grow-1">
                            <h5 class="mb-1 order-title">Home Sofa Set </h5>
                            <p class="mb-0 order-price">$546</p>
                        </div>
                        <div class="d-flex">
                            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                        </div>
                    </div>
                    <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                        <div class="order-img"><img src="assets/images/orders/07.png" class="img-fluid rounded-3" width="75" alt=""></div>
                        <div class="order-info flex-grow-1">
                            <h5 class="mb-1 order-title">Black iPhone</h5>
                            <p class="mb-0 order-price">$1049</p>
                        </div>
                        <div class="d-flex">
                            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                        </div>
                    </div>
                    <div class="order-item d-flex align-items-center gap-3 p-3 border-bottom">
                        <div class="order-img"><img src="assets/images/orders/08.png" class="img-fluid rounded-3" width="75" alt=""></div>
                        <div class="order-info flex-grow-1">
                            <h5 class="mb-1 order-title">Goldan Watch</h5>
                            <p class="mb-0 order-price">$689</p>
                        </div>
                        <div class="d-flex">
                            <a class="order-delete"><span class="material-icons-outlined">delete</span></a>
                            <a class="order-delete"><span class="material-icons-outlined">visibility</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-footer h-70 p-3 border-top">
                <div class="d-grid"><button type="button" class="btn btn-grd btn-grd-primary" data-bs-dismiss="offcanvas">View Products</button></div>
            </div>
        </div>
        <button class="btn btn-grd btn-grd-primary position-fixed bottom-0 end-0 m-3 d-flex align-items-center gap-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop"><i class="material-icons-outlined">tune</i>Customize</button>
        <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="staticBackdrop">
            <div class="offcanvas-header border-bottom h-70">
                <div class="">
                    <h5 class="mb-0">Theme Customizer</h5>
                    <p class="mb-0">Customize your theme</p>
                </div>
                <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas"><i class="material-icons-outlined">close</i></a>
            </div>
            <div class="offcanvas-body">
                <div>
                    <p>Theme variation</p>
                    <div class="row g-3">
                        <div class="col-12 col-xl-6">
                            <input type="radio" class="btn-check" name="theme-options" id="BlueTheme" checked>
                            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="BlueTheme">
                                <span class="material-icons-outlined">contactless</span>
                                <span>Blue</span>
                            </label>
                        </div>
                        <div class="col-12 col-xl-6">
                            <input type="radio" class="btn-check" name="theme-options" id="LightTheme">
                            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="LightTheme">
                                <span class="material-icons-outlined">light_mode</span>
                                <span>Light</span>
                            </label>
                        </div>
                        <div class="col-12 col-xl-6">
                            <input type="radio" class="btn-check" name="theme-options" id="DarkTheme">
                            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="DarkTheme">
                                <span class="material-icons-outlined">dark_mode</span>
                                <span>Dark</span>
                            </label>
                        </div>
                        <div class="col-12 col-xl-6">
                            <input type="radio" class="btn-check" name="theme-options" id="SemiDarkTheme">
                            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="SemiDarkTheme">
                                <span class="material-icons-outlined">contrast</span>
                                <span>Semi Dark</span>
                            </label>
                        </div>
                        <div class="col-12 col-xl-6">
                            <input type="radio" class="btn-check" name="theme-options" id="BoderedTheme">
                            <label class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4" for="BoderedTheme">
                                <span class="material-icons-outlined">border_style</span>
                                <span>Bordered</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
@if ($pageActive != 'auth')
        <script src="{{ asset('js/admin/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('js/admin/metisMenu.min.js') }}"></script>
        <script src="{{ asset('js/admin/apexcharts.min.js') }}"></script>
        <script src="{{ asset('js/admin/simplebar.min.js') }}"></script>
        <script src="{{ asset('js/admin/jquery.peity.min.js') }}"></script>
        <script src="{{ asset('js/admin/pace.min.js') }}"></script>
        <script> $(".data-attributes span").peity("donut") </script>
        <script src="{{ asset('js/admin/main.js') }}"></script>
        <script src="{{ asset('js/admin/dashboard1.js') }}"></script>
        <script> new PerfectScrollbar(".user-list") </script>
@endif
        @include('components.mySweetAlertMessages')
@yield('scripts')
    </body>
</html>

