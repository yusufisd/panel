@extends('danisman.layouts.master')
@section('title')
    Tahsilat Düzenle
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color: brown">
                <h4 class="card-title" style="color:white">TAHSİLAT DÜZENLE</h4>
            </div>
            <div class="card-body">
                @foreach ($data as $item)

                    
                <form action="{{ route('danisman.tahsilat.duzenle.post') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{$item->id}}" name="tahsilat_id" id="">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">ÖĞRENCİ</label>
                            <select name="ogr_id" class="form-control" id="">
                                <option value="">Lütfen öğrenci seçin</option>

                                @foreach ($ogr as $o)
                                    <option {{$item->ogr_id == $o->id ? 'selected' : ''}} value="{{$o->id}}">{{strtoupper($o->name)}} {{strtoupper($o->surname)}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="">TUTAR</label>
                            <input type="number" value="{{$item->tutar}}" name="tutar" class="form-control" id="">
                        </div>
                        <div class="col-md-7">
                            <label for="">AÇIKLAMA</label>
                            <input type="text" value="{{$item->description}}" class="form-control" name="description" id="">
                        </div>
                    </div>
                    <br>
                    <div class="right">
                        <input type="submit" class="btn btn-primary" value="KAYDET" name="" id="">
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
