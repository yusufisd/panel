@extends('danisman.layouts.master')
@section('title')
    Öğrenci Düzenle
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <style>
        .eve:hover {
            background-color: brown !important;
            cursor: pointer;

        }
    </style>

    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color: brown">
                <h4 class="card-title" style="color:white">ÖĞRENCİ DÜZENLE</h4>
            </div>



            <div class="card-body">

                @foreach ($data as $item)
                    <form action="{{ route('danisman.ogrenci.update') }}" method="POST">
                        @csrf

                        @if ($errors->any())
                            @foreach ($errors->all() as $item)
                                <div class="alert alert-danger">{{ $item }}</div>
                            @endforeach
                        @endif

                        <div class="row">
                            <div onclick="deneme4()" class="eve" id="eve_genel_bilgiler"
                                style="background-color: brown;border-color:brown!important;border:solid;border-radius:10px; height:50px;width:200px; margin:2%;border-width:thin">
                                <h6 style="color:white;padding:5%">GENEL AYARLAR</h6>
                            </div>
                            <div onclick="deneme()" class="eve" id="eve_okul_bilgileri"
                                style="background-color: gray;border-color:brown!important;border:solid;border-radius:10px; height:50px;width:200px; margin:2%;border-width:thin">
                                <h6 style="color:white;padding:5%">OKUL AYARLARI</h6>
                            </div>
                            <div onclick="deneme2()" class="eve" id="eve_basvurulacak"
                                style="background-color: gray;border-color:brown!important;border:solid;border-radius:10px; height:50px;width:200px; margin:2%;border-width:thin">
                                <h6 style="color:white;padding:5%">PROGRAM AYARLARI</h6>
                            </div>
                            <div onclick="deneme3()" class="eve" id="eve_basvurulan"
                                style="background-color: gray;border-color:brown!important;border:solid;border-radius:10px; height:50px;width:200px; margin:2%;border-width:thin">
                                <h6 style="color:white;padding:5%">GÜVENLİK AYARLARI</h6>
                            </div>
                        </div><br>

                        <div class="genel" id="genel">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">AD</label>
                                    <input value="{{ $item->name }}" type="text" class="form-control" name="name"
                                        id="">

                                </div>
                                <div class="col-md-6">
                                    <label for="">SOYAD</label>
                                    <input value="{{ $item->surname }}" placeholder="Soyisim..." type="text"
                                        class="form-control" name="surname" id="">
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">DEPARTMAN</label>
                                    <select name="departman_id" class="form-control" id="">
                                        <option value="1">Lütfen ülke seçin</option>

                                        @foreach ($departman as $dep)
                                            <option {{ $item->Danisman->department_id == $dep->id ? 'selected' : '' }}
                                                value="{{ $dep->id }}">{{ strtoupper($dep->name) }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="">TELEFON</label>
                                    <input type="text" value="{{ $item->phone }}" class="form-control" name="phone"
                                        id="">
                                </div>
                            </div><br>

                            
                        </div>

                        <div class="okul" id="okul" style="display: none">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">OKUDUĞU ŞEHİR</label>
                                    <select  name="okul_il" class="form-control" id="okul_il">
                                        <option value="">Lütfen şehir seçin</option>

                                        @foreach ($iller as $il)
                                            <option {{$item->okul_il == $il->id ? 'selected' : ''}} value="{{ $il->id }}">{{ strtoupper($il->il_name) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="">OKUL</label>
                                    <input type="text" name="okul" value="{{$item->okul}}" class="form-control"
                                        id="">
                                </div>
                                <div class="col-md-4">
                                    <label for="">SINIF</label>
                                    <input type="number" class="form-control" name="sinif" value="{{$item->sinif}}"
                                        id="">
                                </div>
                            </div>
                        </div>


                        <div class="program" id="program" style="display: none">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">GENEL PROGRAM</label>
                                    <select name="genel_program" class="form-control" id="">
                                        <option value="">Lütfen seçiniz</option>

                                        @foreach ($genel_program as $pro)
                                            <option {{$item->genel_program == $pro->id ? 'selected' : ''}} value="{{ $pro->id }}">{{ $pro->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="">EĞİTİM PROGRAMI</label>
                                    <select name="egitim_programi" class="form-control" id="">
                                        <option value="">Lütfen seçiniz</option>

                                        @foreach ($egitim_programi as $prog)
                                            <option {{$item->egitim_program_id == $prog->id ? 'selected' : ''}} value="{{ $prog->id }}">{{ $prog->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="">AKADEMİK PROGRAMI</label>
                                    <select name="akademik_program" class="form-control" id="">
                                        <option value="">Lütfen seçiniz</option>

                                        @foreach ($akademik_program as $pro)
                                            <option {{$item->akademik_prgram_id == $pro->id ? 'selected' : ''}} value="{{ $pro->id }}">{{ $pro->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="">DİL SINAVI</label>
                                    <select name="dil_sinavi" class="form-control" id="">
                                        <option value="">Lütfen seçiniz</option>

                                        @foreach ($dil_sinavi as $pro)
                                            <option {{$item->dil_sinavi_id == $pro->id ? 'selected' : ''}} value="{{ $pro->id }}">{{ $pro->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">PROSEDÜR</label>
                                    <input type="text" class="form-control" value="{{$item->prosedur}}" name="prosedur"
                                        id="">
                                </div>
                            </div>
                        </div>



                        <div class="guvenlik" id="guvenlik" style="display: none">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">E-MAİL</label>
                                    <input type="text" class="form-control" name="email"value="{{ $item->email }}"
                                        id="">
                                </div>
                                <div class="col-md-6">
                                    <label for="">ŞİFRE</label>
                                    <input type="text"  class="form-control" name="password"
                                        id="">
                                </div>
                            </div>
                        </div>

                        <br><br>
                        <div>
                            <input type="submit" value="DÜZENLE" class="btn btn-primary" name="" id="">
                        </div>
                    </form>
                @endforeach

            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        function deneme() {
            document.getElementById("genel").style.display = "none";
            document.getElementById("program").style.display = "none";
            document.getElementById("guvenlik").style.display = "none";
            document.getElementById("okul").style.display = "block";

            document.getElementById("eve_okul_bilgileri").style.backgroundColor = "brown";
            document.getElementById("eve_genel_bilgiler").style.backgroundColor = "gray";
            document.getElementById("eve_basvurulan").style.backgroundColor = "gray";
            document.getElementById("eve_basvurulacak").style.backgroundColor = "gray";
        }

        function deneme2() {
            document.getElementById("genel").style.display = "none";
            document.getElementById("okul").style.display = "none";
            document.getElementById("guvenlik").style.display = "none";
            document.getElementById("program").style.display = "block";

            document.getElementById("eve_basvurulacak").style.backgroundColor = "brown";
            document.getElementById("eve_genel_bilgiler").style.backgroundColor = "gray";
            document.getElementById("eve_basvurulan").style.backgroundColor = "gray";
            document.getElementById("eve_okul_bilgileri").style.backgroundColor = "gray";
        }

        function deneme3(){
            document.getElementById("genel").style.display = "none";
            document.getElementById("okul").style.display = "none";
            document.getElementById("program").style.display = "none";
            document.getElementById("guvenlik").style.display = "block";

            document.getElementById("eve_basvurulacak").style.backgroundColor = "gray";
            document.getElementById("eve_genel_bilgiler").style.backgroundColor = "gray";
            document.getElementById("eve_basvurulan").style.backgroundColor = "brown";
            document.getElementById("eve_okul_bilgileri").style.backgroundColor = "gray";
        }


        function deneme4() {
            document.getElementById("program").style.display = "none";
            document.getElementById("okul").style.display = "none";
            document.getElementById("guvenlik").style.display = "none";
            document.getElementById("genel").style.display = "block";

            document.getElementById("eve_genel_bilgiler").style.backgroundColor = "brown";
            document.getElementById("eve_basvurulan").style.backgroundColor = "gray";
            document.getElementById("eve_okul_bilgileri").style.backgroundColor = "gray";
            document.getElementById("eve_basvurulacak").style.backgroundColor = "gray";
        }
    </script>

    <!-- JAVASCRIPT -->
    <script src="{{ URL::asset('/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/metismenu/metisMenu2.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/node-waves/node-waves.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/feather-icons/feather-icons.min.js') }}"></script>
    <!-- pace js -->
    <script src="{{ URL::asset('assets/libs/pace-js/pace-js.min.js') }}"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
@endsection
