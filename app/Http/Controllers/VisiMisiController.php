<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function index()
    {
        $data = ['title' => 'Visi Misi'];
        return view('visimisi')->with($data);
    }
}
