@extends('danisman.layouts.master')

@section('title')
    Eğitim Programı Düzenle
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">
@endsection
@section('content')


    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color: brown">
                <h4 class="card-title" style="color:white">EĞİTİM PROGRAMI DÜZENLE</h4>
            </div>
            <div class="card-body">
                
                <form action="{{route('danisman.egitim_programi.update')}}" method="POST">
                    @csrf
                    <div class="row">
                        <input value="{{$data->name}}" type="text" class="form-control" name="name" id="">
                        <input type="hidden" name="id" value="{{$data->id}}" id="">
                    </div><br>
                    <div>
                        <input type="submit" value="DÜZENLE" class="btn btn-primary"  id="">
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
