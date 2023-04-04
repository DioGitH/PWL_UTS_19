@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Data Bayi</h1>
@stop

@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="float-right my-2">
                    <a class="btn btn-success" href="{{ route('bayi.create') }}"> Input data bayi</a>
                </div>
                <form action="{{ route('bayi.index') }}" method="GET" role="search">
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="search" class="form-control float-right" placeholder="Search Nama">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
                </form>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No Urut</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Tanggal Lahir</th>
                      <th>Berat Badan</th>
                      <th>Tinggi Badan</th>
                      <th width="280px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($bayi as $Bayi)
                        <tr>
                            <td>{{ $Bayi->no_urut }}</td>
                            <td>{{ $Bayi->nama }}</td>
                            <td>{{ $Bayi->alamat }}</td>
                            <td>{{ $Bayi->tanggal_lahir }}</td>
                            <td>{{ $Bayi->bb_lahir }}</td>
                            <td>{{ $Bayi->tb_lahir }}</td>
                            <td>
                            <form action="{{ route('bayi.destroy',$Bayi->no_urut) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('bayi.show',$Bayi->no_urut) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('bayi.edit',$Bayi->no_urut) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              
              <!-- /.card-body -->
            </div>
            @if(isset($bayi))
                @if($bayi->currentPage() > 1)
                    <a class="btn btn-primary" href="{{ $bayi->previousPageUrl() }}">Previous</a>
                @endif
                
                @if($bayi->hasMorePages())
                    <a class="btn btn-primary" href="{{ $bayi->nextPageUrl() }}">Next</a>
                @endif
                @endif
                <br><br>
            <!-- /.card -->
          </div>
        </div>
        
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop