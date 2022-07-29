@extends('layouts.layout')

@section('content')
    <div class="about">
        <div class="breadcrumb-block">
            <div class="container">
                {{ Diglactic\Breadcrumbs\Breadcrumbs::render('about') }}
            </div>
        </div>
        <div class="about-text">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="about-text__tx">
                            <h1>Что такое MARKET TO GO?</h1>
                            <p>Это маркетплейс для <span>экспресс-доставки продуктов</span> питания,
                                товаров для животных, детских товаров и других непродовольственных товаров из сетей
                                магазинов наших партнеров.</p>
                            <a class="button button-bord" href="{{ route('home') }}">Начать покупки</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="about-text__img">
                            <img src="{{ asset('assets/images/svg/about-img.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-all">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="about-all__item">
                            <div class="about-all__item-top"><img src="{{ asset('assets/images/svg/about-icon1.svg') }}" alt="">
                                <div class="about-all__item-title">10 тыс товаров</div>
                            </div>
                            <div class="about-all__item-title-min">Доставка по Краснодару</div>
                            <p>Доставим продукты на дом, в офис, на дачу и в любое удобное для вас место в Краснодаре.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="about-all__item">
                            <div class="about-all__item-top"><img src="{{ asset('assets/images/svg/about-icon2.svg') }}" alt="">
                                <div class="about-all__item-title">работаем 24/7</div>
                            </div>
                            <div class="about-all__item-title-min">В любую погоду</div>
                            <p>Мороз и солнце, снег и ветер – наша доставка действует круглосуточно в любую погоду!</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="about-all__item">
                            <div class="about-all__item-top"><img src="{{ asset('assets/images/svg/about-icon3.svg') }}" alt="">
                                <div class="about-all__item-title">быстрая доставка</div>
                            </div>
                            <div class="about-all__item-title-min">Удобно и надежно</div>
                            <p>С нами удобно! Мы надежно упакуем и привезем ваш заказ.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-work" style="background-image: url('{{ asset('assets/images/bg-b2.jpg') }}')">
            <div class="container">
                <div class="about-work__inner">
                    <h2>Как это работает?</h2>
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="about-work__item">
                                <div class="about-work__item-title">Доставляем в удобное время</div>
                                <div class="about-work__item-tx">Оформляйте экспресс-доставку или выбирайте удобное время сами</div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="about-work__item">
                                <div class="about-work__item-title">Собираем заказ как для себя</div>
                                <div class="about-work__item-tx">Проверяем срок годности и товарный вид каждого товара</div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="about-work__item">
                                <div class="about-work__item-title">Легко выбрать нужный товар</div>
                                <div class="about-work__item-tx">Удобный список товаров и быстрое оформление заказа</div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="about-work__item">
                                <div class="about-work__item-title">Выбирайте товары</div>
                                <div class="about-work__item-tx">С помощью приложения или сайта выбирайте товары от наших партнеров с ценами, как в магазине</div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="about-work__item">
                                <div class="about-work__item-title">Оформляйте заказ</div>
                                <div class="about-work__item-tx">Мы собираем ваш заказ, как для себя, проверяя срок годности и товарный вид каждого товара</div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="about-work__item">
                                <div class="about-work__item-title">Ожидайте курьера</div>
                                <div class="about-work__item-tx">Мы доставим ваш заказ с чеком из магазина максимально быстро (от 45 минут) или в удобное для вас время</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
