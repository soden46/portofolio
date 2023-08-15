<?php

namespace App\Http\Controllers;

use App\Models\Keahlian;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skill = Keahlian::all();

        return view('admin.pages.skill.list', compact(['skill']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.skill.add');
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
            'deskripsi'    => 'required|string',
        ]);

        Keahlian::create([
            'nama'          => $attributes['nama'],
            'deskripsi'    => $attributes['deskripsi'],
        ]);

        return redirect()->route('skill.create')->with('success', 'Your data has been saved !');
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
        $skill = Keahlian::find($id);

        return view('admin.pages.skill.edit', compact(['skill']));
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
            'deskripsi'    => 'required|string',
        ]);

        Keahlian::where('id', $id)->update([
            'nama'          => $attributes['nama'],
            'deskripsi'    => $attributes['deskripsi'],
        ]);

        return redirect()->route('skill.edit', $id)->with('success', 'Your data has been updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Keahlian::where('id', $id)->delete();

        return redirect()->route('skill.index')->with('success', 'Your data has been deleted !');
    }
}
