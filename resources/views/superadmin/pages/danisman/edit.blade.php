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
                <h4 class="card-title" style="color:white">DANIŞMAN DÜZENLE</h4>
            </div>

            <div class="card-body">
                @foreach ($data as $dat)
                    <form action="{{ route('danisman.update') }}" method="POST">
                        @csrf

                        @if ($errors->any())
                            @foreach ($errors->all() as $item)
                                <div class="alert alert-danger">{{ $item }}</div>
                            @endforeach
                        @endif
                        <input type="hidden" name="id" value="{{ $dat->id }}" id="">
                        <div class="row">
                            <div class="col-md-4">
                                <h5>GENEL BİLGİLER</h5>
                            </div>
                            <div class="col-md-4"></div>
                            <div style="text-align: right" class="col-md-4">
                                <a href="{{ route('superadmin.danisman.settings', $dat->id) }}">
                                    <button type="button" class="btn btn-danger">GÜVENLİK AYARLARI</button>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">AD</label>
                                <input value="{{ $dat->name }}" type="text" class="form-control" name="name"
                                    id="">

                            </div>
                            <div class="col-md-6">
                                <label for="">SOYAD</label>
                                <input value="{{ $dat->surname }}" type="text" class="form-control" name="surname"
                                    id="">
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="">DEPARTMAN</label>
                                <select name="departman_id" class="form-control" id="">
                                    <option value="1">Lütfen ülke seçin</option>

                                    @foreach ($departman as $item)
                                        <option {{ $dat->department_id == $item->id ? 'selected' : '' }}
                                            value="{{ $item->id }}">{{ strtoupper($item->name) }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="">TELEFON</label>
                                <input type="text" class="form-control" name="phone" value="{{ $dat->phone }}"
                                    id="">
                            </div>
                        </div><br><br>

                        <div>
                            <input type="submit" value="EKLE" class="btn btn-primary" name="" id="">
                        </div>
                    </form>
                @endforeach

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
