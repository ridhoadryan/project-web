<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StrukturOrganisasiController extends Controller
{
    public function index()
    {
        $data = ['title' => 'Struktur Organisasi'];
        return view('strukturorganisasi')->with($data);
    }
}
