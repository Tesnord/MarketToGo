<?php

namespace App\Utils;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;

class RequestHelper
{
    private string $domain;
    private string $auth;

    public function __construct()
    {
        $this->domain = config('app.api_entry_point');
        $this->auth = config('app.api_entry_auth');
    }

    /**
     * @param string $handler
     * @param string $method
     * @param string $entry_point
     * @param array $data
     * @return mixed
     * Общий запрос на APi
     */
    public function getRequest(
        string $handler,
        string $method = 'get',
        string $entry_point = 'domain',
        array $data = []
    ) {
        $result = Http::$method($this->$entry_point . $handler, $data)->json();
        if ($result['meta']['status'] === false) {
            abort(404);
        }
        return $result;
    }

    /**
     * @throws Exception
     * Запрос авторизованного пользователя на APi
     */
    public function getUserRequest(Request $request, $handler, array $data = [], string $method = 'get')
    {
        $tokens = $request->session()->get('token');
        if (!$tokens) {
            $request->session()->remove('token');
            // throw new Exception('Auth broken');
        }
        $result = Http::withHeaders(['Authorization' => $tokens['accessToken']])
            ->$method($this->domain . $handler, $data)->json();
        switch ($result['meta']['code']) {
            case 500:
                // refresh
                $response = Http::post($this->auth . 'refresh', ['refreshToken' => $tokens['refreshToken']]);
                $request->session()->put('token', $response->json()['data']);
                return $this->getUserRequest($request, $handler, $data, $method);
            case 401:
                // refresh
                $response = Http::post($this->auth . 'refresh', ['refreshToken' => $tokens['refreshToken']]);
                $request->session()->put('token', $response->json()['data']);
                return $this->getUserRequest($request, $handler, $data, $method);
            case 400:
                throw new Exception('Invalid request');
            case 200:
                return $result;
        }
    }

    /**
     * @return array
     * Проверка данных сортировки
     */
    public function SortProduct()
    {
        switch ($GLOBALS["sort"]) {
            case "discount-asc":
                {
                    $sort_param = "discount-asc";
                    $sort = array(
                        "sort" => "discount",
                        "order" => "asc",
                    );
                }
                break;
            case "discount-desc":
                {
                    $sort_param = "discount-desc";
                    $sort = array(
                        "sort" => "discount",
                        "order" => "desc",
                    );
                }
                break;
            case "price-desc":
                {
                    $sort_param = "price-desc";
                    $sort = array(
                        "sort" => "price",
                        "order" => "desc",
                    );
                }
                break;
            default:
                {
                    $sort_param = "price-asc";
                    $sort = array(
                        "sort" => "price",
                        "order" => "asc",
                    );
                }
                break;
        }
        return ['sort_param' => $sort_param ?? null, 'sort' => $sort ?? null];
    }

    public function getFilterPaginateRequest(string $handler, $data = [], string $method = 'get', string $entry_point = 'domain')
    {
        $sort = $this->SortProduct();
        $number = $_GET['page'] ?? 1;

        if($sort['sort_param'] !== null || $sort['sort'] !== null){
            $getSort = 'sort='.$sort['sort']['sort'] . '_' . $sort['sort']['order'];
        } else {
            $getSort = '';
        }
        // dd($getSort);
        $filter = [
            'offset' => ($number - 1) * 10,
            'limit' => 10,
            'sort' => $getSort
        ];

        $filterResult = '?'.$getSort.'&limit='.$filter['limit'].'&offset='.$filter['offset'];

        $result = Http::$method($this->$entry_point . $handler.$filterResult , $data)->json();

        return ['request' => $result, 'sort_param' => $sort['sort_param'] ?? 'price-asc', 'sort' => $sort['sort'] ?? ["sort" => "price", "order" => "asc"]];
    }


    public function getFilterRequest(string $handler, string $method = 'get', string $entry_point = 'domain')
    {
        $sort = $this->SortProduct();
        $number = $_GET['page'] ?? 1;

        $filter = [
            'offset' => ($number - 1) * 10,
            'limit' => 10,
            'sort' => $sort['sort']['sort'] . '_' . $sort['sort']['order'],
            'price_min' => $_GET['price_min'] ?? null,
            'price_max' => $_GET['price_max'] ?? null,
            'brands' => $_GET['brands'] ?? null,
            'tags' => $_GET['tags'] ?? null,
            'in_stock' => $_GET['in_stock'] ?? null,
            'promotion' => $_GET[''] ?? null,
        ];

        $result = Http::$method($this->$entry_point . $handler, $filter)->json();

        return ['request' => $result, 'sort_param' => $sort['sort_param'], 'sort' => $sort['sort']];
    }

    public function getCookie(Request $request, $cookieName)
    {
        $result = $this->getUserRequest($request, $cookieName, $GLOBALS[$cookieName], 'put');
        if ($result['data'] === false) {
            setcookie('market_' . $cookieName, json_encode([$cookieName => []]), time() + 60 * 60 * 24 * 30);
        } else {
            setcookie('market_' . $cookieName, json_encode([$cookieName => $result['data']]),
                time() + 60 * 60 * 24 * 30);
        }
    }
}
