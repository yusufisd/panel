@extends('layouts.master')
@section('title')
    Ayarlar
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">
@endsection
@section('content')


    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color: gray">
                <h4 class="card-title" style="color:white">AYARLAR</h4>
            </div><br>




            <div class="card-body">
                @if ($errors->any())
                    @foreach ($errors->all() as $it)
                        <div class="alert alert-danger ">
                            {{ $it }}
                        </div>
                    @endforeach
                @endif

                <form action="{{ route('settings.post') }}" method="POST">
                    @csrf
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">EMAİL</label>
                            <input type="text" class="form-control" value="{{ $auth->email }}" name="email"
                                id="">
                        </div>
                        <div class="col-md-4">
                            <label for="">ÖNCEKİ ŞİFRE</label>
                            <input type="text" class="form-control" placeholder="Önceki şifre..." name="old_password"
                                id="">
                        </div>
                        <div class="col-md-4">
                            <label for="">YENİ ŞİFRE</label>
                            <input type="text" class="form-control" placeholder="Yeni şifre..." name="password"
                                id="">
                        </div>
                    </div>
                    <br><br>
                    <div>
                        <input type="submit" value="KAYDET" class="btn btn-primary" name="" id="">
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
