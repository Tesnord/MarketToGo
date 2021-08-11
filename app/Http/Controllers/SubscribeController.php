<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function index()
    {
        return view('catalog.subscribe.index');
    }

    public function show()
    {
        return view('catalog.subscribe.show');
    }
}
