@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow-sm">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h6>Edit Data Dosen</h6>
                        <a href="{{route('admin.dosen.index')}}" class="btn btn-primary btn-sm">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{route('admin.dosen.update', $dosen->id)}}" method="POST">
                        @csrf
                        @method('PUT')

                        {{-- Nama --}}
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama Dosen</label>
                            <input type="text" class="form-control" name="nama" id="nama" autocomplete="off" autofocus value="{{$dosen->nama}}">
                        </div>

                        {{-- NIDN --}}
                        <div class="form-group">
                            <label for="nidn" class="form-label">NIDN Dosen</label>
                            <input type="text" class="form-control" name="nidn" id="nidn" autocomplete="off" value="{{$dosen->nidn}}">
                        </div>

                        {{-- Jabatan --}}
                        <div class="form-group">
                            <label for="jabatan" class="form-label">Jabatan Dosen</label>
                            <input type="text" class="form-control" name="jabatan" id="jabatan" autocomplete="off" value="{{$dosen->jabatan}}">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection