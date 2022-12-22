@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow-sm">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h6>Daftar Mata Kuliah</h6>
                        <a href="{{route('admin.matakuliah.create')}}" class="btn btn-primary btn-sm">Tambah Mata Kuliah</a>
                    </div>
                </div>

                <div class="card-body">
                    @if (collect($mk)->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Semester</th>
                                        <th colspan="2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mk as $mk)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$mk->nama}}</td>
                                            <td>{{$mk->semester}}</td>
                                            <td>
                                                <a href="{{route('admin.matakuliah.edit', $mk->id)}}" class="me-2"><i class="fa fa-pen text-warning"></i></a>
                                            </td>
                                            <td>
                                                <form action="{{route('admin.matakuliah.destroy', $mk->id)}}" method="POST" onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-none"><i class="fa fa-trash text-danger"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p class="text-center font-italic">Belum ada data mata kuliah.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection