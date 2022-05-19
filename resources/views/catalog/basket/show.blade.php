@extends('layouts.layout')

@section('content')

    <div class="breadcrumb-block">
        <div class="container">
            {{ Diglactic\Breadcrumbs\Breadcrumbs::render('basket') }}
        </div>
    </div>
    <div class="title-main">
        <div class="container">
            <div class="title-main__inner">
                <h1>Корзина</h1>
                @if($count)
                    <div class="title-main__numb">{{ $count }} товар(а)</div>
                @endif
            </div>
        </div>
    </div>
    {{--    if подписка оформлена--}}
    {{--<div class="cart-banner cart-banner-tw">
        <div class="cart-banner__inner">
            <div class="cart-banner__img"><img src="{{ asset('assets/images/cart-banner2.png') }}" alt=""></div>
            <div class="cart-banner__tx">
                <p>У вас оформлена подписка на категорию <a href="#">Молочные продукты</a>, <a href="#">Бакалея</a>. Хотите добавить товары?</p><a class="cart-banner__btn-tw" href="#">Добавить товары</a>
            </div>
        </div>
    </div>--}}
    @if(!empty($products))
        <div class="cart">
            <div class="container">
                <div class="cart__inner">
                    <div class="cart__list">
                        @foreach($products as $product)
                            <div class="cart__list-item" data-product-id="{{ $product['_id']  }}">
                                <div class="cart__list-descr">
                                    <div class="cart__list-img"
                                         style="background-image: url('{{ asset($product['image']) }}')"></div>
                                    <a class="cart__list-title"
                                       href="{{ route('product', ['slug_product' => $product['slug']]) }}">
                                        {{ $product['title'] }}
                                    </a>
                                    <div class="cart__list-article">Артикул: {{ $product['vendorCode'] }}</div>
                                </div>
                                <div class="cart__list-numb cart__list-numb-tw">
                                    <div class="cart__list-price">
                                        <div class="cart__list-price-now">
                                            <span class="one__price-now">
                                                {{ $product['price']['value'] }}
                                            </span>
                                            {{ $product['price']['currency'] }}
                                        </div>
                                        @if(!empty($product['oldPrice']))
                                            <div class="cart__list-price-old">
                                                <span class="one__price-old">
                                                    {{ $product['oldPrice']['value'] }}
                                                </span>
                                                {{ $product['oldPrice']['currency'] }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="cart__list-numb-tx">Цена за 1 шт</div>
                                </div>
                                <div class="cart__list-amount">
                                    <div class="catalog__item-amount">
                                        <input class="count" type="text" min="1" max="{{$product['count']}}"
                                               value="{{$productBasket($product['_id'])}}">
                                        <span class="up">
                                            <img src="{{ asset('assets/images/svg/plus.svg')}}" alt="">
                                        </span>
                                        <span class="down">
                                            <img src="{{ asset('assets/images/svg/minus.svg')}}" alt="">
                                        </span>
                                    </div>
                                </div>
                                <div class="cart__list-numb">
                                    <div class="cart__list-price">
                                        <div class="cart__list-price-now">
                                            <span class="price-now">{{$product['allPrice']}}</span>
                                            {{ $product['price']['currency'] }}
                                        </div>
                                    </div>
                                    @if(!empty($product['oldPrice']))
                                        <div class="cart__list-numb-tx">Экономия
                                            <span class="economy">{{$product['allEconomy']}}</span>
                                            {{ $product['price']['currency'] }}
                                        </div>
                                    @endif
                                </div>
                                <div class="cart__list-delete">
                                    <button class='variousamechanics'>
                                        <svg class='cleverlypaired'>
                                            <use xlink:href="#delete"></use>
                                        </svg>
                                        <div class='kedeverything'>
                                            <span>Удалить!</span>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{--                    if товары по подписке--}}
                    {{--<div class="cart__list">
                        <h3>Товары по подписке</h3>
                        <div class="cart__list-item">
                            <div class="cart__list-descr">
                                <div class="cart__list-img" style="background-image: url('{{ asset('assets/images/card-img2.jpg') }}')"></div><a class="cart__list-title" href="#">Манго Тайское Премиум (1 шт 300 гр)</a>
                                <div class="cart__list-article">Артикул: 87346773</div>
                            </div>
                            <div class="cart__list-numb">
                                <div class="cart__list-price">
                                    <div class="cart__list-price-now">121 {{ $product['price']['currency'] }}</div>
                                    <div class="cart__list-price-old">145 {{ $product['price']['currency'] }}</div>
                                </div>
                                <div class="cart__list-numb-tx">Цена за 1 шт</div>
                            </div>
                            <div class="cart__list-amount">
                                <div class="catalog__item-amount">
                                    <input type="text" value="1"><span class="up"><img src="{{ asset('assets/images/svg/plus.svg') }}" alt=""></span><span class="down"><img src="{{ asset('assets/images/svg/minus.svg') }}" alt=""></span>
                                </div>
                            </div>
                            <div class="cart__list-numb">
                                <div class="cart__list-price">
                                    <div class="cart__list-price-now">242 {{ $product['price']['currency'] }}</div>
                                </div>
                                <div class="cart__list-numb-tx">Экономия 300 {{ $product['price']['currency'] }}</div>
                            </div>
                            <div class="cart__list-delete"><svg><use xlink:href="#delete"></use></svg></div>
                        </div>
                    </div>--}}
                    <div class="cart__list-all">
                        {{--<div class="cart__list-descr">
                            <div class="cart__list-all-title">Промокод применен</div>
                            <div class="cart__list-promo">
                                <input type="text">
                                <button class="cart__list-promo-btn"><img
                                        src="{{ asset('assets/images/svg/arrow3.svg') }}" alt=""></button>
                            </div>
                            <div class="cart__list-promo-done">Промокод применен</div>
                        </div>--}}
                        <div class="cart__list-all-tx">
                            <div class="cart__list-all-tx-title">Итого:</div>
                            {{--<div class="cart__list-all-tx-text">Общий вес:  кг</div>--}}
                        </div>
                        <div class="cart__list-all-price">
                            <div class="cart__list-price">
                                <div class="cart__list-price-now">
                                    <span class="total__price-now">{{$totalPrice}}</span>
                                    {{ $product['price']['currency'] }}
                                </div>
                                @if($sale)
                                    <div class="cart__list-price-old">
                                        <span class="total__price-old">{{$totalEconomy}}</span>
                                        {{ $product['price']['currency'] }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="cart__list-all-btn">
                            <a class="button button-secondary" href="{{ route('basket.checkout') }}">оформить
                                заказ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--    if подписка не оформлена--}}
        {{--<div class="cart-banner">
            <div class="container">
                <div class="cart-banner__inner">
                    <div class="cart-banner__img"><img src="{{ asset('assets/images/cart-banner1.png') }}" alt=""></div>
                    <div class="cart-banner__tx">
                        <div class="cart-banner__title">Бесплатные товары по подписке</div>
                        <div class="cart-banner__label">Выгода</div><a class="cart-banner__btn" href="#">Бесплатно получайте товары из любимых категорий по подписке<img src="{{ asset('assets/images/svg/arrow5.svg') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>--}}

        {{--@include('layouts.catalog.offer')--}}
    @else
        <div class="tx">
            <div class="container">
                <div class="tx__inner">
                    <div class="tx__img"><img src="{{ asset('assets/images/svg/img1.svg') }}" alt=""></div>
                    <div class="tx__text">
                        <div class="tx__title">В корзине пока нет товаров</div>
                        <p>Перейдите в каталог, посмотрите скидки или <br>воспользуйтесь поиском, чтобы найти нужный
                            товар.</p>
                        <a class="button button-secondary" href="{{ route('home') }}">начать покупки</a>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
