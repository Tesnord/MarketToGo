<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function create()
    {
        return view('login.index');
    }

    public function store(Request $request)
    {

        $phone = $request->post('phone');
        $code = $request->post('code');
        $response = Http::post('http://80.78.246.225:3000/api/v1/auth/login', ['phone' => $phone]);
        // if (!empty($phone)) {
        //     $response = Http::post('http://80.78.246.225:3000/api/v1/auth/login', ['phone' => $phone]);
        // } elseif (!empty($code)) {
        //     $response = Http::post('http://80.78.246.225:3000/api/v1/auth/login', ['code' => $code]);
        // } else {
        //     abort(404);
        // }
        return $response;
    }
}
