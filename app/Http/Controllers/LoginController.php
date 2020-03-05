<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index()
    {
        return view('welcome');
    }

    function checklogin(Request $request)
    {

        $this->validate($request, [
            'username'   => 'required|alphaNum',
            'password'  => 'required|min:3'
        ]);

        $user_data = array(
            'username'  => $request->get('username'),
            'password' => $request->get('password')
        );

        if(Auth::attempt($user_data))
        {
            return redirect('home');
        }
        else
        {
            return back()->with('error', 'Wrong Login Details');
        }

    }

    function successlogin()
    {
        return view('home');
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

