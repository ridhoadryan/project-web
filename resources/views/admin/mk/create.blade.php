@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow-sm">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h6>Tambah Mata Kuliah</h6>
                        <a href="{{route('admin.matakuliah.index')}}" class="btn btn-primary btn-sm">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{route('admin.matakuliah.store')}}" method="POST">
                        @csrf

                        {{-- Nama --}}
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama Mata Kuliah</label>
                            <input type="text" class="form-control" name="nama" id="nama" autocomplete="off" autofocus>
                        </div>

                        {{-- Semester --}}
                        <div class="form-group">
                            <label for="semester" class="form-label">Semester</label>
                            <select name="semester" id="semester" class="form-control">
                                @php $semester = [1,2,3,4,5,6,7]; @endphp
                                <option disabled selected hidden>=== Pilih salah satu ===</option>
                                @foreach ($semester as $sem)
                                    <option value="{{$sem}}">Semester {{$sem}}</option>
                                @endforeach
                            </select>
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