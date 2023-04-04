@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Detail</h1>
@stop

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Nomor Urut: </b>{{$Bayi->no_urut}}</li>
                            <li class="list-group-item"><b>Nama: </b>{{$Bayi->nama}}</li>
                            <li class="list-group-item"><b>Alamat: </b>{{$Bayi->alamat}}</li>
                            <li class="list-group-item"><b>Tanggal Lahir: </b>{{$Bayi->tanggal_lahir}}</li>
                            <li class="list-group-item"><b>Berat Badan: </b>{{$Bayi->bb_lahir}}</li>
                            <li class="list-group-item"><b>Tinggi Badan: </b>{{$Bayi->tb_lahir}}</li>

                        </ul>
                    </div>
            <a class="btn btn-success mt-
            3" href="{{ route('bayi.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop