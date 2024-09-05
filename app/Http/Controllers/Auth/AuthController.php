<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Login()
    {
        return view('Auth.Auth');
    }

    public function SaveUser(Request $request)
    {
        $user = new User;

        // $user->name = $request->name;
        // $user->username = $request->username;
        // $user->dob = $request->dob;
        // $user->password = $request->password;
        // $user->email = $request->email;
        // $user->gender = $request->gender;
        // $user->save();

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'dob' => $request->dob,
            'gender' => $request->gender,
        ]);

        return redirect('/');
    }
}
