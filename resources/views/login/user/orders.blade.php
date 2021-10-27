@extends('layouts.layout')

@section('content')

    <div class="breadcrumb-block">
        <div class="container">
            {{ Diglactic\Breadcrumbs\Breadcrumbs::render('personal.orders') }}
        </div>
    </div>
    <div class="title-main">
        <div class="container">
            <div class="title-main__inner">
                <h1>Заказы</h1>
            </div>
        </div>
    </div>
    <div class="lk">
        <div class="container">
            <div class="lk__inner">
                <div class="lk__left">
                    <div class="orders">
                        @foreach($orders as $order)
                            <div class="orders__item">
                                <div class="orders__top">
                                    <div class="orders__title">
                                        <div class="orders__title-main">Заказ {{$order['id']}}
                                            от {{ date('d.m.Y', ($order['date']/1000)) }}</div>
                                        <div class="orders__title-min">{{count($order['products'])}} товар на сумму 180
                                            руб.
                                        </div>
                                    </div>
                                    @switch($order['status'])
                                        @case(0)
                                        <div class="orders__status orders__status-success">Не доставлено</div>
                                        @break
                                        @case(1)
                                        <div class="orders__status orders__status-success">Доставлено</div>
                                        @break
                                    @endswitch
                                </div>
                                <div class="orders__item-descr">
                                    <div class="orders__item-descr-title">
                                        <span>Получатель</span>
                                        {{--<a href="#">Повторить заказ</a>--}}
                                    </div>
                                    <div class="orders__item-descr-count">
                                        <div
                                            class="orders__item-descr-count-tit">{{ $order['userData']['name'].' '.$order['userData']['surname'] }}</div>
                                    </div>
                                </div>
                                <div class="orders__item-descr">
                                    <div class="orders__item-descr-title">Оплата</div>
                                    <div class="orders__item-descr-count">
                                        <div class="orders__item-descr-count-tit">{{count($order['products'])}} товар на
                                            сумму 180 руб
                                        </div>
                                        <div class="orders__item-descr-count-st">Не оплачено</div>
                                        <div class="orders__item-descr-count-st tw">Оплачено</div>
                                    </div>
                                    <p>Сумма к оплате по счету: <b>180 ₽</b></p>
                                </div>
                                <div class="orders__item-descr">
                                    <div class="orders__item-descr-title">Доставка</div>
                                    <div class="orders__item-descr-count">
                                        <div class="orders__item-descr-count-tit">Адрес
                                            доставки: {{ $order['address'] }}</div>
                                    </div>
                                </div>
                                <div class="orders__item-descr orders__item-descr-rating">
                                    <div class="orders__item-descr-title">Оцените доставку</div>
                                    <div class="orders__item-descr-rating-im">
                                        <div class="orders__item-descr-rating-im-item"><img
                                                src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                        <div class="orders__item-descr-rating-im-item"><img
                                                src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                        <div class="orders__item-descr-rating-im-item"><img
                                                src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                        <div class="orders__item-descr-rating-im-item"><img
                                                src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                        <div class="orders__item-descr-rating-im-item"><img
                                                src="{{ asset('assets/images/svg/rating.svg') }}" alt=""></div>
                                    </div>
                                </div>
                                <div class="orders__item-product">
                                    <div class="orders__item-product-title">Товары в заказе</div>
                                    <div class="orders__item-product-inner">
                                        @foreach(array_slice($order['products'], 0, 3) as $product)
                                            <div class="orders__item-product-row">
                                                <div class="orders__item-product-left">
                                                    <div class="orders__item-product-img" style="background-image: url('{{ asset($product['image']) }}')">
                                                    </div>
                                                    <a class="orders__item-product-name" href="{{ route('product', ['slug_product' => $product['slug']]) }}">
                                                        {{ $product['title'] }}
                                                    </a>
                                                    <div class="orders__item-product-kl">
                                                        {{ $product['count'] }} шт,
                                                    </div>
                                                    <div class="orders__item-product-price">
                                                        {{ $product['total'] }} ₽
                                                    </div>
                                                </div>
                                                <div class="orders__item-product-right">
                                                    <a class="orders__item-product-rating-bt" href="#">ОЦЕНИТЬ ТОВАР</a>
                                                </div>
                                            </div>
                                        @endforeach
                                        @if(count($order['products']) > 3)
                                            <div class="orders__item-product-btn js-orders-btn">смотреть +{{count($order['products']) - 3}} еще</div>
                                            @foreach(array_slice($order['products'], 3) as $product)
                                                <div class="orders__item-product-row d-none">
                                                    <div class="orders__item-product-left">
                                                        <div class="orders__item-product-img" style="background-image: url('{{ asset($product['image']) }}')">
                                                        </div>
                                                        <a class="orders__item-product-name" href="{{ route('product', ['slug_product' => $product['slug']]) }}">
                                                            {{ $product['title'] }}
                                                        </a>
                                                        <div class="orders__item-product-kl">
                                                            {{ $product['count'] }} шт,
                                                        </div>
                                                        <div class="orders__item-product-price">
                                                            {{ $product['total'] }} ₽
                                                        </div>
                                                    </div>
                                                    <div class="orders__item-product-right">
                                                        <a class="orders__item-product-rating-bt" href="#">ОЦЕНИТЬ ТОВАР</a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{--                    pagination--}}
                    {{--<div class="pagination-bl">
                        <ul class="pagination">
                            <li class="page-item prev">
                                <a class="page-link" href="#">
                                    <span class="tx">Предыдущая</span>
                                    <span class="arrow">
                                        <img src="{{ asset('assets/images/svg/arrow2.svg') }}" alt="">
                                    </span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item mob"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><span class="page-link">...</span></li>
                            <li class="page-item"><a class="page-link" href="#">22</a></li>
                            <li class="page-item next">
                                <a class="page-link" href="#">
                                    <span class="tx">следующая</span>
                                    <span class="arrow">
                                        <img src="{{ asset('assets/images/svg/arrow2.svg') }}" alt="">
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>--}}
                </div>
                @include('layouts.user.nav')
            </div>
        </div>
    </div>

@endsection
