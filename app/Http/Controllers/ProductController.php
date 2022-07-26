<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    /**
     * @throws \Exception
     */
    public function show(Request $request, $slug_product)
    {
//        dd($request->session()->has('token'));
        if (!$request->session()->has('token')) {
            $products = $this->requestHelper->getRequest('product/' . $slug_product);
        } else {
            $products = $this->requestHelper->getUserRequest($request, 'product/' . $slug_product);
        }
//         dd($products);
        $product = $products['data'];
        $breadcrumbs = [
            'breadcrumbs' => $product['breadcrumbs'],
            'slug' => $product['slug'],
            'title' => $product['title'],
        ];
        return view('catalog.product', [
            'product' => $product,
            'breadcrumbs' => $breadcrumbs,
        ]);
    }

    public function review(Request $request)
    {
//        dd($request->all('file'));
        $arr = [
            "productId" => $request->input('productId'),
            "rating" => $request->input('rating'),
            "text" => $request->input('text') ?? '',
            "images" => $request->all('file'),
            "isAnonymously" => $request->input('isAnonymously')
        ];
//         dd($request->input('file'));
        if ($request->session()->has('token')) {
            $result = $this->requestHelper->getUserRequest($request, 'reviews', $arr, 'post', true);
            dd($result);
            return [
                'status' => 'ok',
                'result' => $result['data'],
            ];
        }
    }
}
