<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function home()
    {
        $skills = DB::table('skills')->where('visibility', 1)->orderby('position', 'asc')->get();
        $projects = DB::table('projects')->where('visibility', 1)->orderby('position', 'asc')->take(3)->get();
        $videos = DB::table('videos')->where('visibility', 1)->orderby('position', 'asc')->take(3)->get();

        $AcP = DB::table('qualifications')->where('id', 1)->first();
        $Exp = DB::table('qualifications')->where('id', 2)->first();
        $TrC = DB::table('qualifications')->where('id', 3)->first();

        return view('home', compact('skills', 'projects', 'videos', 'AcP', 'Exp', 'TrC'));
    }

    public function all_projects()
    {
        $projects = DB::table('projects')->where('visibility', 1)->orderby('position', 'asc')->get();

        return view('User.all_projects', compact('projects'));
    }

    public function all_videos()
    {
        $videos = DB::table('videos')->where('visibility', 1)->orderby('position', 'asc')->get();

        return view('User.all_videos', compact('videos'));
    }

    //__function for contacts message store
    public function message_store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'msg_date' => now().date(''),
        ];

        // dd($data);

        DB::table('messages')->insert($data);

        $notify = ['message' => 'Message sent successfully', 'alert-type' => 'success'];
        return redirect()->back()->with($notify);
    }
}
