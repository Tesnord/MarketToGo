<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class FavoriteController extends Controller
{
    public function show(Request $request)
    {
        /*if ($request->session()->has('token')) {
            $userFavorite = $this->requestHelper->getUserRequest($request, 'favorites');
            $favorites = array();
            foreach ($userFavorite['data'] as $item) {
                $favorites[] = $item['_id'];
            }
            $result = $this->requestHelper->getFilterPaginateRequest('favorites', $favorites, 'post', );
            $categories = $result['request']['data'];
            setcookie("catalog_sort","",time()-10000);
            return view('catalog.favorite', [
                'categories' => $categories ?? null,
                'products' => $categories ?? null,
                'sort_param' => $result['sort_param'],
                'sort' => $result['sort'],
            ]);
        }*/
        $result = $this->requestHelper->getFilterPaginateRequest('favorites', $GLOBALS["favorites"], 'post', );
        $categories = $result['request']['data'];

        // $paginator = new LengthAwarePaginator($categories, count($categories), 10);
        // $paginator->setPath('/favorite');

        setcookie("catalog_sort","",time()-10000);
        return view('catalog.favorite', [
            'categories' => $categories ?? null,
            'products' => $categories ?? null,
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
