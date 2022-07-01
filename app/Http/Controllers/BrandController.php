<?php

namespace App\Http\Controllers;


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

        $brands = $this->requestHelper->getRequest('brands/' . $slug_letter);
        $brand = $brands['data']['letters'];
        $brand_item = $brands['data'];
        return view('catalog.brand.show', [
            'brands' => $brand,
            'brand_item' => $brand_item,
        ]);
    }

    public function catalog($slug_brand)
    {
        $brands = $this->requestHelper->getRequest('brand/' . $slug_brand);
        $brand = $brands['data'];
        // dd($brands);
        $slug = [
            'slug' => $slug_brand,
            'title' => $brand['title']
        ];

        $paginator = $this->requestHelper->pagination($brand['products'], $brand['count'], $slug_brand);

        return view('catalog.brand.catalog', [
            'brand' => $brand,
            'products' => $brand['products'],
            'filters' => $brand['filters'],
            'slug' => $slug,
            'paginator' => $paginator,
        ]);
    }
}
