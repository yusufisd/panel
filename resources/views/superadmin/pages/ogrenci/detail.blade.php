@extends('layouts.master')
@section('title')
    Öğrenci Detay Sayfası
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
    <style>
        .eve:hover {
            background-color: brown !important;
            cursor: pointer;

        }
    </style>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: gray">
                    <h4 class="card-title" style="color:white">ÖĞRENCİ DETAY</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div onclick="deneme4()" class="eve" id="eve_genel_bilgiler"
                            style="background-color: brown;border-color:brown!important;border:solid;border-radius:10px; height:50px;width:200px; margin:2%;border-width:thin">
                            <h6 style="color:white;padding:5%">GENEL BİLGİLER</h6>
                        </div>
                        <div onclick="deneme()" class="eve" id="eve_okul_bilgileri"
                            style="background-color: gray;border-color:brown!important;border:solid;border-radius:10px; height:50px;width:200px; margin:2%;border-width:thin">
                            <h6 style="color:white;padding:5%">OKUL BİLGİLERİ</h6>
                        </div>
                        <div onclick="deneme2()" class="eve" id="eve_basvurulacak"
                            style="background-color: gray;border-color:brown!important;border:solid;border-radius:10px; height:50px;width:200px; margin:2%;border-width:thin">
                            <h6 style="color:white;padding:5%">BAŞVURULACAK ÜNİVERSİTELER</h6>
                        </div>
                        <div onclick="deneme3()" class="eve" id="eve_basvurulan"
                            style="background-color: gray;border-color:brown!important;border:solid;border-radius:10px; height:50px;width:200px; margin:2%;border-width:thin">
                            <h6 style="color:white;padding:5%">BAŞVURULAN ÜNİVERSİTELER</h6>
                        </div>
                    </div><br>
                    @foreach ($data as $item)
                        <div id="genel_bilgiler" class="container"
                            style="border: solid; padding:2px; border-width:thin; border-color:lightgray;display:block"><br>
                            <div class="row container">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p style="text-align: right" for="">AD :</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h5 style="text-align: left">{{ strtoupper($item->name) }}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p style="text-align: right" for="">SOYAD :</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h5 style="text-align: left">{{ strtoupper($item->surname) }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>


                            <div class="row container">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p style="text-align: right" for="">ANNE ADI :</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h5 style="text-align: left">{{ strtoupper($item->mother_name) }}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p style="text-align: right" for="">BABA ADI :</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h5 style="text-align: left">{{ strtoupper($item->father_name) }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <div class="row container">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p style="text-align: right" for="">TC KİMLİK NO :</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h5 style="text-align: left">{{ strtoupper($item->tc_no) }}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p style="text-align: right" for="">DOĞUM TARİHİ :</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h5 style="text-align: left">{{ strtoupper($item->birthday) }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <div class="row container">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p style="text-align: right" for="">E-MAİL :</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h5 style="text-align: left">{{ $item->email }}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p style="text-align: right" for="">TELEFON :</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h5 style="text-align: left">{{ strtoupper($item->phone) }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>



                        <div id="okul_bilgileri" class="container"
                            style="border: solid; padding:2px; border-width:thin; border-color:lightgray;display: none">
                            <br>

                            <div class="row container">
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p style="text-align: right" for="">OKUDUĞU ŞEHİR :</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h5 style="text-align: left">{{ strtoupper($item->sehir->il_name) }}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p style="text-align: right" for="">OKUL :</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h5 style="text-align: left;width:100%">
                                                {{ strtoupper($item->okul) }}</h5>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p style="text-align: right" for="">SINIF :</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h5 style="text-align: left">
                                                {{ strtoupper($item->sinif) }}
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="basvurulacak" style="display: none" class="table">

                            
                            <table class="table table-bordered mb-0">

                                <thead>
                                    <tr>
                                        <th><b>ÜLKE</b></th>
                                        <th><b>ÜNİVERSİTE</b></th>
                                        <th><b>BÖLÜM</b></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($basvurulacak as $basvuru)
                                    <tr>
                                        <td>{{ strtoupper($basvuru->Ulke->country_name) }}</td>
                                        <td>{{ strtoupper($basvuru->universite) }}</td>
                                        <td>{{ strtoupper($basvuru->bolum) }}</td>
                                    </tr>
                                @endforeach


                                </tbody>
                            </table>
                        </div>


                        <div id="basvurulan" style="display: none" class="table">
                            <table class="table table-bordered mb-0">

                                <thead>
                                    <tr>
                                        <th><b>ÜLKE</b></th>
                                        <th><b>ÜNİVERSİTE</b></th>
                                        <th><b>BÖLÜM</b></th>
                                        <th><b>DURUM</b></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($basvurulan as $basvuru)
                                        
                                    <tr>
                                        <td>{{ strtoupper($basvuru->Ulke->country_name) }}</td>
                                        <td>{{ strtoupper($basvuru->universite) }}</td>
                                        <td>{{ strtoupper($basvuru->bolum) }}</td>

                                        @if($basvuru->durum == 0)
                                        <td><span style="color: ORANGE">BEKLİYOR</span></td>
                                        @endif
                                        @if($basvuru->durum == 1)
                                        <td><span style="color: lightgreen">ONAYLANDI</span></td>
                                        @endif
                                        @if($basvuru->durum == 2)
                                        <td><span style="color: red">REDDEDİLDİ</span></td>
                                        @endif
                                    </tr>

                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    @endforeach

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
@section('script')
    <script>
        function deneme() {
            document.getElementById("genel_bilgiler").style.display = "none";
            document.getElementById("basvurulan").style.display = "none";
            document.getElementById("basvurulacak").style.display = "none";
            document.getElementById("okul_bilgileri").style.display = "block";

            document.getElementById("eve_okul_bilgileri").style.backgroundColor = "brown";
            document.getElementById("eve_genel_bilgiler").style.backgroundColor = "gray";
            document.getElementById("eve_basvurulan").style.backgroundColor = "gray";
            document.getElementById("eve_basvurulacak").style.backgroundColor = "gray";
        }

        function deneme2() {
            document.getElementById("genel_bilgiler").style.display = "none";
            document.getElementById("basvurulan").style.display = "none";
            document.getElementById("okul_bilgileri").style.display = "none";
            document.getElementById("basvurulacak").style.display = "block";

            document.getElementById("eve_basvurulacak").style.backgroundColor = "brown";
            document.getElementById("eve_genel_bilgiler").style.backgroundColor = "gray";
            document.getElementById("eve_basvurulan").style.backgroundColor = "gray";
            document.getElementById("eve_okul_bilgileri").style.backgroundColor = "gray";
        }

        function deneme3() {
            document.getElementById("genel_bilgiler").style.display = "none";
            document.getElementById("basvurulacak").style.display = "none";
            document.getElementById("okul_bilgileri").style.display = "none";
            document.getElementById("basvurulan").style.display = "block";

            document.getElementById("eve_basvurulan").style.backgroundColor = "brown";
            document.getElementById("eve_genel_bilgiler").style.backgroundColor = "gray";
            document.getElementById("eve_okul_bilgileri").style.backgroundColor = "gray";
            document.getElementById("eve_basvurulacak").style.backgroundColor = "gray";
        }

        function deneme4() {
            document.getElementById("basvurulan").style.display = "none";
            document.getElementById("basvurulacak").style.display = "none";
            document.getElementById("okul_bilgileri").style.display = "none";
            document.getElementById("genel_bilgiler").style.display = "block";

            document.getElementById("eve_genel_bilgiler").style.backgroundColor = "brown";
            document.getElementById("eve_basvurulan").style.backgroundColor = "gray";
            document.getElementById("eve_okul_bilgileri").style.backgroundColor = "gray";
            document.getElementById("eve_basvurulacak").style.backgroundColor = "gray";
        }
    </script>


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
    </script>
    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
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
