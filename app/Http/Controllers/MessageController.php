<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use stdClass;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $message = Message::all();

        return view('admin.pages.message.list', compact(['message']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message = Message::find($id);

        return view('admin.pages.message.detail', compact(['message']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function send($id)
    {
        $message = Message::find($id);

        return view('admin.pages.message.send', compact(['message']));
    }

    /**
     * Post Email
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postEmail(Request $request, $id)
    {
        // $data = new stdClass();
        $data = [
            'subject'   => $request->subject,
            'body'      => $request->message,
        ];
        // $data->subject = $request->subject;
        // $data->body = $request->body;

        Mail::to($request->to)->send(new SendEmail($data));

        Message::where('id', $id)->update([
            'status'    => 1,
        ]);

        return redirect()->route('message.index')->with('success', 'Your email was successfully sent !');
    }
}
