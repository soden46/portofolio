<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Tentang;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = Tentang::all()->first();

        return view('admin.pages.about.content', compact(['about']));
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
        $about = Tentang::find($id);
        $ValidatedData = $request->validate([
            'nama' => ['required', 'max:255'],
            'alamat' => ['required', 'max:255'],
            'umur' => ['required', 'max:255'],
            'gelar' => ['required', 'max:255'],
            'jurusan' => ['required', 'max:255'],
            'email' => ['required', 'max:255'],
            'status' => ['required', 'max:255'],
            'deskripsi' => ['required', 'max:255'],
            'foto' => ['mimes:jpg,jpeg,png', 'max:5048'],
            'cv' => ['mimes:pdf,PDF,doc,docx,DOCX,DOC', 'max:5048'],
        ]);

        if ($request->file('foto')) {
            $ValidatedData['foto'] = $request->file('foto')->store('about');
        }

        if ($request->file('cv')) {
            $ValidatedData['cv'] = $request->file('cv')->store('about');
        }
        $about->update($ValidatedData);

        return redirect()->route('about.index')->with('success', 'Your data has been updated !');
    }
}
