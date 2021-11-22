<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        $home = $this->requestHelper->getRequest('catalog/main');
        // dd($categories);
        return view('home', [
            'categories' => $home['data']['categories'],
            'banners' => $home['data']['banners'],
        ]);
    }

    public function getTest(Request $request)
    {
        // dd(session()->all());
        $sort = $request->post('sort');
        $result = $this->paginate->paginate('https://jsonplaceholder.typicode.com/posts', 20);
        return view('test', [
            'items' => $result['items'],
            'page' => $result['page'],
            'total_pages' => $result['total_pages'],
            'pages' => $result['pages'],
        ]);
    }

    public function postTest(Request $request)
    {
        return view('test');
    }
}
