<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Logo;
use App\Models\Post;
use App\Models\Navbar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function Index()
    {
        // db query
        // DB::table('logos')->
        // Eloquent ORM
        // $logo = Logo::all();
        // $logo = Logo::where('status','=','1')->get();
        $logo = Logo::where('status','=','1')->orderBy('id','desc')->first();
        $navbar = Navbar::where('visible','1')->orderBy('id','asc')->get();
        $userdata = Auth::user();
        $posts = Post::all();
        // $posts->user->profile_picture
        // variable -> relation function name -> field
        // dd($posts);
        // dd($userdata);
        // dd($navbar);
        // dd($logo);
        return view('FrontEnd.Home.Index',compact('logo','navbar','userdata','posts'));
    }
}
