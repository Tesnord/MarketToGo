<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function show(Request $request)
    {
        $productPrice = function ($product, $f = 0) {
            foreach ($GLOBALS['basket'] as $basket) {
                if ($product['_id'] === $basket['id']) {
                    if ($f === 0) {
                        return $product['price']['value'] * $basket['count'];
                    } else {
                        return ($product['oldPrice']['value'] * $basket['count'])-$f;
                    }
                }
            }
        };
        if ($request->session()->has('token')) {
            $products = $this->requestHelper->getUserRequest($request, 'basket');
            return view('catalog.basket.show', [
                'products' => $products['data'],
                'count' => count($products['data']),
                'productPrice' => $productPrice,
            ]);
        }
        $products = $this->requestHelper->getRequest('basket', 'post', 'domain',
            array_column($GLOBALS["basket"], 'id'));
        return view('catalog.basket.show', [
            'products' => $products['data'],
            'count' => count($products['data']),
            'productPrice' => $productPrice,
        ]);
    }

    public function put(Request $request)
    {
        if (!$request->session()->has('token')) {
            return ['status' => 'ok'];
        }
        $product_id = $request->post('id');
        $product_count = $request->post('count');
        $this->requestHelper->getUserRequest($request, 'basket', [['id' => $product_id, 'count' => $product_count]],
            'put');
        return ['status' => 'ok'];
    }

    public function delete(Request $request)
    {
        if (!$request->session()->has('token')) {
            return ['status' => 'ok'];
        }
        $product_id = $request->post('id');
        $this->requestHelper->getUserRequest($request, 'basket/' . $product_id, [], 'delete');
        return ['status' => 'ok'];
    }

    public function checkout(Request $request)
    {
        $order = $this->requestHelper->getUserRequest($request, 'order');
//        dd($order);
        return view('catalog.basket.checkout', [
            'order' => $order['data'],
            'address' => $order['data']['address'],
            'profile' => $order['data']['profile'],
        ]);
    }
}
