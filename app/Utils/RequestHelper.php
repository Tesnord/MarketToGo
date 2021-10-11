<?php

namespace App\Utils;

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
            'page' => $number,
            'sort' => $sort['sort'] . '_' . $sort['order'],
        ])->json();
        if ($result['meta']['status'] === false) {
            abort(404);
        }

        return ['request' => $result, 'sort_param' => $sort_param, 'sort' => $sort];
    }

    public function getUserRequest(Request $request, $handler, array $data = [], string $method = 'get')
    {
        $tokens = $request->session()->get('token');
        if ($tokens === false) {
            $request->session()->remove('token');
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
                abort(400);
                break;
        }
        return $result;
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
