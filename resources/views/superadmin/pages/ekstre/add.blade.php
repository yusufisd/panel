@extends('layouts.master')
@section('title')
    Ekstre
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color: gray">
                <h4 class="card-title" style="color:white">EKSTRE</h4>
            </div><br>
            <div class="card-body">
                <form action="{{ route('ekstre.list') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">EKSTRE TİPİ</label>
                            <select name="type" class="form-control" id="">
                                <option value="">Lütfen ekstre tipi seçin</option>
                                <option value="0">GELİR</option>
                                <option value="1">GİDER</option>
                                <option value="2">HEPSİ</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">BAŞLANGIÇ TARİHİ</label>
                            <input type="date" class="form-control" name="baslangic" id="">
                        </div>
                        <div class="col-md-4">
                            <label for="">BİTİŞ TARİHİ</label>
                            <input type="date" class="form-control" name="bitis" id="">
                        </div>
                    </div><br><br>

                    <div>
                        <input type="submit" value="KAYDET" class="btn btn-primary" id="">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
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
