<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Logo;
use App\Models\Navbar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function Index()
    {
        $logo = Logo::where('status','=','1')->orderBy('id','desc')->first();
        $navbar = Navbar::where('visible','1')->orderBy('id','asc')->get();
        
        return view('FrontEnd.Profile.Index',compact('logo','navbar'));
    }
}
