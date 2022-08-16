<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Mail;

class HireMeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hiring_msgs = DB::table('hire_me')->get();

        return view('admin.hiring_msg', compact('hiring_msgs'));
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
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
            'budget' => $request->budget,
            'requirements' => $request->requirements,
            'sent_date' => now().date(''),
            'sent_copy' => $request->sent_copy,
        ];

        if($request->sent_copy == 1) {

            Mail::send('User.hire_me_copy_mail', $data, function ($message) use ($data) {
                $message->to($data['email']);
                $message->subject('Copy of hiring message to '. config('app.name'));
            });
        }

        DB::table('hire_me')->insert($data);

        $notify = ['message' => 'Your message has been sent successfully!', 'alert-type' => 'success'];
        return redirect()->back()->with($notify);
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
        $info = DB::table('hire_me')->where('id', $id)->first();

        $data = [
            'name' => $info->name,
            'email' => $info->email,
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
        DB::table('hire_me')->where('id', $id)->delete();

        $notify = ['message'=>'Hiring request deleted successfully!', 'alert-type'=>'success'];
        return redirect()->back()->with($notify);
    }
}
