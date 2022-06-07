<?php

use Diglactic\Breadcrumbs\Breadcrumbs;

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Главная', route('home'));
});

    // Статика
    // Home > About
    Breadcrumbs::for('about', function ($trail) {
        $trail->parent('home');
        $trail->push('О нас', route('about'));
    });
    // Home > Delivery
    Breadcrumbs::for('delivery', function ($trail) {
        $trail->parent('home');
        $trail->push('Доставка и оплата', route('delivery'));
    });
    // Home > Policy
    Breadcrumbs::for('policy', function ($trail) {
            $trail->parent('home');
            $trail->push('Политика конфиденциальности', route('policy'));
        });
    // Home > Provider
    Breadcrumbs::for('provider', function ($trail) {
        $trail->parent('home');
        $trail->push('Поставщикам', route('provider'));
    });
    // Home > Public
    Breadcrumbs::for('public', function ($trail) {
        $trail->parent('home');
        $trail->push('Публичная оферта', route('public'));
    });

    // Корзина
    // Home > Basket
    Breadcrumbs::for('basket', function ($trail) {
        $trail->parent('home');
        $trail->push('Корзина', route('basket.show'));
    });
    // Home > Checkout
    Breadcrumbs::for('checkout', function ($trail) {
        $trail->parent('home');
        $trail->push('Оформление заказа', route('basket.checkout'));
    });

    // Бренд
    // Home > Brands
    Breadcrumbs::for('brands', function ($trail) {
        $trail->parent('home');
        $trail->push('Бренды', route('brand.index'));
    });
    // Home > Brands > Catalog
    Breadcrumbs::for('brand.catalog', function ($trail, $params) {
        $trail->parent('brands');
        $trail->push($params['title'], route('brand.catalog', ['slug_brand' => $params['slug']]));
    });

    // Категория
    // Home > Category > Category {children}
    Breadcrumbs::for('category.index', function ($trail, $param) {
        $trail->parent('home');
        foreach ($param as $item) {
            $trail->push($item['title'], route('category.index', ['slug_category' => $item['slug']]));
        }
    });
        // Home > Category > Category {children} > Product
        Breadcrumbs::for('product', function ($trail, $param) {
            $trail->parent('category.index', $param['breadcrumbs']);
            $trail->push($param['title'], route('product', $param['slug']));
        });

    // Акции
    // Home > Promotions
    Breadcrumbs::for('promotions.index', function ($trail) {
        $trail->parent('home');
        $trail->push('Акции', route('promotions.index'));
    });
        // Home > Promotions > Action
        // Breadcrumbs::for('promotions.show', function ($trail, $promotion) {
        //     $trail->parent('promotions.index');
        //     $trail->push($promotion->name, route('promotions.show', $promotion));
        // });

    // Магазин
    // Home > Shop
    Breadcrumbs::for('shop.show', function ($trail, $param) {
        $trail->parent('home');
        $trail->push($param['slug_shop']['title'], route('shop.show', ['slug_shop' => $param['slug_shop']['slug']]));
    });

    // Подписка
    // Home > Subscribe
    Breadcrumbs::for('subscribe.index', function ($trail) {
        $trail->parent('home');
        $trail->push('Товары по подписке', route('subscribe.index'));
    });
        // Home > Subscribe > Catalog
        // Breadcrumbs::for('subscribe.show', function ($trail, $subscribe) {
        //     $trail->parent('subscribe.index');
        //     $trail->push($subscribe['catalog'], route('subscribe.show', ['slug_shop' => $subscribe['slug']]));
        // });

    // Избранное
    // Home > Favorite
    Breadcrumbs::for('favorite', function ($trail) {
        $trail->parent('home');
        $trail->push('Избранное', route('favorite.show'));
    });

    // Баллы
    // Home > Scores
    Breadcrumbs::for('scores', function ($trail) {
        $trail->parent('home');
        $trail->push('Баллы', route('scores'));
    });

    // Поиск
    // Home > Search
    Breadcrumbs::for('search', function ($trail) {
        $trail->parent('home');
        $trail->push('Результат поиска', route('search'));
    });

    // Личный кабинет
    // Home > Personal
    Breadcrumbs::for('personal.index', function ($trail) {
        $trail->parent('home');
        $trail->push('Личный кабинет', route('personal.index'));
    });
        // Home > Personal > Setting
        Breadcrumbs::for('personal.setting', function ($trail) {
            $trail->parent('personal.index');
            $trail->push('Настройки профиля', route('personal.setting'));
        });
        // Home > Personal > Subscribe
        Breadcrumbs::for('personal.subscribe', function ($trail) {
            $trail->parent('personal.index');
            $trail->push('Подписки', route('personal.subscribe'));
        });
        // Home > Personal > Orders
        Breadcrumbs::for('personal.orders', function ($trail) {
            $trail->parent('personal.index');
            $trail->push('Заказы', route('personal.orders'));
        });
            // Home > Personal > Orders > Order
            Breadcrumbs::for('personal.order', function ($trail, $param) {
                $trail->parent('personal.orders');
                $trail->push($param['title'], route('personal.order', $param['slug']));
            });
