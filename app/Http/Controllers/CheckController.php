<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function Index()
    {
        return view('Unauthorized');
    }
    public function api()
    {
        $data = User::all();
        // echo $data;
        return response()->json($data);
    }
    public function saveuser(Request $request)
    {
        // dd($request);
        // $email = $request->email;
        // $username = $request->username;
        
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'dob' => $request->dob ?? null,
            'gender' => $request->gender ?? 'male',
        ]);

        return response()->json(['message'=>'Account Created Successfully']);
    }
}
