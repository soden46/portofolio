<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Hubungi;
use Illuminate\Support\Facades\Mail;

class HubungiController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function contactForm()
    {
        return redirect('/#email-section');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function storeContactForm(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'subjek' => 'required',
            'pesan' => 'required',
        ]);

        $input = $request->all();

        Hubungi::create($input);

        //  Send mail to admin
        Mail::send('home.email', array(
            'name' => $input['nama'],
            'email' => $input['email'],
            'subject' => $input['subjek'],
            'pesan' => $input['pesan'],
        ), function ($message) use ($request) {
            $message->from($request->email);
            $message->to('info@syarifsoden.my.id', 'Admin')->subject($request->get('subjek'));
        });

        return redirect('/#email-section')->with(['success' => 'Pesan Anda Berhasil Dikirim']);
    }
}
