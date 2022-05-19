<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function show(Request $request)
    {
        /*if ($request->session()->has('token')) {
            $result = $this->requestHelper->getFilterRequest('favorites', 'post', 'domain', $GLOBALS["favorites"]);
            $products = $result['request']['data'];
            // dd($result);
            return view('catalog.favorite', [
                'products' => $products,
                'sort_param' => $result['sort_param'],
                'sort' => $result['sort'],
            ]);
        }*/
        $result = $this->requestHelper->getFilterRequest('favorites', 'post', 'domain', $GLOBALS["favorites"]);
        $categories = $result['request']['data'];
        // dd($result);
        return view('catalog.favorite', [
            'categories' => $categories,
            'sort_param' => $result['sort_param'],
            'sort' => $result['sort'],
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
