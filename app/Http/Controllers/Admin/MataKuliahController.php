<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    private $title = 'Mata Kuliah';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => $this->title,
            'mk' => MataKuliah::all()
        ];

        return view('admin.mk.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => $this->title,
            'curr' => 'Tambah Data ' . $this->title
        ];

        return view('admin.mk.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        MataKuliah::create($request->except('_token'));
        return redirect()->route('admin.matakuliah.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'title' => $this->title,
            'curr' => 'Edit Data ' . $this->title,
            'mk' => MataKuliah::findOrFail($id)
        ];

        return view('admin.mk.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        MataKuliah::findOrFail($id)->update($request->except(['_token', '_method']));
        return redirect()->route('admin.matakuliah.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MataKuliah::destroy($id);
        return redirect()->route('admin.matakuliah.index');
    }
}
