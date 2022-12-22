<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LowonganPekerjaanController extends Controller
{
    public function index()
    {
        $data = ['title' => 'Lowongan Pekerjaan'];
        return view('lowonganpekerjaan')->with($data);
    }
}
