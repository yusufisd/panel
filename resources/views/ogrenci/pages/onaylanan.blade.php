@extends('ogrenci.layouts.master')
@section('title')
    Onaylanan Üniversiteler
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color: gray">
                <h4 class="card-title" style="color:white">ONAYLANAN ÜNİVERSİTELER</h4>
            </div>
            <div class="card-body">
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

                            @foreach ($data as $basvuru)
                            <tr>
                                <td>{{ strtoupper($basvuru->Ulke->country_name) }}</td>
                                <td>{{ strtoupper($basvuru->universite) }}</td>
                                <td>{{ strtoupper($basvuru->bolum) }}</td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
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
