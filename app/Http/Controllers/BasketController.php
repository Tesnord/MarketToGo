<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function show(Request $request)
    {
        if ($request->session()->has('token')) {
            $products = $this->requestHelper->getUserRequest($request, 'basket');
            // dd($products);
            return view('catalog.basket.show', [
                'products' => $products['data'],
                'count' => count($products['data']),
            ]);
        }
        $products = $this->requestHelper->getRequest('basket', 'post', 'domain', array_column($GLOBALS["basket"], 'id'));
        return view('catalog.basket.show', [
            'products' => $products['data'],
            'count' => count($products['data']),
        ]);
    }

    public function put(Request $request)
    {
        if (!$request->session()->has('token')) return ['status' => 'ok'];
        $product_id = $request->post('id');
        $this->requestHelper->getUserRequest($request, 'basket', [$product_id], 'put');
        return ['status' => 'ok'];
    }

    public function delete(Request $request)
    {
        if (!$request->session()->has('token')) return ['status' => 'ok'];
        $product_id = $request->post('id');
        $this->requestHelper->getUserRequest($request, 'basket/'.$product_id, [], 'delete');
        return ['status' => 'ok'];
    }

    public function checkout()
    {
        return view('catalog.basket.checkout');
    }
}
