<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Logo;
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
        // dd($logo);
        return view('FrontEnd.Home.Index',compact('logo'));
    }
}
