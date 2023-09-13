<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\Blog;
use App\Models\Jasa;
use App\Models\Pengalaman;
use App\Models\Penghargaan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class JasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jasa = Jasa::all();

        return view('admin.pages.jasa.list', compact(['jasa']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.jasa.add');
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
            'judul'          => 'required|string',
            'deskripsi'           => 'required|string',
            'foto'          => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048'
        ]);

        if ($request->file('foto')) {
            $attributes['foto'] = $request->file('foto')->store('jasa');
        }
        Jasa::create([
            'judul'          => $attributes['judul'],
            'deskripsi'           => $attributes['deskripsi'],
            'foto'          => $attributes['foto'],
        ]);

        return redirect()->route('admin.jasa.index')->with('success', 'Your data has been saved !');
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
        $jasa = Jasa::find($id);

        return view('admin.pages.jasa.edit', compact(['jasa']));
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
            'judul'          => 'required|string',
            'deskripsi'           => 'required|string',
            'foto'          => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048'
        ]);

        Jasa::where('id', $id)->update([
            'judul'          => $attributes['nama'],
            'deskripsi'   => $attributes['deskripsi'],
            'foto'           => $attributes['foto'],
        ]);

        return redirect()->route('admin.jasa.edit', $id)->with('success', 'Your data has been updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jasa::where('id', $id)->delete();

        return redirect()->route('admin.jasa.index')->with('success', 'Your data has been deleted !');
    }
}
