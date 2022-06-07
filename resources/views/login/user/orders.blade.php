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
                    <div class="order__button--wrapper">
                        <button class="order__button js__button-active order__button--active">Текущие заказы</button>
                        <button class="order__button js__button-story">История заказов</button>
                    </div>
                    <div class="tab-content orders-wrapper">
                        <div class="orders orders-new tab-pane fade show active">
                            <div class="orders__item">
                                <div class="orders__top">
                                    <div>
                                        <div class="orders__title">
                                            <div class="orders__title-main">Заказ 18 от 14.08.2020</div>
                                        </div>
                                        <div class="orders__top--price">
                                            <div class="orders__status orders__status-success">Доставлено
                                                <div class="order__status-info">Заказ доставлен</div>
                                            </div>
                                            <div class="orders__pay">Оплачено <span class="orders__pay-total">1 350 ₽</span> <span class="orders__pay-economy">2 545 ₽</span></div>
                                        </div>
                                    </div>
                                    <div class="orders__button">
                                        <button class="orders__button orders__button--cancel-order">отменить заказ</button>
                                        <button class="orders__button orders__button--repeat-order">Повторить</button>
                                    </div>
                                </div>
                                <div class="orders__item-product">
                                    <div class="orders__item-product-title">Товары в заказе (13)</div>
                                    <div class="orders__item-product-inner">
                                        <div class="orders__item-product-row">
                                            <div class="orders__item-product-left">
                                                <div class="orders__item-product-img" style="background-image: url('assets/images/card-img3.jpg')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                                <div class="orders__item-product-kl">2 шт,</div>
                                                <div class="orders__item-product-price">119 ₽</div>
                                            </div>
                                        </div>
                                        <div class="orders__item-product-row">
                                            <div class="orders__item-product-left">
                                                <div class="orders__item-product-img" style="background-image: url('assets/images/card-img3.jpg')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                                <div class="orders__item-product-kl">2 шт,</div>
                                                <div class="orders__item-product-price">119 ₽</div>
                                            </div>
                                        </div>
                                        <div class="orders__item-product-row">
                                            <div class="orders__item-product-left">
                                                <div class="orders__item-product-img" style="background-image: url('assets/images/card-img3.jpg')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                                <div class="orders__item-product-kl">2 шт,</div>
                                                <div class="orders__item-product-price">119 ₽</div>
                                            </div>
                                        </div>
                                        <div class="orders__item-product-row d-none">
                                            <div class="orders__item-product-left">
                                                <div class="orders__item-product-img" style="background-image: url('assets/images/card-img3.jpg')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                                <div class="orders__item-product-kl">2 шт,</div>
                                                <div class="orders__item-product-price">119 ₽</div>
                                            </div>
                                            <div class="orders__item-product-right"><a class="orders__item-product-rating-bt" href="#">ОЦЕНИТЬ ТОВАР</a></div>
                                        </div>
                                        <a href="{{route('personal.order', '1')}}" class="orders__item-product-btn"><span>подробнее</span><svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.74815 5.40594L1.46799 0.246288C1.1321 -0.0820971 0.587529 -0.0820971 0.25181 0.246288C-0.0839366 0.574382 -0.0839366 1.10652 0.25181 1.43458L4.92394 6.00009L0.251945 10.5654C-0.0838008 10.8937 -0.0838008 11.4257 0.251945 11.7538C0.587692 12.0821 1.13224 12.0821 1.46812 11.7538L6.74829 6.5941C6.91616 6.42998 7 6.2151 7 6.00011C7 5.78502 6.916 5.56998 6.74815 5.40594Z" fill="#3F4042"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="orders__item">
                                <div class="orders__top">
                                    <div>
                                        <div class="orders__title">
                                            <div class="orders__title-main">Заказ 18 от 14.08.2020</div>
                                        </div>
                                        <div class="orders__top--price">
                                            <div class="orders__status orders__status-processing">В обработке
                                                <div class="order__status-info">Мы соберем заказ в течение нескольких часов и доставим сегодня</div>
                                            </div>
                                            <div class="orders__pay">Оплачено <span class="orders__pay-total">1 350 ₽</span> <span class="orders__pay-economy">2 545 ₽</span></div>
                                        </div>
                                    </div>
                                    <div class="orders__button">
                                        <button class="orders__button orders__button--cancel-order">отменить заказ</button>
                                        <button class="orders__button orders__button--repeat-order">Повторить</button>
                                    </div>
                                </div>
                                <div class="orders__item-product">
                                    <div class="orders__item-product-title">Товары в заказе (13)</div>
                                    <div class="orders__item-product-inner">
                                        <div class="orders__item-product-row">
                                            <div class="orders__item-product-left">
                                                <div class="orders__item-product-img" style="background-image: url('assets/images/card-img3.jpg')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                                <div class="orders__item-product-kl">2 шт,</div>
                                                <div class="orders__item-product-price">119 ₽</div>
                                            </div>
                                        </div>
                                        <div class="orders__item-product-row">
                                            <div class="orders__item-product-left">
                                                <div class="orders__item-product-img" style="background-image: url('assets/images/card-img3.jpg')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                                <div class="orders__item-product-kl">2 шт,</div>
                                                <div class="orders__item-product-price">119 ₽</div>
                                            </div>
                                        </div>
                                        <div class="orders__item-product-row">
                                            <div class="orders__item-product-left">
                                                <div class="orders__item-product-img" style="background-image: url('assets/images/card-img3.jpg')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                                <div class="orders__item-product-kl">2 шт,</div>
                                                <div class="orders__item-product-price">119 ₽</div>
                                            </div>
                                        </div>
                                        <div class="orders__item-product-row d-none">
                                            <div class="orders__item-product-left">
                                                <div class="orders__item-product-img" style="background-image: url('assets/images/card-img3.jpg')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                                <div class="orders__item-product-kl">2 шт,</div>
                                                <div class="orders__item-product-price">119 ₽</div>
                                            </div>
                                            <div class="orders__item-product-right"><a class="orders__item-product-rating-bt" href="#">ОЦЕНИТЬ ТОВАР</a></div>
                                        </div>
                                        <div class="orders__item-product-btn js-orders-btn">смотреть +5 еще</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="orders orders-story tab-pane fade">
                            <div class="orders__item">
                                <div class="orders__top">
                                    <div>
                                        <div class="orders__title">
                                            <div class="orders__title-main">Заказ 22 от 14.08.2020</div>
                                        </div>
                                        <div class="orders__top--price">
                                            <div class="orders__status orders__status-success">Доставлено
                                                <div class="order__status-info">Заказ доставлен</div>
                                            </div>
                                            <div class="orders__pay">Оплачено <span class="orders__pay-total">1 350 ₽</span> <span class="orders__pay-economy">2 545 ₽</span></div>
                                        </div>
                                    </div>
                                    <div class="orders__button">
                                        <button class="orders__button orders__button--cancel-order">отменить заказ</button>
                                        <button class="orders__button orders__button--repeat-order">Повторить</button>
                                    </div>
                                </div>
                                <div class="orders__item-product">
                                    <div class="orders__item-product-title">Товары в заказе (13)</div>
                                    <div class="orders__item-product-inner">
                                        <div class="orders__item-product-row">
                                            <div class="orders__item-product-left">
                                                <div class="orders__item-product-img" style="background-image: url('assets/images/card-img3.jpg')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                                <div class="orders__item-product-kl">2 шт,</div>
                                                <div class="orders__item-product-price">119 ₽</div>
                                            </div>
                                        </div>
                                        <div class="orders__item-product-row">
                                            <div class="orders__item-product-left">
                                                <div class="orders__item-product-img" style="background-image: url('assets/images/card-img3.jpg')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                                <div class="orders__item-product-kl">2 шт,</div>
                                                <div class="orders__item-product-price">119 ₽</div>
                                            </div>
                                        </div>
                                        <div class="orders__item-product-row">
                                            <div class="orders__item-product-left">
                                                <div class="orders__item-product-img" style="background-image: url('assets/images/card-img3.jpg')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                                <div class="orders__item-product-kl">2 шт,</div>
                                                <div class="orders__item-product-price">119 ₽</div>
                                            </div>
                                        </div>
                                        <div class="orders__item-product-row d-none">
                                            <div class="orders__item-product-left">
                                                <div class="orders__item-product-img" style="background-image: url('assets/images/card-img3.jpg')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                                <div class="orders__item-product-kl">2 шт,</div>
                                                <div class="orders__item-product-price">119 ₽</div>
                                            </div>
                                            <div class="orders__item-product-right"><a class="orders__item-product-rating-bt" href="#">ОЦЕНИТЬ ТОВАР</a></div>
                                        </div>
                                        <div class="orders__item-product-btn"><span>подробнее</span><svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.74815 5.40594L1.46799 0.246288C1.1321 -0.0820971 0.587529 -0.0820971 0.25181 0.246288C-0.0839366 0.574382 -0.0839366 1.10652 0.25181 1.43458L4.92394 6.00009L0.251945 10.5654C-0.0838008 10.8937 -0.0838008 11.4257 0.251945 11.7538C0.587692 12.0821 1.13224 12.0821 1.46812 11.7538L6.74829 6.5941C6.91616 6.42998 7 6.2151 7 6.00011C7 5.78502 6.916 5.56998 6.74815 5.40594Z" fill="#3F4042"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="orders__item">
                                <div class="orders__top">
                                    <div>
                                        <div class="orders__title">
                                            <div class="orders__title-main">Заказ 18 от 14.08.2020</div>
                                        </div>
                                        <div class="orders__top--price">
                                            <div class="orders__status orders__status-processing">В обработке
                                                <div class="order__status-info">Мы соберем заказ в течение нескольких часов и доставим сегодня</div>
                                            </div>
                                            <div class="orders__pay">Оплачено <span class="orders__pay-total">1 350 ₽</span> <span class="orders__pay-economy">2 545 ₽</span></div>
                                        </div>
                                    </div>
                                    <div class="orders__button">
                                        <button class="orders__button orders__button--cancel-order">отменить заказ</button>
                                        <button class="orders__button orders__button--repeat-order">Повторить</button>
                                    </div>
                                </div>
                                <div class="orders__item-product">
                                    <div class="orders__item-product-title">Товары в заказе (13)</div>
                                    <div class="orders__item-product-inner">
                                        <div class="orders__item-product-row">
                                            <div class="orders__item-product-left">
                                                <div class="orders__item-product-img" style="background-image: url('assets/images/card-img3.jpg')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                                <div class="orders__item-product-kl">2 шт,</div>
                                                <div class="orders__item-product-price">119 ₽</div>
                                            </div>
                                        </div>
                                        <div class="orders__item-product-row">
                                            <div class="orders__item-product-left">
                                                <div class="orders__item-product-img" style="background-image: url('assets/images/card-img3.jpg')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                                <div class="orders__item-product-kl">2 шт,</div>
                                                <div class="orders__item-product-price">119 ₽</div>
                                            </div>
                                        </div>
                                        <div class="orders__item-product-row">
                                            <div class="orders__item-product-left">
                                                <div class="orders__item-product-img" style="background-image: url('assets/images/card-img3.jpg')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                                <div class="orders__item-product-kl">2 шт,</div>
                                                <div class="orders__item-product-price">119 ₽</div>
                                            </div>
                                        </div>
                                        <div class="orders__item-product-row d-none">
                                            <div class="orders__item-product-left">
                                                <div class="orders__item-product-img" style="background-image: url('assets/images/card-img3.jpg')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                                <div class="orders__item-product-kl">2 шт,</div>
                                                <div class="orders__item-product-price">119 ₽</div>
                                            </div>
                                            <div class="orders__item-product-right"><a class="orders__item-product-rating-bt" href="#">ОЦЕНИТЬ ТОВАР</a></div>
                                        </div>
                                        <div class="orders__item-product-btn js-orders-btn">смотреть +5 еще</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-bl">
                        <ul class="pagination">
                            <li class="page-item prev"><a class="page-link" href="#"><span class="tx">Предыдущая</span><span class="arrow"><img src="assets/images/svg/arrow2.svg" alt=""></span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item mob"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><span class="page-link">...</span></li>
                            <li class="page-item"><a class="page-link" href="#">22</a></li>
                            <li class="page-item next"><a class="page-link" href="#"><span class="tx">следующая</span><span class="arrow"><img src="assets/images/svg/arrow2.svg" alt=""></span></a></li>
                        </ul>
                    </div>
                </div>
