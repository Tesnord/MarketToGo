<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BrandController extends Controller
{
    public function index()
    {
        $brands =  $this->requestHelper->getRequest('brands');
        // $brands = $this->requestHelper->getBrandsIndex();
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
        $brands = $this->requestHelper->getRequest('brand/'.$slug_brand);
        $brand = $brands['data'];
        $slug = [
            'slug' => $slug_brand,
            'title' => $brand['title']
        ];
        return view('catalog.brand.catalog', [
            'brand' => $brand,
            'slug' => $slug,
        ]);
    }
}
