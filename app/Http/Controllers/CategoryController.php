<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CategoryController extends Controller
{
    public function index($slug_category)
    {
        $categories = $this->requestHelper->getRequest('categories/'.$slug_category);
        $category = $categories['data'];
        $breadcrumbs = $category['breadcrumbs'];
        $children = $category['categories'];
        $products = $category['products'];

        if ($category["root"]) {
            return view('catalog.category.index', [
                'category' => $category,
                'children' => $children,
                'products' => $products,
                'breadcrumbs' => $breadcrumbs,
            ]);
        } else {
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


}
