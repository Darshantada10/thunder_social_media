<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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

    public function AuthUser(Request $request)
    {

        $field = filter_var($request->input('username'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $credentials = [
            $field => $request->input('username'),
            'password' => $request->input('password')
        ];

        if(Auth::attempt($credentials))
        {
            if(Auth::user()->status == 'regular')
            {
                return redirect('/home');
                // dd("Welcome");
            }
            else if(Auth::user()->status == 'blocked')
            {
                dd("sorry, but you're blocked");
            }
            else
            {
                return redirect('/');
            }
            // dd("true");
        }
        else
        {
            dd("false");
        }
    }

    public function Logout()
    {
        Session::flush();
        Auth::logout();
        return redirect ('/');
    }
}
