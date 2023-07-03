<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title> @yield('title') | Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    @include('danisman.layouts.head-css')
</head>


@section('body')

    @include('danisman.layouts.body')
@show
<!-- Begin page -->
<div id="layout-wrapper">
    @include('danisman.layouts.topbar')
    @include('danisman.layouts.sidebar')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">

                    @if (!Route::is('danisman.index'))
                        <div class="col-md-8">
                            @yield('content')
                        </div>
                        <div class="col-md-4 position-sticky">
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                    <!-- card -->
                                    <div class="card card-h-100">
                                        <!-- card body -->
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <span
                                                        class="text-muted mb-3 lh-1 d-block text-truncate">DEPARTMANLAR</span>
                                                    <hr>
                                                    <h3 style="text-align: center" class="mb-3">
                                                        <span class="counter-value"
                                                            data-target="{{ departmanCount() }}">0</span>
                                                    </h3>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->

                                <div class="col-xl-6 col-md-6">
                                    <!-- card -->
                                    <div class="card card-h-100">
                                        <!-- card body -->
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <span
                                                        class="text-muted mb-3 lh-1 d-block text-truncate">DANIŞMANLAR</span>
                                                    <hr>
                                                    <h3 style="text-align: center" class="mb-3">
                                                        <span class="counter-value"
                                                            data-target="{{ danismanCount() }}">0</span>
                                                    </h3>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                    <!-- card -->
                                    <div class="card card-h-100">
                                        <!-- card body -->
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <span
                                                        class="text-muted mb-3 lh-1 d-block text-truncate">ÖĞRENCİLER</span>
                                                    <hr>
                                                    <h3 style="text-align: center" class="mb-3">
                                                        <span class="counter-value"
                                                            data-target="{{ ogrenciCount() }}">0</span>
                                                    </h3>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->

                                <div class="col-xl-6 col-md-6">
                                    <!-- card -->
                                    <div class="card card-h-100">
                                        <!-- card body -->
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">AKADEMİK
                                                        PROGRAMLAR</span>
                                                    <hr>
                                                    <h3 style="text-align: center" class="mb-3">
                                                        <span class="counter-value"
                                                            data-target="{{ akademikCount() }}">1</span>
                                                    </h3>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                    <!-- card -->
                                    <div class="card card-h-100">
                                        <!-- card body -->
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">EĞİTİM
                                                        PROGRAMLARI</span>
                                                    <hr>
                                                    <h3 style="text-align: center" class="mb-3">
                                                        <span class="counter-value"
                                                            data-target="{{ egitimCount() }}">0</span>
                                                    </h3>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->

                                <div class="col-xl-6 col-md-6">
                                    <!-- card -->
                                    <div class="card card-h-100">
                                        <!-- card body -->
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1">
                                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">DİL
                                                        SINAVLARI</span>
                                                    <hr>
                                                    <h3 style="text-align: center" class="mb-3">
                                                        <span class="counter-value"
                                                            data-target="{{ dilCount() }}">0</span>
                                                    </h3>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->
                            </div>

                        </div>
                    @endif
                    @if (Route::is('danisman.index'))
                        <div class="col-md-12">
                            @yield('content')
                        </div>
                    @endif

                </div>

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        @include('danisman.layouts.footer')
    </div>
    <!-- end main content-->
</div>
<!-- END layout-wrapper -->

<!-- JAVASCRIPT -->
@include('danisman.layouts.vendor-scripts')
@include('sweetalert::alert')

</body>

</html>
