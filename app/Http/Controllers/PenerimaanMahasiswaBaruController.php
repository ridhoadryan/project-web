<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenerimaanMahasiswaBaruController extends Controller
{
    public function index()
    {
        $data = ['title' => 'Penerimaan Mahasiswa Baru'];
        return view('penerimaanmahasiswabaru')->with($data);
    }
}
