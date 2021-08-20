<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function show(Request $request)
    {
        // dd(json_encode($GLOBALS['basket']));
        // if ($request->session()->has('token')) {
        //     $products = $this->requestHelper->getUserRequest($request, 'basket');
        //     // dd($products);
        //     return view('catalog.basket.show', [
        //         'products' => $products['data']
        //     ]);
        // }
        $products = $this->requestHelper->getRequest('basket', 'post', 'domain', array_column($GLOBALS["basket"], 'id'));
        $count = count($products['data']);
        return view('catalog.basket.show', [
            'products' => $products['data'],
            'count' => $count,
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


    // public function show()
    // {
    //     return view('catalog.basket.show');
    // }

    public function checkout()
    {
        return view('catalog.basket.checkout');
    }
}
