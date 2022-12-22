<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dosen',
            'dosen' => Dosen::all(),
        ];

        return view('dosen')->with($data);
    }
}
