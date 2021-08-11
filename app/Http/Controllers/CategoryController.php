<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\Http;

class CategoryController extends Controller
{
    public function index($slug_category)
    {
        $categories = $this->requestHelper->getCategories($slug_category);
        $category = $categories['data'];
        $breadcrumbs = $category['breadcrumbs'];
        $children = $category['categories'];
        $products = $category['products'];
        // dd($breadcrumbs);

        if ($category["root"]) {
            return view('catalog.category.index', [
                'category' => $category,
                'children' => $children,
                'products' => $products,
                'breadcrumbs' => $breadcrumbs,
            ]);
        } else {
            // dd($children);
            return view('catalog.category.show', [
                'category' => $category,
                'children' => $children,
                'products' => $products,
                'breadcrumbs' => $breadcrumbs,
            ]);
        }
    }

    public function favorite()
    {
        foreach (json_decode($_COOKIE['market_favorites']) as $favorite)
        {
            $slug_product = $favorite;
            foreach ($slug_product as $slug) {
                $q_favorites[] = Http::get('http://80.78.246.225:3000/api/v1/site/product/'.$slug)
                    ->collect()['data'];
            }
        }
        try {
            $product = $q_favorites;
        } catch (Exception $exception) {
            $product = [];
        }

        return view('catalog.favorite', array(
            'products' => $product,
        ));
    }

    public function scores()
    {
        return view('catalog.scores');
    }

    public function search()
    {
        return view('catalog.search');
    }
}
