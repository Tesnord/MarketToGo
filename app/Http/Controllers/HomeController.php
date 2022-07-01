<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request)
    {

        $home = $this->requestHelper->getRequest('catalog/main');
        // dd($home);
        return view('home', [
            'categories' => $home['data']['categories'],
            'banners' => $home['data']['banners'],
        ]);
    }

    public function getTest(Request $request)
    {

        dd($request->session()->get('token'));
    }

    public function postTest(Request $request)
    {
        return view('test');
    }
}
