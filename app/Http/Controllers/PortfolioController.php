<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = Portfolio::all();

        return view('admin.pages.portfolio.list', compact(['portfolio']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.portfolio.add');
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
            'jenis'       => 'required|string',
            'web'          => 'required|string',
            'github'           => 'required|string',
            'deskripsi'   => 'required|string',
            'foto'         => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->file('foto')) {
            $ValidatedData['foto'] = $request->file('foto')->store('porto');
        }

        Portfolio::create([
            'nama'          => $attributes['nama'],
            'jenis'  => $attributes['jenis'],
            'web'          => $attributes['web'],
            'github'           => $attributes['github'],
            'deskripsi'   => $attributes['deskripsi'],
            'foto'         => $ValidatedData['foto']
        ]);

        return redirect()->route('portfolio.create')->with('success', 'Your data has been saved !');
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
        $portfolio = Portfolio::find($id);

        return view('admin.pages.portfolio.edit', compact(['portfolio']));
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
        $portfolio = Portfolio::find($id);

        $attributes = $request->validate([
            'nama'          => 'required|string',
            'jenis'       => 'required|string',
            'web'          => 'required|string',
            'github'           => 'required|string',
            'deskripsi'   => 'required|string',
            'foto'         => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->file('foto')) {
            $ValidatedData['foto'] = $request->file('foto')->store('porto');
        }

        $portfolio->update([
            'nama'          => $attributes['nama'],
            'jenis'  => $attributes['jenis'],
            'web'          => $attributes['web'],
            'github'           => $attributes['github'],
            'deskripsi'   => $attributes['deskripsi'],
            'foto'         => $ValidatedData['foto']
        ]);

        return redirect()->route('portfolio.edit', $id)->with('success', 'Your data has been updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Portfolio::where('id', $id)->delete();

        return redirect()->route('portfolio.index')->with('success', 'Your data has been deleted !');
    }
}
