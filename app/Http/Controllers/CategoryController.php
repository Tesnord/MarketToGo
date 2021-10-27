<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class CategoryController extends Controller
{
    public function index(Request $request, $slug_category)
    {
        $categories = $this->requestHelper->getFilterRequest('catalog/' . $slug_category);
        $category = $categories['request']['data'];
        // dd($GLOBALS['sort']);
        // dd($categories);
        $children = $category['categories'];
        $products = $category['products'];
        $breadcrumbs = $category['breadcrumbs'];

        $paginator = new LengthAwarePaginator($category['products'], $category['count'], 30);
        $paginator->setPath('/catalog/' . $slug_category);
        return view('catalog.category.show', [
            'category' => $category,
            'children' => $children,
            'products' => $products,
            'breadcrumbs' => $breadcrumbs,
            'paginator' => $paginator,
            'sort_param' => $categories['sort_param'],
            'sort' => $categories['sort'],
        ]);
    }

    public function scores(Request $request)
    {
        $scores = $this->requestHelper->getUserRequest($request, 'score');
        // dd($scores);
        return view('catalog.scores', [
            'scores' => $scores['data'],
        ]);
    }


}
