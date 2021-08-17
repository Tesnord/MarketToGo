<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        $categories = $this->requestHelper->getCategoriesMain();
        return view('home', [
            'categories' => $categories,
        ]);
    }

    public function getTest()
    {

        return view('test');
    }

    public function postTest(Request $request)
    {
        return view('test');
    }
}
