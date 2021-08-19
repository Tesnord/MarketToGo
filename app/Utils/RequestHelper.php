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

    // Basket
    public function getBasket()
    {

    }
    public function inBasket($id)
    {
        foreach ($GLOBALS['basket'] as $item) {
            if ($item['id'] === $id) {
                return $item['quantity'];
            }
        }
        return false;
    }
    // Brands
    public function getBrandsIndex(): Collection
    {
        return $this->getRequest('brands');
    }

    public function getBrandsShow($slug): Collection
    {
        return $this->getRequest('brands/'.$slug);
    }

    public function getBrandsCatalog($slug): Collection
    {
        return $this->getRequest('brand/'.$slug);
    }

    // Category
    public function getCategories($slug): Collection
    {
        return $this->getRequest('categories/'.$slug);
    }

    // Home
    public function getCategoriesMain(): Collection
    {
        return $this->getRequest('categories/main');
    }

    // Login
    public function getLogin($data): Response
    {
        return Http::post($this->auth . 'login', $data);
    }

    // Product
    public function getProduct($slug): Collection
    {
        $result = Http::get($this->domain.'product/'.$slug)->collect();
        if ($result['meta']['status'] === false) {
            abort(404);
        }
        return $result;
    }

    // Promotion
    public function getPromotion()
    {

    }

    // Shop
    public function getShop($slug): Collection
    {
        $result = Http::get($this->domain.'shop/'.$slug)->collect();
        if ($result['meta']['status'] === false) {
            abort(404);
        }
        return $result;
    }

    // Subscribe
    public function getSubscribe()
    {

    }

    // User
    public function getUser()
    {

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
        // if (!$request->session()->has('token')) {
        //     // redirect('', '');
        //     abort(401);
        // }
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
}
