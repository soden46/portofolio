<?php

namespace App\Http\Controllers;

use App\Models\Keahlian;
use App\Models\Message;
use App\Models\Pengalaman;
use App\Models\Penghargaan;
use App\Models\Portfolio;
use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $client = new Client();
        $response = $client->get('https://api.github.com/users/soden46/repos');
        $datarepos = json_decode($response->getBody());

        $skill = Keahlian::all()->count();
        $experience = Pengalaman::all()->count();
        $portfolio = Portfolio::all()->count();
        $award = Penghargaan::all()->count();

        $message = Message::where('status', 0)->count();

        return view('admin.pages.home.content', compact(['datarepos', 'skill', 'experience', 'portfolio', 'award', 'message']));
    }
}
