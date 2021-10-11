<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Utils\MarketFavorites;
use App\Utils\MarketBaskets;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        try {
            // Favorite
            $cookie_market_favorites = $_COOKIE['market_favorites'];
            $market_favorites = json_decode($cookie_market_favorites, true, 512, JSON_THROW_ON_ERROR);
            if (is_array($market_favorites["favorites"])) {
                $GLOBALS["favorites"] = $market_favorites["favorites"];
            }
        } catch (\Exception $e) {
            $GLOBALS["favorites"] = [];
        }

        try {
            // Basket
            $cookie_market_basket = $_COOKIE['market_basket'];
            $market_basket = json_decode($cookie_market_basket, true, 512, JSON_THROW_ON_ERROR);
            if (is_array($market_basket["basket"])) {
                $GLOBALS["basket"] = $market_basket["basket"];
            }
        } catch (\Exception $e) {
            $GLOBALS["basket"] = [];
        }

        try {
            // Sort
            $GLOBALS["sort"] = $_COOKIE['catalog_sort'];
        } catch (\Exception $e) {
            $GLOBALS["sort"] = [];
        }
        $favorite = $GLOBALS["favorites"];
        $basket = $GLOBALS["basket"];


        $productId = array_column($basket, 'id');
        $productBasket = function ($id) {
            foreach ($GLOBALS['basket'] as $item) {
                if ($item['id'] === $id) {
                    return $item['count'];
                }
            }
            return false;
        };
        // Menu
        $menu_categories = Http::get('http://80.78.246.225:3000/api/v1/site/categories')->json();
        View::share(
            [
                'menu_categories' => $menu_categories,
                'favorites' => $favorite,
                'basket' => $basket,
                'productBasket' => $productBasket,
                'productId' => $productId,
            ]
        );
    }
}
