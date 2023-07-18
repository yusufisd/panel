@extends('danisman.layouts.master')
@section('title')
    Şifreyi Değiştir
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">
@endsection
@section('content')


    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color: brown">
                <h4 class="card-title" style="color:white">ŞİFRE DEĞİŞTİR</h4>
            </div><br>

            @if ($errors->any())
                @foreach ($errors->all() as $e)
                    <div class="container">
                        <div class=" alert alert-danger">
                            {{ $e }}
                        </div>
                    </div>
                @endforeach
            @endif


            <div class="card-body">
                <form action="{{ route('danisman.sifre.degistir.post') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">Mevcut Şifre</label>
                            <input type="text" class="form-control" name="old_password" id="">
                        </div>
                        <div class="col-md-4">
                            <label for="">Yeni Şifre</label>
                            <input type="text" class="form-control" name="password" id="">
                        </div>
                        <div class="col-md-4">
                            <label for="">Yeni Şifre Tekrar</label>
                            <input type="text" class="form-control" name="password_confirm" id="">
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
