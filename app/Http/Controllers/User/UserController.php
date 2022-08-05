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

        return view('home', compact('skills'));
    }
}
