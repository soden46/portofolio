<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\Pengalaman;
use App\Models\Penghargaan;
use Illuminate\Http\Request;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $award = Penghargaan::all();

        return view('admin.pages.award.list', compact(['award']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.award.add');
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
            'name'          => 'required|string',
            'description'   => 'required|string',
            'url'           => 'required|string',
            'icon'          => 'required|string',
        ]);

        Penghargaan::create([
            'name'          => $attributes['name'],
            'description'   => $attributes['description'],
            'url'           => $attributes['url'],
            'icon'          => $attributes['icon'],
        ]);

        return redirect()->route('award.create')->with('success', 'Your data has been saved !');
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
        $award = Penghargaan::find($id);

        return view('admin.pages.award.edit', compact(['award']));
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
            'name'          => 'required|string',
            'description'   => 'required|string',
            'url'           => 'required|string',
            'icon'          => 'required|string',
        ]);

        Penghargaan::where('id', $id)->update([
            'name'          => $attributes['name'],
            'description'   => $attributes['description'],
            'url'           => $attributes['url'],
            'icon'          => $attributes['icon'],
        ]);

        return redirect()->route('award.edit', $id)->with('success', 'Your data has been updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Penghargaan::where('id', $id)->delete();

        return redirect()->route('award.index')->with('success', 'Your data has been deleted !');
    }
}
