@extends('danisman.layouts.master')
@section('title')
    Başvurulacak Ülke Düzenle
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color: brown">
                <h4 class="card-title" style="color:white">BAŞVURULACAK ÜLKE DÜZENLE</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('danisman.basvurulcak.update') }}" method="POST">
                    @csrf
                    @foreach ($kisi as $ki)
                        <input type="hidden" value="{{$ki->id}}" name="id" id="">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">ÜLKE</label>
                                <select name="ulke_id" class="form-control" id="">
                                    <option value="">Lütfen ülke seçin</option>

                                    @foreach ($ulkeler as $ulke)
                                        <option {{ $ki->ulke_id == $ulke->id ? 'selected' : '' }}
                                            value="{{ $ulke->id }}">{{ strtoupper($ulke->country_name) }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="">ÜNİVERSİTE</label>
                                <input type="text" class="form-control" value="{{ $ki->universite }}" name="universite"
                                    id="">
                            </div>
                            <div class="col-md-4">
                                <label for="">BÖLÜM</label>
                                <input type="text" class="form-control" value="{{ $ki->bolum }}" name="bolum"
                                    id="">
                            </div>
                        </div><br>
                    @endforeach

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
