<?php

namespace App\Utils;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use \Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class RequestHelper {
    private string $domain;
    private string $auth;

    public function __construct()
    {
        $this->domain = config('app.api_entry_point');
        $this->auth = config('app.api_entry_auth');
    }

    public function getRequest(string $handler, string $method = 'get', string $entry_point = 'domain', array $data = []): Collection
    {
        $result = Http::$method($this->$entry_point.$handler, $data)->collect();
        if ($result['meta']['status'] === false) {
            abort(404);
        }
        return $result;
    }

    public function getUserRequest(Request $request, $handler, array $data = [], string $method = 'get'): Collection
    {
        $tokens = $request->session()->get('token');

        $result = Http::withHeaders(['Authorization' => $tokens['accessToken']])
            ->$method($this->domain.$handler, $data)->collect();

        switch ($result['meta']['code']) {
            case 401:
                // refresh
                $response = Http::post($this->auth.'refresh', ['refreshToken' => $tokens['refreshToken']]);

                if ($response->status() === 400) abort(400);
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