<!--                <div class="lk__left">
                    {{--@if($orders)
                        <div class="orders">
                            @foreach($orders as $order)
                                <div class="orders__item">
                                    <div class="orders__top">
                                        <div class="orders__title">
                                            <div class="orders__title-main">Заказ {{$order['id']}}
                                                от {{ date('d.m.Y', ($order['date']/1000)) }}</div>
                                            <div class="orders__title-min">{{$order['totalCount']}} товар на сумму {{$order['totalProductsPrice']}}
                                                руб.
                                            </div>
                                        </div>
                                        @if($order['status'])
                                            <div class="orders__status {{&#45;&#45;orders__status-success&#45;&#45;}}" {{&#45;&#45;style="color: {{$order['status']['color']}}"&#45;&#45;}}>
                                                {{$order['status']['title']}}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="orders__item-descr">
                                        <div class="orders__item-descr-title">
                                            <span>Получатель</span>
                                            {{&#45;&#45;<a href="#">Повторить заказ</a>&#45;&#45;}}
                                        </div>
                                        <div class="orders__item-descr-count">
                                            <div
                                                class="orders__item-descr-count-tit">{{ $order['userData']['name'].' '.$order['userData']['surname'] }}</div>
                                        </div>
                                    </div>
                                    <div class="orders__item-descr">
                                        <div class="orders__item-descr-title">Оплата</div>
                                        <div class="orders__item-descr-count">
                                            <div class="orders__item-descr-count-tit">{{$order['totalCount']}} товар на
                                                сумму {{$order['totalProductsPrice']}} руб
                                            </div>
                                            {{&#45;&#45;<div class="orders__item-descr-count-st">Не оплачено</div>
                                            <div class="orders__item-descr-count-st tw">Оплачено</div>&#45;&#45;}}
                                        </div>
                                        <p>Сумма к оплате по счету: <b>{{$order['totalPrice']}} ₽</b></p>
                                    </div>
                                    <div class="orders__item-descr">
                                        <div class="orders__item-descr-title">Доставка</div>
                                        <div class="orders__item-descr-count">
                                            <div class="orders__item-descr-count-tit">Адрес
                                                доставки: {{ $order['address'] }}</div>
                                        </div>
                                    </div>
                                    {{&#45;&#45;<div class="orders__item-descr orders__item-descr-rating">
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
                                    </div>&#45;&#45;}}
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
                        {{&#45;&#45;                    pagination&#45;&#45;}}
                        {{&#45;&#45;<div class="pagination-bl">
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
                        </div>&#45;&#45;}}
                    @endif--}}
                </div>-->
                @include('layouts.user.nav')
            </div>
        </div>
    </div>

@endsection
