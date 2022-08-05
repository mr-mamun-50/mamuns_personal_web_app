<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;
use File;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = DB::table('skills')->orderby('position', 'desc')->get();

        return view('admin.skills', compact('skills'));
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
        $name_slug = Str::of($request->name)->slug('-');

        $data = [
            'name' => $request->name,
            'category' => $request->category,
            'type' => $request->type,
            'position' => $request->position,
            'visibility' => $request->visibility,
        ];

        $logo = $request->file('logo');
        $input['logo'] = time().'-'.$name_slug.'.'.$logo->getClientOriginalExtension();
        $destinationPath = public_path('images/skill_logos');
        $logo->move($destinationPath, $input['logo']);

        $data['logo'] = $input['logo'];
        // dd($data);
        DB::table('skills')->insert($data);

        $notify = ['message'=>'New skill successfully added!', 'alert-type'=>'success'];
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
        $name_slug = Str::of($request->name)->slug('-');

        $data = [
            'name' => $request->name,
            'category' => $request->category,
            'type' => $request->type,
            'position' => $request->position,
            'visibility' => $request->visibility,
        ];

        if($request->logo) {

            if(File::exists(public_path('images/skill_logos/'.$request->old_logo))) {
                File::delete(public_path('images/skill_logos/'.$request->old_logo));
            }

            $logo = $request->file('logo');
            $input['logo'] = time().'-'.$name_slug.'.'.$logo->getClientOriginalExtension();
            $destinationPath = public_path('images/skill_logos');
            $logo->move($destinationPath, $input['logo']);

            $data['logo'] = $input['logo'];
        }
        else {
            $data['logo'] = $request->old_logo;
        }

        DB::table('skills')->where('id', $id)->update($data);

        $notify = ['message'=>'Skill successfully updated!', 'alert-type'=>'success'];
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
        $skill = DB::table('skills')->where('id', $id)->first();
        if(File::exists(public_path('images/skill_logos/'.$skill->logo))) {
            File::delete(public_path('images/skill_logos/'.$skill->logo));
        }
        DB::table('skills')->where('id', $id)->delete();

        $notify = ['message'=>'Skill successfully deleted!', 'alert-type'=>'success'];
        return redirect()->back()->with($notify);
    }
}
