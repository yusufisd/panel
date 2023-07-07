@extends('layouts.master')
@section('title')
    Güvenlik Ayarları
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color: gray">
                <h4 class="card-title" style="color:white">GÜVENLİK AYARLARI &nbsp;&nbsp; ({{$data->name}} {{$data->surname}})</h4>
            </div>

            <div class="card-body">
                <form action="{{ route('ogrenci.guvenlik.post') }}" method="POST">
                    @csrf

                    <input type="hidden" name="id" value="{{$data->id}}" id="">

                    @if ($errors->any())
                        @foreach ($errors->all() as $A)
                            <div class="alert alert-danger">{{ $A }}</div>
                        @endforeach
                    @endif

                    <div class="row">
                        <div class="col-md-6">
                            <label for="">E-MAİL</label>
                            <input type="text" value="{{ $data->email }}" class="form-control" name="email"
                                id="">
                        </div>
                        <div class="col-md-6">
                            <label for="">Şifre</label>
                            <input type="text" placeholder="Şifre..." class="form-control" name="password" id="">
                        </div>
                    </div>
                    <br>

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
