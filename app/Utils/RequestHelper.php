<?php

namespace App\Utils;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RequestHelper {
    private string $domain;
    private string $auth;

    public function __construct()
    {
        $this->domain = config('app.api_entry_point');
        $this->auth = config('app.api_entry_auth');
    }

    public function getRequest(string $handler, string $method = 'get', string $entry_point = 'domain', array $data = [])
    {
        $result = Http::$method($this->$entry_point.$handler, $data)->json();
        if ($result['meta']['status'] === false) {
            abort(404);
        }
        return $result;
    }

    /**
     * @throws Exception
     */
    public function getUserRequest(Request $request, $handler, array $data = [], string $method = 'get')
    {
        $tokens = $request->session()->get('token');
        if (!$tokens) {
            $request->session()->remove('token');
            throw new Exception('Auth broken');
        }
        $result = Http::withHeaders(['Authorization' => $tokens['accessToken']])
            ->$method($this->domain.$handler, $data)->json();
        switch ($result['meta']['code']) {
            case 401:
                // refresh
                $response = Http::post($this->auth.'refresh', ['refreshToken' => $tokens['refreshToken']]);
                $request->session()->put('token', $response->json()['data']);
                return $this->getUserRequest($request, $handler, $data, $method);
            case 400:
                throw new Exception('Invalid request');
            case 200:
                return $result;
        }
    }

    public function getFilterRequest(string $handler, string $method = 'get', string $entry_point = 'domain')
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
        $number = $_GET['page'] ?? 1;

        $result = Http::$method($this->$entry_point.$handler, [
            'offset' => ($number-1)*10,
            'limit' => 10,
            'sort' => $sort['sort'] . '_' . $sort['order'],
            'price_min' => $_GET['price_min'] ?? null,
            'price_max' => $_GET['price_max'] ?? null,
            'brands' => $_GET['brands'] ?? null,
            'tags' => $_GET['tags'] ?? null,
            'in_stock' => $_GET['in_stock'] ?? null,
            'promotion' => $_GET[''] ?? null,
        ])->json();
        if ($result['meta']['status'] === false) {
            abort(404);
        }

        return ['request' => $result, 'sort_param' => $sort_param, 'sort' => $sort];
    }

    public function getCookie(Request $request, $cookieName)
    {
        $result = $this->getUserRequest($request, $cookieName, $GLOBALS[$cookieName], 'put');
        if ($result['data'] === false) {
            setcookie('market_'.$cookieName, json_encode([$cookieName => []]), time()+60*60*24*30);
        } else {
            setcookie('market_'.$cookieName, json_encode([$cookieName => $result['data']]), time()+60*60*24*30);
        }
    }
}
