<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FavoriteController extends Controller
{
    public function show(Request $request)
    {
        if ($request->session()->has('token')) {
            $products = $this->requestHelper->getUserRequest($request, 'favorites');
            return view('catalog.favorite', [
                'products' => $products['data']
            ]);
        }
        $products = $this->requestHelper->getRequest('favorites', 'post', 'domain', $GLOBALS["favorites"]);
        return view('catalog.favorite', [
            'products' => $products['data']
        ]);
    }

    public function put(Request $request)
    {
        if (!$request->session()->has('token')) return;
        $product_id = $request->post('product_id');
        $this->requestHelper->getUserRequest($request, 'favorites', [$product_id], 'put');
    }

    public function delete(Request $request)
    {
        if (!$request->session()->has('token')) return;
        $product_id = $request->post('product_id');
        $this->requestHelper->getUserRequest($request, 'favorites/'.$product_id, [], 'delete');
    }
}
