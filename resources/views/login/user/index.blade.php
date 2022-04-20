@extends('layouts.layout')

@section('content')

    <div class="breadcrumb-block">
        <div class="container">
            {{ Diglactic\Breadcrumbs\Breadcrumbs::render('personal.index') }}
        </div>
    </div>
    <div class="title-main">
        <div class="container">
            <div class="title-main__inner">
                <h1>Личный кабинет</h1>
            </div>
        </div>
    </div>
    <div class="lk">
        <div class="container">
            <div class="lk__inner">
                <div class="lk__left">
                    <div class="lk__group">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="lk__group-item">
                                    <a href="{{ route('personal.setting') }}"></a>
                                    <div class="lk__group-item-img">
                                        <img src="{{ asset('assets/images/svg/lk-icon1.svg') }}" alt="">
                                    </div>
                                    <div class="lk__group-item-title">Настройки профиля</div>
                                    <div class="lk__group-item-tx">
                                        Редактируйте личные данные, управляйте уведомлениями
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="lk__group-item">
                                    <a href="{{ route('personal.orders') }}"></a>
                                    {{--<div class="lk__group-item-label">4 заказа</div>--}}
                                    <div class="lk__group-item-img">
                                        <img src="{{ asset('assets/images/svg/lk-icon2.svg') }}" alt="">
                                    </div>
                                    <div class="lk__group-item-title">Все заказы</div>
                                    <div class="lk__group-item-tx">
                                        Редактируйте личные данные, управляйте уведомлениями
                                    </div>
                                </div>
                            </div>
                           {{-- <div class="col-xl-4">
                                <div class="lk__group-item">
                                    <a href="{{ route('personal.subscribe') }}"></a>
                                    <div class="lk__group-item-label">2 подписки</div>
                                    <div class="lk__group-item-img">
                                        <img src="{{ asset('assets/images/svg/lk-icon3.svg') }}" alt="">
                                    </div>
                                    <div class="lk__group-item-title">Подписки</div>
                                    <div class="lk__group-item-tx">
                                        Редактируйте личные данные, управляйте уведомлениями
                                    </div>
                                </div>
                            </div>--}}
                        </div>
                    </div>
                    {{--<div class="cart-banner cart-banner-tw">
                        <div class="cart-banner__inner">
                            <div class="cart-banner__img">
                                <img src="{{ asset('assets/images/cart-banner2.png') }}" alt="">
                            </div>
                            <div class="cart-banner__tx">
                                <p>Бесплатно получайте товары из любимых категорий по подписке</p>
                                <a class="cart-banner__btn-tw" href="#">Добавить товары</a>
                            </div>
                        </div>
                    </div>--}}
                </div>
                @include('layouts.user.nav')
            </div>
        </div>
    </div>

@endsection
