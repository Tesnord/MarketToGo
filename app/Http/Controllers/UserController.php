<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        // $tokens = $request->session()->get('token');
        // dd($tokens['refreshToken']);
        // dd($request->session()->all());
        return view('login.user.index');
    }

    public function setting()
    {
        return view('login.user.setting');
    }

    public function subscribe()
    {
        return view('login.user.subscribe');
    }

    public function orders()
    {
        return view('login.user.orders');
    }
}
