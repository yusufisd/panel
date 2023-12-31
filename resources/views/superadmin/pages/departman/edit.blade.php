@extends('layouts.master')
@section('title')
    Departman Düzenle
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color: gray">
                <h4 class="card-title" style="color:white">DEPARTMAN DÜZENLE</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('departman.update') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Ülke</label>
                            <select name="ulke_id" class="form-control" id="">
                                @foreach ($ulkeler as $ulke)
                                    
                                <option {{$data->ulke_id == $ulke->id ? 'selected' : ''}} value="{{$ulke->id}}">{{$ulke->country_name}}</option>

                                @endforeach

                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">İsim</label>
                            <input value="{{$data->name}}" type="text" class="form-control" name="name" id="">
<input type="hidden" value="{{$data->id}}" name="id" id="">
                        </div>
                    </div><br>
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
