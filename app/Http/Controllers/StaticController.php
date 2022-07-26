<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function about()
    {
        return view('static.about');
    }

    public function delivery()
    {
        return view('static.delivery');
    }

    public function policy()
    {
        return view('static.policy');
    }

    public function provider()
    {
        return view('static.provider');
    }

    public function publics()
    {
        return view('static.publics');
    }

    public function faq()
    {
        return view('static.faq');
    }

    public function scoreInfo()
    {
        return view('static.score-info');
    }

    public function requisites()
    {
        return view('static.requisites');
    }

}
