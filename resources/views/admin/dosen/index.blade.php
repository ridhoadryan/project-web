@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow-sm">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h6>Daftar Dosen</h6>
                        <a href="{{route('admin.dosen.create')}}" class="btn btn-primary btn-sm">Tambah Dosen</a>
                    </div>
                </div>

                <div class="card-body">
                    @if (collect($dosen)->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>NIDN</th>
                                        <th>Jabatan</th>
                                        <th colspan="2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dosen as $dosen)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$dosen->nama}}</td>
                                            <td>{{$dosen->nidn}}</td>
                                            <td>{{$dosen->jabatan}}</td>
                                            <td>
                                                <a href="{{route('admin.dosen.edit', $dosen->id)}}" class="me-2"><i class="fa fa-pen text-warning"></i></a>
                                            </td>
                                            <td>
                                                <form action="{{route('admin.dosen.destroy', $dosen->id)}}" method="POST" onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')">
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
                        <p class="text-center font-italic">Belum ada data dosen.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection