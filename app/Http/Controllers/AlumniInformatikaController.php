<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumniInformatikaController extends Controller
{
    public function index()
    {
        $data = ['title' => 'Alumni Informatika'];
        return view('alumniinformatika')->with($data);
    }
}
