<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function show(Request $request)
    {
        if ($request->session()->has('token')) {
            $products = $this->requestHelper->getFilterRequest('favorites');
            dd($products);
            return view('catalog.favorite', [
                'products' => $products['data']
            ]);
        }
        $products = $this->requestHelper->getFilterRequest('favorites', 'post', 'domain', $GLOBALS["favorites"]);
        return view('catalog.favorite', [
            'products' => $products['data']
        ]);
    }

    public function put(Request $request)
    {
        if (!$request->session()->has('token')) return ['status' => 'ok'];
        $product_id = $request->post('product_id');
        $this->requestHelper->getUserRequest($request, 'favorites', [$product_id], 'put');
        return ['status' => 'ok'];
    }

    public function delete(Request $request)
    {
        if (!$request->session()->has('token')) return ['status' => 'ok'];
        $product_id = $request->post('product_id');
        $this->requestHelper->getUserRequest($request, 'favorites/'.$product_id, [], 'delete');
        return ['status' => 'ok'];
    }
}
