<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Главная
Route::get('/', [HomeController::class, 'home'])->name('home');
// Статика
    // О нас
    Route::get('/about', [StaticController::class, 'about'])->name('about');
    // Доставка и оплата
    Route::get('/delivery', [StaticController::class, 'delivery'])->name('delivery');
    // Политика конфиденциальности
    Route::get('/policy', [StaticController::class, 'policy'])->name('policy');
    // Поставщикам
    Route::get('/provider', [StaticController::class, 'provider'])->name('provider');
    // Публичная оферта
    Route::get('/publics', [StaticController::class, 'publics'])->name('publics');
    // Вопросы и ответы
    Route::get('/faq', [StaticController::class, 'faq'])->name('faq');
    // Документы
    Route::get('/requisites', [StaticController::class, 'requisites'])->name('requisites');
// Товар
Route::get('/product/{slug_product}', [ProductController::class, 'show'])->name('product');
Route::post('/review', [ProductController::class, 'review'])->name('product.review');
// Каталог
Route::prefix('catalog')->group(function () {
    // Категория
    Route::get('/{slug_category}', [CategoryController::class, 'index'])->name('category.index');
});
// Поиск
Route::get('/search', [SearchController::class, 'show'])->name('search');
// Избранное
Route::get('/favorite', [FavoriteController::class, 'show'])->name('favorite.show');
Route::put('/favorite', [FavoriteController::class, 'put'])->name('favorite.put');
Route::delete('/favorite', [FavoriteController::class, 'delete'])->name('favorite.delete');
// Подписка на товары
Route::prefix('subscribe')->group(function () {
    Route::get('/', [SubscribeController::class, 'index'])->name('subscribe.index');
    Route::get('/item', [SubscribeController::class, 'show'])->name('subscribe.show');
});
// Баллы
Route::prefix('scores')->group(function () {
    Route::get('/', [CategoryController::class, 'scores'])->name('scores');
    Route::get('/score-info', [StaticController::class, 'scoreInfo'])->name('score.info');
});
// Страница магазина
Route::prefix('shop')->group(function () {
    Route::get('/{slug_shop}', [ShopController::class, 'show'])->name('shop.show');
});
// Акции
Route::prefix('promotions')->group(function () {
    Route::get('/', [PromotionController::class, 'index'])->name('promotions.index');
    Route::get('/{slug_promotion}', [PromotionController::class, 'show'])->name('promotions.show');
});
// Бренды
Route::prefix('brand')->group(function () {
    Route::get('/', [BrandController::class, 'index'])->name('brand.index');
    Route::get('/catalog/{slug_brand}', [BrandController::class, 'catalog'])->name('brand.catalog');
    Route::get('/{slug_letter}', [BrandController::class, 'show'])->name('brand.show');
});
// Авторизация
Route::get('/login', [LoginController::class, 'create'])->name('login.create');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Личный кабинет
Route::prefix('personal')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('personal.index');
    Route::get('/setting', [UserController::class, 'setting'])->name('personal.setting');
    Route::post('/setting', [UserController::class, 'settingPut'])->name('personal.setting.put');
    Route::delete('/setting', [UserController::class, 'settingDelete'])->name('personal.setting.delete');
//    Route::get('/subscribe', [UserController::class, 'subscribe'])->name('personal.subscribe');
    Route::prefix('/orders')->group(function () {
        Route::get('/', [UserController::class, 'orders'])->name('personal.orders');
        Route::get('/{slug_order}', [UserController::class, 'order'])->name('personal.order');
    });
});
// Корзина
Route::prefix('basket')->group(function () {
    Route::get('/', [BasketController::class, 'show'])->name('basket.show');
    Route::put('/', [BasketController::class, 'put'])->name('basket.put');
    Route::delete('/', [BasketController::class, 'delete'])->name('basket.delete');
    // Оформление заказа
    Route::get('/checkout', [BasketController::class, 'checkout'])->name('basket.checkout');
    Route::put('/checkout/promocode', [BasketController::class, 'promocode'])->name('basket.promocode');
    Route::put('/checkout', [BasketController::class, 'order'])->name('basket.order');
});

// Test
Route::get('test', [HomeController::class, 'getTest'])->name('get_test');
Route::post('test', [HomeController::class, 'postTest'])->name('post_test');
