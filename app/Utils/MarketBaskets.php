<?php

namespace App\Utils;

use App\Models\Product;
use Illuminate\Support\Facades\Cookie;

use function Couchbase\basicEncoderV1;

class MarketBaskets
{
    // static private $instance;
    //
    // public function __construct()
    // {
    //     try {
    //         $cookie_market_basket = $_COOKIE['market_basket'];
    //         $market_basket = json_decode($cookie_market_basket, true, 512, JSON_THROW_ON_ERROR);
    //         if (is_array($market_basket["basket"])) {
    //             $GLOBALS["basket"] = $market_basket["basket"];
    //         }
    //     } catch (\Exception $e) {
    //         $GLOBALS["basket"] = array();
    //     }
    // }
    //
    // static function createInstance(): self
    // {
    //     self::$instance = new self();
    //
    //     return self::$instance;
    // }
    //
    // static function getInstance(): self
    // {
    //     if (!self::$instance instanceof self) {
    //         self::$instance = new self();
    //     }
    //
    //     return self::$instance;
    // }
    //
    // function isBasket($id): bool
    // {
    //     if (is_array($GLOBALS['basket'])) {
    //         return in_array((string)$id, $GLOBALS['basket'], true);
    //     }
    //     return false;
    // }
    //
    // public function getBasketProducts()
    // {
    //     global $basket;
    //
    //     $ids = array_column($basket, 'id');
    //     $products = Product::query()->find($ids);
    //
    //     foreach ($products as &$product) {
    //         $index = array_search($product->id, array_column($basket, 'id'));
    //         $product->quantityInBasket = $basket[$index]['quantity'];
    //     }
    //
    //     return $products;
    // }
}
