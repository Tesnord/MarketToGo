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

    public function scores(Request $request)
    {
        // if ($request->session()->has('token')) {
            $scores = $this->requestHelper->getUserRequest($request,'score');
            // dd($scores);
            return view('catalog.scores', [
                'scores' => $scores['data'],
            ]);
        // }
        // $scores = $this->requestHelper->getRequest('score');
        // return view('catalog.scores');
    }


}
