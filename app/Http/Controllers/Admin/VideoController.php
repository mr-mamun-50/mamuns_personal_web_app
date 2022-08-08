<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = DB::table('videos')->orderby('position', 'asc')->get();

        return view('admin.videos', compact('videos'));
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
        $link = $request->video_link;

        if(substr($request->video_link, 0, 24) == "https://www.youtube.com/") {
            $link = substr("$request->video_link", 24);
        } else if(substr($request->video_link, 0, 17) == "https://youtu.be/") {
            $link = substr("$request->video_link", 17);
        }

        $data = [
            'title' => $request->title,
            'video_link' => $link,
            'post_date' => now().date(''),
            'position' => $request->position,
            'visibility' => $request->visibility,
        ];

        DB::table('videos')->insert($data);

        $notify = ['message' => 'Video added successfully!', 'alert-type' => 'success'];
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
        $link = $request->video_link;

        if(substr($request->video_link, 0, 24) == "https://www.youtube.com/") {
            $link = substr("$request->video_link", 24);
        } else if(substr($request->video_link, 0, 17) == "https://youtu.be/") {
            $link = substr("$request->video_link", 17);
        }

        $data = [
            'title' => $request->title,
            'video_link' => $link,
            'position' => $request->position,
            'visibility' => $request->visibility,
        ];

        DB::table('videos')->where('id', $id)->update($data);

        $notify = ['message' => 'Video updated successfully!', 'alert-type' => 'success'];
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
        DB::table('videos')->where('id', $id)->delete();

        $notify = ['message' => 'Video deleted successfully!', 'alert-type' => 'success'];
        return redirect()->back()->with($notify);
    }
}
