<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index() 
    {
        $data = [
            'title' => 'Mata Kuliah',
            'mk' => MataKuliah::all()
        ];

        return view('matakuliah')->with($data);
    }
}
