<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index()
    {
        $data = ['title' => 'Sejarah'];
        return view('sejarah')->with($data);
    }
}
