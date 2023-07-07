@extends('layouts.master')
@section('title')
    Ödeme Ekle
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color: gray">
                <h4 class="card-title" style="color:white">ÖDEME EKLE</h4>
            </div><br>
            <div class="card-body">
                <form action="{{ route('danisman_muhasebe.odeme_yap.post') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">DANIŞMAN</label>
                            <select name="danisman_id" class="form-control" id="">
                                <option value="">Lütfen danışman seçin</option>

                                @foreach ($danismanlar as $item)
                                    <option value="{{ $item->id }}">{{ strtoupper($item->name) }}
                                        {{ strtoupper($item->surname) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="">TUTAR</label>
                            <input type="number" class="form-control" name="tutar" id="">
                        </div>
                        <div class="col-md-7">
                            <label for="">AÇIKLAMA</label>
                            <input type="text" class="form-control" name="description" id="">
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
