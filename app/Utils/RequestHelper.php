<?php

namespace App\Utils;

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
    // Brands
    public function getBrandsIndex(): Collection
    {
        $result = Http::get($this->domain.'brands/')->collect();
        if ($result['meta']['status'] === false) {
            abort(404);
        }
        return $result;
    }

    public function getBrandsShow($slug): Collection
    {
        $result = Http::get($this->domain.'brands/'.$slug)->collect();
        if ($result['meta']['status'] === false) {
            abort(404);
        }
        return $result;
    }

    public function getBrandsCatalog($slug): Collection
    {
        $result = Http::get($this->domain.'brands/'.$slug)->collect();
        if ($result['meta']['status'] === false) {
            abort(404);
        }
        return $result;
    }

    // Category
    public function getCategories($slug): Collection
    {
        $result = Http::get($this->domain.'categories/'.$slug)->collect();
        if ($result['meta']['status'] === false) {
            abort(404);
        }
        return $result;
    }

    // Home
    public function getCategoriesMain(): Collection
    {
        $result = Http::get($this->domain.'categories/main')->collect();
        if ($result['meta']['status'] === false) {
            abort(404);
        }
        return $result;
    }

    // Login
    /*public function getLogin($phone, $code = null): Response
    {
        $result = Http::post($this->auth . '/login', ['phone' => $phone, 'code' => $code]);
        if ($result['meta']['status'] === false) {
            abort(404);
        }
        return $result;
    }*/

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
}
