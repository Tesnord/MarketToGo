<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function show($slug_product)
    {
        $products = $this->requestHelper->getProduct($slug_product);
        $product = $products['data'];
        $breadcrumbs = $product['breadcrumbs'];
        $slug = [
            'breadcrumbs' => $breadcrumbs,
            'slug' => $product['slug'],
            'title' => $product['title'],
        ];
        return view('catalog.product', [
            'product' => $product,
            'slug' => $slug,
        ]);
    }
}
