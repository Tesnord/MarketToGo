<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function show(Request $request)
    {
        if ($request->session()->has('token')) {
            $products = $this->requestHelper->getUserRequest($request, 'basket');
        } else {
            $products = $this->requestHelper->getRequest('basket', 'post', 'domain',
                array_column($GLOBALS["basket"], 'id'));
        }
        $productBasket = function ($id) {
            foreach ($GLOBALS['basket'] as $item) {
                if ($item['id'] === $id) {
                    return $item['count'];
                }
            }
            return 1;
        };
        $totalPrice = 0;
        $totalEconomy = 0;
        foreach ($products['data'] as &$product) {
            $product['allPrice'] = $product['price']['value'] * $productBasket($product['_id']);
            $totalPrice += $product['allPrice'];
            if (!empty($product['oldPrice'])) {
                $product['allEconomy'] = $product['oldPrice']['value'] * $productBasket($product['_id']) - $product['allPrice'];
                $totalEconomy += $product['allEconomy'];
            }
        }
        $totalEconomy += $totalPrice;
        return view('catalog.basket.show', [
            'products' => $products['data'],
            'count' => count($products['data']),
            'totalPrice' => $totalPrice,
            'totalEconomy' => $totalEconomy,
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
