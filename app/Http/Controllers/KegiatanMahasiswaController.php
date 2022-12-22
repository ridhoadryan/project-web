<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KegiatanMahasiswaController extends Controller
{
    public function index()
    {
        $data = ['title' => 'Kegiatan Mahasiswa'];
        return view('kegiatanmahasiswa')->with($data);
    }
}
