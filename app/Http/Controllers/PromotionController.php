<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class PromotionController extends Controller
{
    public function index()
    {
        $promotions = $this->requestHelper->getRequest('promotions');
        $promotion = $promotions['data'];
        // dd($promotion);

        $paginator = $this->requestHelper->pagination($promotion['promotions'], $promotion['count'], 'promotions');

        return view('catalog.promotion.index', [
            'promotions' => $promotions['data']['promotions'],
            'paginator' => $paginator,
        ]);
    }

    public function show($slug_promotion)
    {
        $promotions = $this->requestHelper->getRequest('promotions/' . $slug_promotion);
        $promotion = $promotions['data'];
        // dd(url());
        $breadcrumbs = [
            'slug' => $slug_promotion,
            'title' => $promotion['title'],
        ];
        $paginator = $this->requestHelper->pagination($promotion['products'], $promotion['count'], $slug_promotion);

        return view('catalog.promotion.show', [
            'promotion' => $promotion,
            'products' => $promotion['products'],
            'filters' => $promotion['filters'],
            'paginator' => $paginator,
            'breadcrumbs' => $breadcrumbs,
        ]);
    }
}
