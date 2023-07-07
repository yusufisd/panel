@extends('layouts.master')
@section('title')
    Danışman Güvenlik Ayarları
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color: gray">
                <h4 class="card-title" style="color:white">DANIŞMAN GÜVENLİK</h4>
            </div>

            <div class="card-body">
                    <form action="{{ route('superadmin.danisman.settings.post') }}" method="POST">
                        @csrf

                        @if ($errors->any())
                            @foreach ($errors->all() as $item)
                                <div class="alert alert-danger">{{ $item }}</div>
                            @endforeach
                        @endif
                        <input type="hidden" name="id" value="{{ $data->id }}" id="">


                        <h5>GÜVENLİK</h5><br>

                        <div class="row">
                            <div class="col-md-4">
                                <label for="">E-MAİL</label>
                                <input type="text" class="form-control" name="email" value="{{ $data->email }}"
                                    id="">
                            </div>
                            <div class="col-md-4">
                                <label for="">ÖNCEKİ ŞİFRE</label>
                                <input type="text" class="form-control" name="old_password" placeholder="Önceki şifre..."
                                    id="">
                            </div>
                            <div class="col-md-4">
                                <label for="">YENİ ŞİFRE</label>
                                <input type="text" class="form-control" name="password" placeholder="Yeni şifre..."
                                    id="">
                            </div>
                        </div><br>
                        <div>
                            <input type="submit" value="EKLE" class="btn btn-primary" name="" id="">
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
