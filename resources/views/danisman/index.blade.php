@extends('danisman.layouts.master')
@section('title')
    Danışman Yönetim Paneli
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Danışman Paneli
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-2 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">DEPARTMANLAR</span>
                            <hr>
                            <h3 style="text-align: center" class="mb-3">
                                <span class="counter-value" data-target="{{ departmanCount() }}">0</span>
                            </h3>
                            <hr>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-2 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">DANIŞMANLAR</span>
                            <hr>
                            <h3 style="text-align: center" class="mb-3">
                                <span class="counter-value" data-target="{{ danismanCount() }}">0</span>
                            </h3>
                            <hr>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-2 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">ÖĞRENCİLERİM</span>
                            <hr>
                            <h3 style="text-align: center" class="mb-3">
                                <span class="counter-value" data-target="{{ ogrenciCount() }}">0</span>
                            </h3>
                            <hr>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-2 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">AKADEMİK PROGRAM</span>
                            <hr>
                            <h3 style="text-align: center" class="mb-3">
                                <span class="counter-value" data-target="{{ akademikCount() }}">0</span>
                            </h3>
                            <hr>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-2 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">EĞİTİM PROGRAMI</span>
                            <hr>
                            <h3 style="text-align: center" class="mb-3">
                                <span class="counter-value" data-target="{{ egitimCount() }}">0</span>
                            </h3>
                            <hr>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-2 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">DİL SINAVI</span>
                            <hr>
                            <h3 style="text-align: center" class="mb-3">
                                <span class="counter-value" data-target="{{ dilCount() }}">0</span>
                            </h3>
                            <hr>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div><!-- end row-->

    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">DEPARTMAN LİSTESİ</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown">
                        </div>
                    </div>
                </div><!-- end card header -->

                <div class="card-body px-0">
                    <div class="px-3" data-simplebar style="max-height: 386px;">

                        @foreach ($departmanlar as $item)
                            <div class="d-flex align-items-center pb-4">
                                <div class="flex-grow-1">
                                    <h5 class="font-size-15 mb-1"><a href="" class="text-dark">
                                            {{ $item->name }}</a></h5>
                                </div>
                                <div>
                                    <span class="text-muted"> {{ $item->Ulke->country_name }}</span>

                                </div>
                            </div>
                        @endforeach


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
                    <h4 class="card-title mb-0 flex-grow-1">DANIŞMAN LİSTESİ</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown align-self-start">
                        </div>
                    </div>

                </div><!-- end card header -->

                <div class="card-body px-0 pt-2 ">
                    <div class="table-responsive border-0 px-3" data-simplebar style="max-height: 395px;">
                        <table class="table align-middle table-nowrap ">
                            <tbody>

                                @foreach ($danismanlar as $item)
                                    <tr>
                                        <td>
                                            <div>
                                                <h5 class="font-size-15"><a href=""
                                                        class="text-dark">{{ $item->name }} {{ $item->surname }}</a></h5>
                                                <span class="text-muted">{{ $item->email }}</span>
                                            </div>
                                        </td>

                                        <td>
                                            <p class="mb-1"><a href=""
                                                    class="text-dark">{{ $item->Departman->name }}</a></p>
                                            <span class="text-muted mt-1"> {{ $item->phone }}</span>
                                        </td>

                                        
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
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
                    <h4 class="card-title mb-0 flex-grow-1">ÖĞRENCİLERİM</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown">
                            <a href="{{route('danisman.ogrenci.list')}}">
                                <button type="button" class="btn btn-primary">TÜMÜNÜ GÖR</button>
                            </a>
                        </div>
                    </div>
                </div><!-- end card header -->

                <div class="card-body px-0">
                    <div class="px-3" data-simplebar style="max-height: 386px;">


                        @foreach ($ogrenciler as $item)
                            <div class="d-flex align-items-center pb-4">
                                <div class="avatar-md me-4">
                                    <img src="{{ URL::asset('./assets/images/users/avatar-2.jpg') }}"
                                        class="img-fluid rounded-circle" alt="">
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="font-size-15 mb-1"><a href=""
                                            class="text-dark">{{ $item->name }} {{ $item->surname }}</a></h5>
                                    <span class="text-muted">{{ $item->email }}</span>
                                </div>
                                <div class="flex-shrink-0 text-end">
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
                <!-- end card body -->
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
