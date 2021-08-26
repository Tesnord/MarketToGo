<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ShopController extends Controller
{
    public function show($slug_shop)
    {
        $shops = $this->requestHelper->getRequest('shop/'.$slug_shop);
        $shop = $shops['data'];
        $products = $shop['products'];
        $slug = [
            'slug' => $slug_shop,
            'title' => $shop['title']
        ];
        // dd($shop);
        return view('catalog.shop.show', [
            'shop' => $shop,
            'products' => $products,
            'slug' => $slug,
        ]);
    }
}
