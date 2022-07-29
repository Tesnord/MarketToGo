<?php

namespace App\Utils;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;
use phpDocumentor\Reflection\Types\Nullable;

class RequestHelper
{
    private $domain;
    private $auth;
    private $page_limit;

    public function __construct()
    {
        $this->domain = config('app.api_entry_point');
        $this->auth = config('app.api_entry_auth');
        $this->page_limit = 10;
    }

    /**
     * @param string $handler
     * @param string $method
     * @param string $entry_point
     * @param array $data
     * @return mixed
     * Общий запрос на APi
     */
    public function getRequest(string $handler, array $data = [], string $method = 'get', string $entry_point = 'domain')
    {
        $query = $this->queryParams();
        // dd($query);
        if ($method === 'get') {
            $result = Http::get($this->$entry_point . $handler . $query)->json();
        } elseif ($method === 'post') {
            $result = Http::post($this->$entry_point . $handler . $query, $data)->json();
        } else {
            $result = Http::$method($this->$entry_point . $handler . $query, $data)->json();
        }
        // dump($result);


        if ($result['meta']['code'] === 404) {
            abort(404);
        }
        return $result;
    }

    /**
     * @throws Exception
     * Запрос авторизованного пользователя на APi
     */
    public function getUserRequest(Request $request, $handler, array $data = [], string $method = 'get', $asMultipart = false)
    {
        $tokens = $request->session()->get('token');
        if (!$tokens) {
            $request->session()->remove('token');
            abort(404);
        }
        $res = Http::withHeaders(['Authorization' => $tokens['accessToken']]);
        if ($asMultipart) $res->asMultipart();

        if (!empty($data['images']['file'])) {
            foreach ($data['images']['file'] as $image) {
                $res = $res->attach('images', $image->get());
            }
        }
        unset($data['images']);

        $result = $res->$method($this->domain . $handler, $data)->json();
        switch ($result['meta']['code']) {
            case 401:
                // refresh
                $response = Http::post($this->auth . 'refresh', ['refreshToken' => $tokens['refreshToken']]);
                $request->session()->put('token', $response->json()['data']);
                return $this->getUserRequest($request, $handler, $data, $method);
            case 400:
//                dd($result);
//                abort(404);
//                break;
                return $result;
            case 200:
                return $result;
        }
    }

    public function queryParams()
    {
        $query_arr = $_GET;
        $query_arr['limit'] = $this->page_limit;
        if (isset($query_arr['page'])) {
            $query_arr['offset'] = $this->page_limit * ($query_arr['page'] - 1);
            unset($query_arr['page']);
        } else {
            $query_arr['offset'] = 0;
        }
        return '?' . http_build_query($query_arr);
    }

    public function pagination($data, $count, $path)
    {
        $paginator = new LengthAwarePaginator($data, $count, $this->page_limit);
        $query = '';
        if (count($_GET) > 0) {
            unset($_GET['page']);
        }
        return $paginator->setPath($path . $query);
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
