<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class CategoryController extends Controller
{
    public function index(Request $request, $slug_category)
    {
        $number = $_GET['page'] ?? 1;
        $sort = $_GET['sort'] ?? 'asc';
        $categories = $this->requestHelper->getRequest('catalog/' . $slug_category, 'get', 'domain', [
            'page' => $number,
            // 'sort' => $sort,
        ]);
        $category = $categories['data'];
        $paginator = new LengthAwarePaginator($category['products'], $category['count'], 30);
        $paginator->setPath('/catalog/' . $slug_category);
        // $sort =
        $breadcrumbs = $category['breadcrumbs'];
        $children = $category['categories'];
        $products = $category['products'];
        return view('catalog.category.show', [
            'category' => $category,
            'children' => $children,
            'products' => $products,
            'breadcrumbs' => $breadcrumbs,
            'paginator' => $paginator
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
