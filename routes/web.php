<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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
    Route::get('/public', [StaticController::class, 'public'])->name('public');
// Товар
Route::get('/product/{slug_product}', [ProductController::class, 'show'])->name('product');
// Каталог
Route::prefix('catalog')->group(function () {
    // Категория
    Route::get('/{slug_category}', [CategoryController::class, 'index'])->name('category.index');
});
// Поиск
Route::get('/search', [CategoryController::class, 'search'])->name('search');
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
Route::get('/scores', [CategoryController::class, 'scores'])->name('scores');
// Страница магазина
Route::prefix('shop')->group(function () {
    Route::get('/{slug_shop}', [ShopController::class, 'show'])->name('shop.show');
});
// Акции
Route::prefix('promotions')->group(function () {
    Route::get('/', [PromotionController::class, 'index'])->name('promotions.index');
    Route::get('/show', [PromotionController::class, 'show'])->name('promotions.show');
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
// Личный кабинет
Route::prefix('personal')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('personal.index');
    Route::get('/setting', [UserController::class, 'setting'])->name('personal.setting');
    Route::get('/subscribe', [UserController::class, 'subscribe'])->name('personal.subscribe');
    Route::get('/orders', [UserController::class, 'orders'])->name('personal.orders');
});
// Корзина
Route::prefix('basket')->group(function () {
    Route::get('/', [BasketController::class, 'index'])->name('basket.index');
    // Оформление заказа
    Route::get('/checkout', [BasketController::class, 'checkout'])->name('basket.checkout');
});


// Test
Route::get('test', [HomeController::class, 'getTest'])->name('get_test');
Route::post('test', [HomeController::class, 'postTest'])->name('post_test');
