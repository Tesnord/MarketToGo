<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\LengthAwarePaginator;

class ShopController extends Controller
{
    public function show($slug_shop)
    {
        $shops = $this->requestHelper->getFilterRequest('shop/' . $slug_shop);
        $shop = $shops['request']['data'];

        $slug = [
            'slug' => $slug_shop,
            'title' => $shop['title']
        ];

        $paginator = new LengthAwarePaginator($shop['products'], $shop['count'], 30);
        $paginator->setPath('/catalog/' . $slug_shop);

        return view('catalog.shop.show', [
            'shop' => $shop,
            'products' => $shop['products'],
            'slug' => $slug,
            'paginator' => $paginator,
            'sort_param' => $shops['sort_param'],
            'sort' => $shops['sort'],
        ]);
    }
}
