<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
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

    public function scores()
    {
        return view('catalog.scores');
    }

    public function search()
    {
        return view('catalog.search');
    }
}
