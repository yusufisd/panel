@extends('layouts.master')
@section('title')
    Email Gönder
@endsection
@section('css')
    <link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" style="background-color: gray">
                <h4 class="card-title" style="color:white">EMAİL GÖNDER</h4>
            </div><br>
            <div class="card-body">
                <form action="{{ route('mail.gonder.post') }}" method="POST">
                    @csrf

                    <div class="row container">
                        <label for="">KONU</label>
                        <input type="text" class="form-control" name="konu" id="">
                    </div><br>

                    <div class="row container">
                        <label for="">MESAJ</label>
                        <textarea name="mesaj" class="form-control" id="" cols="30" rows="3"></textarea>
                    </div><br><br><br>

                    <div class="row container">
                        <div style="text-align: left">

                            <input onclick="checkAll(this)" type="checkbox"  name="" id="tumu">
                            <label for="tumu">TÜMÜNÜ SEÇ</label>
                        </div>
                        <br><br>

                        <table id="" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                                <tr>
                                    <th style="width:50px">Seç</th>
                                    <th>Öğrenci</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
    
    
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td style="width:50px">
                                            <input type="checkbox" name="select[{{$item->id}}]" id="tumu{{$item->id}}">
                                        </td>
                                        <td>{{ $item->name }} {{ $item->surname }}</td>
                                        <td>{{ $item->email }}</td>
                                    </tr>
                                @endforeach
    
                            </tbody>
                        </table>
                    </div><br><br>
                    <div>
                        <input type="submit" value="EKLE" class="btn btn-primary" name="" id="">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')

<script>
    function checkAll(o) {
  var boxes = document.getElementsByTagName("input");
  for (var x = 0; x < boxes.length; x++) {
    var obj = boxes[x];
    if (obj.type == "checkbox") {
      if (obj.name != "check")
        obj.checked = o.checked;
    }
  }
}
</script>

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
