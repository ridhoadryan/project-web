<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'dosen' => collect(Dosen::all())->count(),
            'matakuliah' => collect(MataKuliah::all())->count()
        ];

        return view('admin.dashboard')->with($data);
    }
}
