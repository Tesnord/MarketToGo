<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class PromotionController extends Controller
{
    public function index()
    {
        $promotions = $this->requestHelper->getRequest('promotions');
        // dd($promotions);
        $paginator = new LengthAwarePaginator($promotions['data'], count($promotions), 30);
        $paginator->setPath('/promotions');
        return view('catalog.promotion.index', [
            'promotions' => $promotions['data'],
            'paginator' => $paginator,
        ]);
    }

    public function show($slug_promotion)
    {
        $promotion = $this->requestHelper->getFilterRequest('promotions/'.$slug_promotion);
        // dd($promotion);

        $paginator = new LengthAwarePaginator($promotion['request']['data']['products'], count($promotion['request']['data']['products']), 30);
        $paginator->setPath('/promotions/' . $slug_promotion);
        return view('catalog.promotion.show', [
            'promotion' => $promotion['request']['data'],
            'products' => $promotion['request']['data']['products'],
            'paginator' => $paginator,
            'sort_param' => $promotion['sort_param'],
            'sort' => $promotion['sort'],
        ]);
    }
}
