<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\Blog;
use App\Models\Pengalaman;
use App\Models\Penghargaan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::all();

        return view('admin.pages.blog.list', compact(['blog']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.blog.add');
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
            'isi'           => 'required|string',
            'foto'          => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->file('foto')) {
            $attributes['foto'] = $request->file('foto')->store('blog');
        }
        $user = Auth::user()->nama;
        Blog::create([
            'judul'          => $attributes['judul'],
            'user'   => $user,
            'isi'           => $attributes['isi'],
            'kutipan'          => Str::limit(strip_tags($request->isi), 150),
            'foto'          => $attributes['foto'],
        ]);

        return redirect()->route('blog.index')->with('success', 'Your data has been saved !');
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
        $blog = Penghargaan::find($id);

        return view('admin.pages.blog.edit', compact(['blog']));
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

        Blog::where('id', $id)->update([
            'name'          => $attributes['name'],
            'description'   => $attributes['description'],
            'url'           => $attributes['url'],
            'icon'          => $attributes['icon'],
        ]);

        return redirect()->route('blog.edit', $id)->with('success', 'Your data has been updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::where('id', $id)->delete();

        return redirect()->route('blog.index')->with('success', 'Your data has been deleted !');
    }
}
