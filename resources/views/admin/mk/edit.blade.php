@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow-sm">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h6>Edit Data Dosen</h6>
                        <a href="{{route('admin.matakuliah.index')}}" class="btn btn-primary btn-sm">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{route('admin.matakuliah.update', $mk->id)}}" method="POST">
                        @csrf
                        @method('PUT')

                        {{-- Nama --}}
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama Mata Kuliah</label>
                            <input type="text" class="form-control" name="nama" id="nama" autocomplete="off" autofocus value="{{$mk->nama}}">
                        </div>

                        {{-- Semester --}}
                        <div class="form-group">
                            <label for="semester" class="form-label">Semester</label>
                            <input type="text" class="form-control" name="semester" id="semester" autocomplete="off" value="{{$mk->semester}}">
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