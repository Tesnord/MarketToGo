<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\LengthAwarePaginator;

class ShopController extends Controller
{
    public function show($slug_shop)
    {
        $shops = $this->requestHelper->getRequest('shop/' . $slug_shop);
        $shop = $shops['data'];
        // dd($shop);
        $slug = [
            'slug' => $slug_shop,
            'title' => $shop['title']
        ];
        $paginator = $this->requestHelper->pagination($shop['products'], $shop['count'], $slug_shop);

        return view('catalog.shop.show', [
            'shop' => $shop,
            'products' => $shop['products'],
            'promotions' => $shop['promotions'],
            'filters' => $shop['filters'],
            'slug' => $slug,
            'paginator' => $paginator,
        ]);
    }
}
