@extends('layouts.master')
@section('title')
    Öğrenci Listele
@endsection
@section('css')
    <!-- DataTables -->
    <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: gray">
                    <div class="row">
                        <div class="col-md-2">
                            <span class="card-title" style="color:white">ÖĞRENCİ LİSTESİ</span>
                        </div>
                        <div class="col-md-5"></div>
                        <div id="goster" style="visibility: hidden" class="col-md-3">
                            <span style="float:inline-end">
                                <form action="{{route('import.student')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-10">
                                            <input type="file" class="form-control" name="file" id="">
                                        </div>
                                        <div class="col-md-2">
                                            <input type="submit" class="btn btn-success" name="" id="">
                                        </div>
                                    </div>
                                </form>
                            </span>
                        </div>
                        <div class="col-md-2">
                            <span style="float:right">
                                <button type="button" onclick="test2()" class="btn btn-success">İÇE AKTAR</button>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="card-body">

                    <table id="" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th>AD SOYAD</th>
                                <th>DEPARTMAN</th>
                                <th>DANIŞMAN</th>
                                <th>ÜLKE</th>
                                <th>EMAİL</th>
                                <th>TELEFON</th>
                                <th>BAKİYE</th>
                                <th style="width:100px">İşlem</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>
                                        <a href="{{ route('ogrenci.detail', $item->id) }}">
                                            {{ strtoupper($item->name) }} {{ strtoupper($item->surname) }}
                                        </a>
                                    </td>
                                    <td>
                                        @if(isset($item->Danisman) && isset($item->Danisman->Departman))
                                        <a href="{{ route('departman.detail', $item->id) }}">
                                            {{ strtoupper($item->Danisman->Departman->name) }}
                                        </a>
                                        @endif
                                    </td>
                                    <td>
                                        @if(isset($item->Danisman))
                                        {{ strtoupper($item->Danisman->name) }} {{ strtoupper($item->Danisman->surname) }}                                            
                                        @endif
                                    </td>
                                    <td>
                                        @if(isset($item->Danisman->Departman) && isset($item->Danisman))
                                        {{ strtoupper($item->Danisman->Departman->Ulke->country_name) }}    
                                        @endif
                                        </td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ strtoupper($item->phone) }}</td>
                                    <td>{{ strtoupper($item->bakiye) }} TL</td>
                                    <td style="width:100px">
                                        <a href="{{ route('ogrenci.edit', $item->id) }}">
                                            <i style="color:blue; font-size:20px" class="fas fa-edit"></i>
                                        </a onclick="test({{ $item->id }})">&nbsp;
                                        <i style="color:red; font-size:20px" class="fas fa-trash-alt"></i>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
@section('script')
    <script>
        function test(d) {
            Swal.fire({
                title: 'Emin misiniz?',
                text: "Seçtiğiniz içerik silinecek!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Evet, sil!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ route('departman.destroy') }}/" + d;
                }
            })
        }

        function test2(){
            document.getElementById("goster").style.visibility = "visible";
        }
    </script>
    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/metismenu/metisMenu2.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <!-- pace js -->
    <script src="{{ asset('assets/libs/pace-js/pace.min.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
@endsection
