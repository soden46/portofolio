<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Pendidikan;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendidikan = Pendidikan::all();

        return view('admin.pages.education.list', compact(['pendidikan']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.education.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'nama'          => 'required|string',
            'tahun'          => 'required|string',
            'jurusan'         => 'required|string',
            'fakultas'   => 'required|string',
            'deskripsi'   => 'required|string',
        ]);

        Pendidikan::create([
            'nama'          => $attributes['nama'],
            'tahun'          => $attributes['tahun'],
            'jurusan'         => $attributes['jurusan'],
            'fakultas'   => $attributes['fakultas'],
            'deskripsi'   => $attributes['deskripsi'],
        ]);

        return redirect()->route('education.create')->with('success', 'Your data has been saved !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pendidikan = Pendidikan::find($id);

        return view('admin.pages.education.edit', compact(['pendidikan']));
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
        $attributes = $request->validate([
            'nama'          => 'required|string',
            'tahun'          => 'required|string',
            'jurusan'         => 'required|string',
            'fakultas'   => 'required|string',
            'deskripsi'   => 'required|string',
        ]);
        Pendidikan::where('id', $id)->update([
            'nama'          => $attributes['nama'],
            'tahun'          => $attributes['tahun'],
            'jurusan'         => $attributes['jurusan'],
            'fakultas'   => $attributes['fakultas'],
            'deskripsi'   => $attributes['deskripsi'],
        ]);

        return redirect()->route('education.edit', $id)->with('success', 'Your data has been updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pendidikan::where('id', $id)->delete();

        return redirect()->route('education.index')->with('success', 'Your data has been deleted !');
    }
}
