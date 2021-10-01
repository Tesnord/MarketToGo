<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        $categories = $this->requestHelper->getRequest('catalog/main');
        return view('home', [
            'categories' => $categories['data'],
        ]);
    }

    public function getTest(Request $request)
    {
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
