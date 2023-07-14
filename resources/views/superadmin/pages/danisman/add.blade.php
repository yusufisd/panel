@extends('layouts.master')
@section('title')
    Danışman Ekle
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color: gray">
                <h4 class="card-title" style="color:white">DANIŞMAN EKLE</h4>
            </div>

            <div class="card-body">
                <form action="{{ route('danisman.store') }}" method="POST">
                    @csrf

                    @if ($errors->any())
                        @foreach ($errors->all() as $item)
                            <div class="alert alert-danger">{{ $item }}</div>
                        @endforeach
                    @endif

                    <h5>GENEL BİLGİLER</h5><br>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">AD</label>
                            <input placeholder="İsim..." type="text" class="form-control" name="name" id="">

                        </div>
                        <div class="col-md-6">
                            <label for="">SOYAD</label>
                            <input placeholder="Soyisim..." type="text" class="form-control" name="surname"
                                id="">
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="">DEPARTMAN</label>
                            <select name="departman_id" class="form-control" id="">
                                <option value="1">Lütfen departman seçin</option>

                                @foreach ($departman as $item)
                                    <option value="{{ $item->id }}">{{ strtoupper($item->name) }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">TELEFON</label>
                            <input type="text" class="form-control" name="phone" placeholder="Telefon..."
                                id="">
                        </div>
                    </div><br><br><hr>

                    <h5>GÜVENLİK</h5><br>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="">E-MAİL</label>
                            <input type="text" class="form-control" name="email" placeholder="Email..." id="">
                        </div>
                        <div class="col-md-6">
                            <label for="">ŞİFRE</label>
                            <input type="text" class="form-control" name="password" placeholder="Şifre..."
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
