<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use App\Models\Navbar;
use Illuminate\Http\Request;

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
        // dd($navbar);
        // dd($logo);
        return view('FrontEnd.Home.Index',compact('logo','navbar'));
    }
}
