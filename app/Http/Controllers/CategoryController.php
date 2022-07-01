<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($slug_category)
    {
        $categories = $this->requestHelper->getRequest('catalog/' . $slug_category);
        $category = $categories['data'];
        // dd($category);

        $paginator = $this->requestHelper->pagination($category['products'], $category['count'], $slug_category);

        return view('catalog.category.show', [
            'category' => $category,
            'children' => $category['categories'],
            'products' => $category['products'],
            'filters' => $category['filters'],
            'breadcrumbs' => $category['breadcrumbs'],
            'paginator' => $paginator,
        ]);
    }

    public function scores(Request $request)
    {
        return view('catalog.scores');
    }


}
