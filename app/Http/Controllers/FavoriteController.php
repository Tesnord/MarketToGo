<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class FavoriteController extends Controller
{
    public function show(Request $request)
    {
        $result = $this->requestHelper->getRequest('favorites', $GLOBALS["favorites"], 'post');
        $products = $result['data'];
        // dd($result);

        $paginator = $this->requestHelper->pagination($products, count($products), 'favorites');

        return view('catalog.favorite', [
            'products' => $products,
            'paginator' => $paginator,
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
