<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetaKurikulumController extends Controller
{
    public function index()
    {
        $data = ['title' => 'Peta Kurikulum'];
        return view('petakurikulum')->with($data);
    }
}
