@extends('layouts.main')

@section('content')
    <h2>Dosen Informatika</h2>

    @if(collect($dosen)->count() < 1)
        <p class="text-center font-italic">Belum ada data dosen yang ditampilkan.</p>
    @else
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr class="font-weight-bold">
                        <th>No.</th>
                        <th>Nama</th>
                        <th>NIDN</th>
                        <th>Jabatan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dosen as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->nidn}}</td>
                            <td>{{$item->jabatan}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection