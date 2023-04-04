

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit Data</h1>
@stop

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-body">
                
                <form method="post" action="{{ route('bayi.update', $Bayi->no_urut) }}" id="myForm">
                @csrf
                @method('PUT')<div class="form-group">
                <label for="no_urut">Nomor Urut</label>
                <input type="text" name="no_urut" class="form-control" id="no_urut" value="{{ $Bayi->no_urut }}" ariadescribedby="no_urut" >
                </div>
                <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" value="{{ $Bayi->nama }}" ariadescribedby="nama" >
                </div>
                <div class="form-group">
                <label for="Alamat">Alamat</label>
                <input type="alamat" name="alamat" class="form-control" id="alamat" value="{{ $Bayi->alamat }}" ariadescribedby="alamat" >
                </div>
                <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="tanggal_lahir" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="{{ $Bayi->tanggal_lahir }}" ariadescribedby="tanggal_lahir" >
                </div>
                <div class="form-group">
                <label for="bb_lahir">Berat Badan</label>
                <input type="bb_lahir" name="bb_lahir" class="form-control" id="bb_lahir" value="{{ $Bayi->bb_lahir }}" ariadescribedby="bb_lahir" >
                </div>
                <div class="form-group">
                <label for="tb_lahir">Tinggi Badan</label>
                <input type="tb_lahir" name="tb_lahir" class="form-control" id="tb_lahir" value="{{ $Bayi->tb_lahir }}" aria-describedby="tb_lahir" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
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