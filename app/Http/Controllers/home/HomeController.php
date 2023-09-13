<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\Donate;
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
        $jasa = DB::table('jasa')->get();

        return view('home.index', compact('tentang', 'pendidikan', 'keahlian', 'portofolio', 'pc', 'proyek', 'blog', 'peng', 'jasa'))
            ->with('success', 'Terimakasih Saweran Anda Sudah Diterima');
    }

    public function jasa()
    {
        DB::table('jasa')->get();
    }

    public function donate(Request $request)
    {
        $donate = Donate::create([
            'name' => $request->name,
            'message' => $request->message,
            'amount' => $request->amount,
            'status' => "Failed"
        ]);
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $donate->id,
                'gross_amount' => $donate->amount,
            ),
            'customer_details' => array(
                'name' => $donate->name,
            ),
        );

        $tentang = DB::table('tentang')->first();
        $pendidikan = DB::table('pendidikan')->get();
        $keahlian = DB::table('keahlian')->get();
        $portofolio = DB::table('portofolio')->get();
        $pc = $portofolio->count();
        $proyek = DB::table('portofolio')->get();
        $blog = DB::table('blog')->get();
        $peng = DB::table('penghargaan')->count();

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('home.confirm', compact('snapToken', 'donate', 'tentang', 'pendidikan', 'keahlian', 'portofolio', 'pc', 'proyek', 'blog', 'peng'));
    }

    public function callback(Request $request)
    {
        $ServerKey = config('midtrans.server_key');
        $hased = hash("sha512", $request->order_id . $request->status_code . $request->amount . $ServerKey);
        if ($hased == $request->signature_key) {
            if ($request->transaction_status == 'capture') {
                $donate = Donate::find($request->order_id);
                $donate->update(['status' => 'Success']);
            }
            return redirect('home.index')
                ->with('success', 'Terimakasih Saweran Anda Sudah Diterima');
        }
    }

    public function invoice($id)
    {
        $donate = Donate::find($id);
        return view('home.invoice', compact('donate'));
    }
}
