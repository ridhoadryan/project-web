@extends('layouts.main')

@section('content')
    <h2>Mata Kuliah Informatika</h2>

    @if(collect($mk)->count() < 1)
        <p class="text-center font-italic">Belum ada data mata kuliah yang ditampilkan.</p>
    @else
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr class="font-weight-bold">
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Semester</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mk as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->semester}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection