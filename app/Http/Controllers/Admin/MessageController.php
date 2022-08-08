<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Mail;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = DB::table('messages')->orderby('id', 'desc')->get();

        return view('admin.messages', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
        //
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
        $info = DB::table('messages')->where('id', $id)->first();

        $data = [
            'name' => $info->name,
            'email' => $info->email,
            'message' => $info->message,
            'subject' => $request->subject,
            'reply_msg' => $request->reply_msg,
        ];
        // dd($data);

        Mail::send('admin.reply_msg', $data, function ($message) use ($data) {
            $message->to($data['email']);
            $message->subject($data['subject']);
        });

        $notify = ['message'=>'Reply mail sent successfully!', 'alert-type'=>'success'];
        return redirect()->back()->with($notify);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        db::table('messages')->where('id', $id)->delete();

        $notify = ['message'=>'Message deleted successfully!', 'alert-type'=>'success'];
        return redirect()->back()->with($notify);
    }
}
