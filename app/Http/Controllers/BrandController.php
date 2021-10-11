<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\LengthAwarePaginator;

class BrandController extends Controller
{
    public function index()
    {
        $brands =  $this->requestHelper->getRequest('brands');
        $brand = $brands['data']['letters'];
        return view('catalog.brand.index', [
            'brands' => $brand,
        ]);
    }

    public function show($slug_letter)
    {

        $brands = $this->requestHelper->getRequest('brands/'.$slug_letter);
        $brand = $brands['data']['letters'];
        $brand_item = $brands['data'];
        return view('catalog.brand.show', [
            'brands' => $brand,
            'brand_item' => $brand_item,
        ]);
    }

    public function catalog($slug_brand)
    {
        $brands = $this->requestHelper->getFilterRequest('brand/' . $slug_brand);
        $brand = $brands['request']['data'];

        $products = $brand['products'];
        $slug = [
            'slug' => $slug_brand,
            'title' => $brand['title']
        ];

        $paginator = new LengthAwarePaginator($brand['products'], $brand['count'], 30);
        $paginator->setPath('/catalog/' . $slug_brand);

        return view('catalog.brand.catalog', [
            'brand' => $brand,
            'products' => $products,
            'slug' => $slug,
            'paginator' => $paginator,
            'sort_param' => $brands['sort_param'],
            'sort' => $brands['sort'],
        ]);
    }
}
