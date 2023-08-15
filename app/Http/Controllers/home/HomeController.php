<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\Penghargaan;
use App\Models\Tentang;
use App\Models\Pengalaman;
use App\Models\Message;
use App\Models\Portfolio;
use App\Models\Keahlian;
use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    /**
     * Show the application home.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tentang = DB::table('tentang')->first();
        $pendidikan = DB::table('pendidikan')->get();
        $keahlian = DB::table('keahlian')->get();
        $portofolio = DB::table('portofolio')->get();
        $pc = $portofolio->count();
        $proyek = DB::table('portofolio')->get();
        $blog = DB::table('blog')->get();
        $peng = DB::table('penghargaan')->count();

        return view('home.index', compact('tentang', 'pendidikan', 'keahlian', 'portofolio', 'pc', 'proyek', 'blog', 'peng'));
    }
}
