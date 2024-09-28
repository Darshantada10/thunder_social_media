<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Logo;
use App\Models\User;
use App\Models\Navbar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function Index()
    {
        $logo = Logo::where('status','=','1')->orderBy('id','desc')->first();
        $navbar = Navbar::where('visible','1')->orderBy('id','asc')->get();
        $data = Auth::user();
        // dd(Auth::user());
        $dob = Carbon::parse($data->dob);

        $day = $dob->day;
        $month = $dob->format('M');
        $year = $dob->year;

        // dd($data);
        
        return view('FrontEnd.Profile.Index',compact('logo','navbar','data','day','month','year'));
    }

    public function Update(Request $request)
    {
        // dd($request);
        $request->validate([
            'day' => 'required|integer|min:1|max:31',
            'month' => 'required|string',
            'year' => 'required|integer|min:1900|max:'.date('Y'),
        ]);

        $day = $request->input('day');
        $month = $request->input('month');
        $year = $request->input('year');


        $id = Auth::user()->id;

        $user = User::where('id',$id)->first();
        // dd($data);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->gender = $request->gender;

        $dob = Carbon::createFromFormat('d-M-Y',"$day-$month-$year")->format('Y-m-d');

        $user->dob = $dob;

        if($request->hasFile('profile_picture'))
        {
            $image = $request->file('profile_picture');
            $extension = $image->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $image->move('profile_picture/',$filename);
            $user->profile_picture = $filename;
        }

        $user->update();

        return redirect('/my-account');
    }
}
