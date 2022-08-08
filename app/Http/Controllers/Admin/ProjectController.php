<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use File;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = DB::table('projects')->orderby('position', 'desc')->get();

        return view('admin.projects', compact('projects'));
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
        $title_slug = Str::of($request->title)->slug('-');

        $data = [
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'position' => $request->position,
            'github_link' => $request->github_link,
            'live_link' => $request->live_link,
            'visibility' => $request->visibility,
            'post_date' => now().date(''),

        ];

        $thumbnail = $request->file('thumbnail');
        $input['thumbnail'] = time().'-'.$title_slug.'.'.$thumbnail->getClientOriginalExtension();
        $destinationPath = public_path('images/project_thumbnails');
        $thumbnail->move($destinationPath, $input['thumbnail']);

        $data['thumbnail'] = $input['thumbnail'];

        DB::table('projects')->insert($data);

        $notify = ['message'=>'Project added successfully!', 'alert-type'=>'success'];
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
        $title_slug = Str::of($request->title)->slug('-');

        $data = [
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'position' => $request->position,
            'github_link' => $request->github_link,
            'live_link' => $request->live_link,
            'visibility' => $request->visibility,

        ];

        if($request->hasFile('thumbnail')){

            if(File::exists(public_path('images/project_thumbnails/'.$request->old_thumbnail))){
                File::delete(public_path('images/project_thumbnails/'.$request->old_thumbnail));
            }

            $thumbnail = $request->file('thumbnail');
            $input['thumbnail'] = time().'-'.$title_slug.'.'.$thumbnail->getClientOriginalExtension();
            $destinationPath = public_path('images/project_thumbnails');
            $thumbnail->move($destinationPath, $input['thumbnail']);

            $data['thumbnail'] = $input['thumbnail'];
        }
        else {
            $data['thumbnail'] = $request->old_thumbnail;
        }

        DB::table('projects')->where('id', $id)->update($data);

        $notify = ['message'=>'Project updated successfully!', 'alert-type'=>'success'];
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
        $project = DB::table('projects')->where('id', $id)->first();

        if(File::exists(public_path('images/project_thumbnails/'.$project->thumbnail))){
            File::delete(public_path('images/project_thumbnails/'.$project->thumbnail));
        }

        DB::table('projects')->where('id', $id)->delete();

        $notify = ['message'=>'Project deleted successfully!', 'alert-type'=>'success'];
        return redirect()->back()->with($notify);
    }
}
