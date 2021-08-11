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
            // Basket
            $cookie_market_basket = $_COOKIE['market_basket'];
            $market_basket = json_decode($cookie_market_basket, true, 512, JSON_THROW_ON_ERROR);
            if (is_array($market_basket["basket"])) {
                $GLOBALS["basket"] = $market_basket["basket"];
            }
            // Login
            $cookie_market_token = $_COOKIE['market_token'];
            $market_token = json_decode($cookie_market_token, true, 512, JSON_THROW_ON_ERROR);
            if (is_array($market_token["token"])) {
                $GLOBALS["token"] = $market_token["token"];
            }
        } catch (\Exception $e) {
            $GLOBALS["favorites"] = array();
            $GLOBALS["basket"] = array();
            $GLOBALS["token"] = array();
        }
        $favorite = $GLOBALS["favorites"];
        $basket = $GLOBALS["basket"];
        $token = $GLOBALS["token"];
        // Menu
        $menu_categories = Http::get('http://80.78.246.225:3000/api/v1/site/categories')->json();

        View::share(
            [
                'menu_categories' => $menu_categories,
                'favorites' => $favorite,
                'basket' => $basket,
                'token' => $token,
            ]
        );
    }
}
