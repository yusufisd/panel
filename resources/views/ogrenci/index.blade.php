@extends('ogrenci.layouts.master')
@section('title')
    Öğrenci Paneli
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Öğrenci Paneli
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">DEPARTMAN</span>
                            <h4 class="mb-3">
                                $<span class="counter-value" data-target="354.5">0</span>k
                            </h4>
                            <div class="text-nowrap">
                                <span class="badge bg-soft-success text-success">+$20.9k</span>
                                <span class="ms-1 text-muted font-size-13">Since last week</span>
                            </div>
                        </div>

                        <div class="flex-shrink-0 text-end dash-widget">
                            <div id="mini-chart1" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts"></div>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">DANIŞMAN</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="1256">0</span>
                            </h4>
                            <div class="text-nowrap">
                                <span class="badge bg-soft-danger text-danger">-29 Trades</span>
                                <span class="ms-1 text-muted font-size-13">Since last week</span>
                            </div>
                        </div>
                        <div class="flex-shrink-0 text-end dash-widget">
                            <div id="mini-chart2" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts"></div>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col-->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">ÜLKE</span>
                            <h4 class="mb-3">
                                $<span class="counter-value" data-target="7.54">0</span>M
                            </h4>
                            <div class="text-nowrap">
                                <span class="badge bg-soft-success text-success">+ $2.8k</span>
                                <span class="ms-1 text-muted font-size-13">Since last week</span>
                            </div>
                        </div>
                        <div class="flex-shrink-0 text-end dash-widget">
                            <div id="mini-chart3" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts"></div>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">GENEL PROGRAM</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="18.34">0</span>%
                            </h4>
                            <div class="text-nowrap">
                                <span class="badge bg-soft-success text-success">+5.32%</span>
                                <span class="ms-1 text-muted font-size-13">Since last week</span>
                            </div>
                        </div>
                        <div class="flex-shrink-0 text-end dash-widget">
                            <div id="mini-chart4" data-colors='["#1c84ee", "#33c38e"]' class="apex-charts"></div>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div><!-- end row-->



    <div class="row">
        <div class="col-xl-3">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Customer List</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown">
                            <a class=" dropdown-toggle" href="#" id="dropdownMenuButton2" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted">All Members<i class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                                <a class="dropdown-item" href="#">Members</a>
                                <a class="dropdown-item" href="#">New Members</a>
                                <a class="dropdown-item" href="#">Old Members</a>
                            </div>
                        </div>
                    </div>
                </div><!-- end card header -->

                <div class="card-body px-0">
                    <div class="px-3" data-simplebar style="max-height: 386px;">
                        <div class="d-flex align-items-center pb-4">
                            <div class="avatar-md me-4">
                                <img src="{{ URL::asset('./assets/images/users/avatar-2.jpg') }}"
                                    class="img-fluid rounded-circle" alt="">
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="font-size-15 mb-1"><a href="" class="text-dark">Randy Matthews</a></h5>
                                <span class="text-muted">Randy@gmail.com</span>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <div class="dropdown align-self-start">
                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Copy</a>
                                        <a class="dropdown-item" href="#">Save</a>
                                        <a class="dropdown-item" href="#">Forward</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center pb-4">
                            <div class="avatar-md me-4">
                                <img src="{{ URL::asset('./assets/images/users/avatar-4.jpg') }}"
                                    class="img-fluid rounded-circle" alt="">
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="font-size-15 mb-1"><a href="" class="text-dark">Vernon Wood</a></h5>
                                <span class="text-muted">Vernon@gmail.com</span>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <div class="dropdown align-self-start">
                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Copy</a>
                                        <a class="dropdown-item" href="#">Save</a>
                                        <a class="dropdown-item" href="#">Forward</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center pb-4">
                            <div class="avatar-md me-4">
                                <img src="{{ URL::asset('./assets/images/users/avatar-5.jpg') }}"
                                    class="img-fluid rounded-circle" alt="">
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="font-size-15 mb-1"><a href="" class="text-dark">Howard Rhoades</a></h5>
                                <span class="text-muted">Howard@gmail.com</span>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <div class="dropdown align-self-start">
                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Copy</a>
                                        <a class="dropdown-item" href="#">Save</a>
                                        <a class="dropdown-item" href="#">Forward</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center pb-4">
                            <div class="avatar-md me-4">
                                <img src="{{ URL::asset('./assets/images/users/avatar-6.jpg') }}"
                                    class="img-fluid rounded-circle" alt="">
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="font-size-15 mb-1"><a href="" class="text-dark">Arthur Zurcher</a></h5>
                                <span class="text-muted">Arthur@gmail.com</span>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <div class="dropdown align-self-start">
                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Copy</a>
                                        <a class="dropdown-item" href="#">Save</a>
                                        <a class="dropdown-item" href="#">Forward</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center pb-4">
                            <div class="avatar-md me-4">
                                <img src="{{ URL::asset('./assets/images/users/avatar-8.jpg') }}"
                                    class="img-fluid rounded-circle" alt="">
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="font-size-15 mb-1"><a href="" class="text-dark">Angela Palmer</a></h5>
                                <span class="text-muted">Angela@gmail.com</span>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <div class="dropdown align-self-start">
                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Copy</a>
                                        <a class="dropdown-item" href="#">Save</a>
                                        <a class="dropdown-item" href="#">Forward</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center pb-3">
                            <div class="avatar-md me-4">
                                <img src="{{ URL::asset('./assets/images/users/avatar-9.jpg') }}"
                                    class="img-fluid rounded-circle" alt="">
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="font-size-15 mb-1"><a href="" class="text-dark">Dorothy Wimson</a></h5>
                                <span class="text-muted">Dorothy@gmail.com</span>
                            </div>
                            <div class="flex-shrink-0 text-end">
                                <div class="dropdown align-self-start">
                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded font-size-24 text-dark"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Copy</a>
                                        <a class="dropdown-item" href="#">Save</a>
                                        <a class="dropdown-item" href="#">Forward</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-5">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">PROGRAMIM</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown align-self-start">
                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-horizontal-rounded font-size-18 text-dark"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Copy</a>
                                <a class="dropdown-item" href="#">Save</a>
                                <a class="dropdown-item" href="#">Forward</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </div>

                </div><!-- end card header -->

                <div class="card-body px-0 pt-2 ">
                    <div class="container" style="padding:15px">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p style="text-align: right">GENEL PROGRAM :</p>
                                    </div>
                                    <div class="col-md-6">
                                        Gidiş geliş
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-7">
                                        <p style="text-align: right">AKADEMİK PROGRAM :</p>
                                    </div>
                                    <div class="col-md-5">
                                        dönüş geliş
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p style="text-align: right">GENEL PROGRAM :</p>
                                    </div>
                                    <div class="col-md-6">
                                        Gidiş geliş
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-7">
                                        <p style="text-align: right">AKADEMİK PROGRAM :</p>
                                    </div>
                                    <div class="col-md-5">
                                        dönüş geliş
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-4">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Profilim</h4>
                    <div class="flex-shrink-0">
                        <select class="form-select form-select-sm mb-0 my-n1">
                            <option value="Today" selected="">Today</option>
                            <option value="Yesterday">Yesterday</option>
                            <option value="Week">Last Week</option>
                            <option value="Month">Last Month</option>
                        </select>
                    </div>
                </div><!-- end card header -->

                <div class="card-body px-0">

                    <div class="container" style=" padding:15px;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-5">
                                        <p style="text-align:right">AD :</p>
                                    </div>
                                    <div class="col-md-7">
                                        yusuf
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-5">
                                        <p style="text-align:right">SOYAD :</p>
                                    </div>
                                    <div class="col-md-7">
                                        yusuf
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-5">
                                        <p style="text-align:right">E-MAİL :</p>
                                    </div>
                                    <div class="col-md-7">
                                        yusuf@gmail.com
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-5">
                                        <p style="text-align:right">TELEFON :</p>
                                    </div>
                                    <div class="col-md-7">
                                        5456110790
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div><!-- end row -->
@endsection
@section('script')
    <!-- apexcharts -->
    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/libs/metismenu/metisMenu2.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/node-waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather-icons.min.js') }}"></script>
    <!-- pace js -->
    <script src="{{ asset('assets/libs/pace-js/pace-js.min.js') }}"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
@endsection
