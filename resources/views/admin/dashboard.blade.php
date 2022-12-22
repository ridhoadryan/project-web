@extends('layouts.admin')

@section('content')
  <div class="row">
    <!-- Jumlah Dosen -->
    <div class="col-lg-3 col-6">
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{$dosen}}</h3>
          <p>Dosen</p>
        </div>
      </div>
    </div>

    <!-- Jumlah Mata Kuliah -->
    <div class="col-lg-3 col-6">
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{$matakuliah}}</h3>
          <p>Mata Kuliah</p>
        </div>
      </div>
    </div>
  </div>
@endsection