<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformatikaUnbaraController extends Controller
{
    public function index()
    {
        $data = ['title' => 'Informatika Unbara'];
        return view('informatikaunbara')->with($data);
    }
}
