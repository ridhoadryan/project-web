<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KerjaSamaController extends Controller
{
    public function index()
    {
        $data = ['title' => 'Kerja Sama'];
        return view('kerjasama')->with($data);
    }
}
