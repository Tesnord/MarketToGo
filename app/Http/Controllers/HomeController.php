<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

        $number = $_GET['page'] ?? 1;

        $filter = [
            'offset' => ($number - 1) * 10,
            'limit' => 10,
            'sort' => 'price_desc',
            'price_min' => $_GET['price_min'] ?? null,
            'price_max' => $_GET['price_max'] ?? null,
            'brands' => $_GET['brands'] ?? null,
            'tags' => $_GET['tags'] ?? null,
            'in_stock' => $_GET['in_stock'] ?? null,
            'promotion' => $_GET[''] ?? null,
        ];

        $result = Http::post('http://80.78.246.225:4002/v1/site/favorites', $GLOBALS["favorites"])->json();
        // $result = $this->requestHelper->getRequest('favorites', 'post', 'domain', $GLOBALS["favorites"]);
        dd($result);
    }

    public function postTest(Request $request)
    {
        return view('test');
    }
}
