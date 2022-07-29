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
                    @if($orders['count'])
                        <!--<div class="order__button&#45;&#45;wrapper">
                            <button class="order__button js__button-active order__button&#45;&#45;active">Текущие заказы</button>
                            <button class="order__button js__button-story">История заказов</button>
                        </div>-->
                        {{--<div class="orders-wrapper">--}}
                            {{--<div class="orders-new tab-pane fade show active">--}}
                                <div class="orders">
                                    @foreach($orders['orders'] as $order)
                                        <div class="orders__item">
                                            <div class="orders__top">
                                                <div>
                                                    <div class="orders__title">
                                                        <div class="orders__title-main">Заказ {{$order['number']}} от {{$order['date']}}</div>
                                                    </div>
                                                    <div class="orders__top--price">
                                                        <div class="orders__status orders__status-processing" style="background: {{$order['status']['color']}}">{{ $order['status']['title']}}
                                                            <div class="order__status-info">{{ $order['status']['comment']}}</div>
                                                        </div>
                                                        <div class="orders__pay">Оплачено <span class="orders__pay-total">{{ $order['totalPrice'] }} ₽</span> {{--<span class="orders__pay-economy">2 545 ₽</span>--}}</div>
                                                    </div>
                                                </div>
                                                <div class="orders__button">
{{--                                                    <button class="orders__button orders__button--repeat-order">Повторить</button>--}}
                                                </div>
                                            </div>
                                            <div class="orders__item-product">
                                                <div class="orders__item-product-title">Товары в заказе ({{ $order['totalCount'] }})</div>
                                                <div class="orders__item-product-inner">
                                                    @foreach($order['products'] as $product)
                                                        <div class="orders__item-product-row">
                                                            <div class="orders__item-product-left">
                                                                <div class="orders__item-product-img" style="background-image: url('{{asset($product['image'])}}')"></div><a class="orders__item-product-name" href="#">{{ $product['title'] }}</a>
                                                                <div class="orders__item-product-kl">{{ $product['count'] }} шт,</div>
                                                                <div class="orders__item-product-price">{{ $product['price'] }} ₽</div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                    {{--<a href="{{route('personal.order', '1')}}" class="orders__item-product-btn"><span>подробнее</span><svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6.74815 5.40594L1.46799 0.246288C1.1321 -0.0820971 0.587529 -0.0820971 0.25181 0.246288C-0.0839366 0.574382 -0.0839366 1.10652 0.25181 1.43458L4.92394 6.00009L0.251945 10.5654C-0.0838008 10.8937 -0.0838008 11.4257 0.251945 11.7538C0.587692 12.0821 1.13224 12.0821 1.46812 11.7538L6.74829 6.5941C6.91616 6.42998 7 6.2151 7 6.00011C7 5.78502 6.916 5.56998 6.74815 5.40594Z" fill="#3F4042"/>
                                                        </svg>
                                                    </a>--}}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    {{--<div class="orders__item">
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
                                                        <div class="orders__item-product-img" style="background-image: url('{{asset('assets/images/card-img3.jpg')}}')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                                        <div class="orders__item-product-kl">2 шт,</div>
                                                        <div class="orders__item-product-price">119 ₽</div>
                                                    </div>
                                                </div>
                                                <div class="orders__item-product-row">
                                                    <div class="orders__item-product-left">
                                                        <div class="orders__item-product-img" style="background-image: url('{{asset('assets/images/card-img3.jpg')}}')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                                        <div class="orders__item-product-kl">2 шт,</div>
                                                        <div class="orders__item-product-price">119 ₽</div>
                                                    </div>
                                                </div>
                                                <div class="orders__item-product-row">
                                                    <div class="orders__item-product-left">
                                                        <div class="orders__item-product-img" style="background-image: url('{{asset('assets/images/card-img3.jpg')}}')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                                        <div class="orders__item-product-kl">2 шт,</div>
                                                        <div class="orders__item-product-price">119 ₽</div>
                                                    </div>
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
                                                    <div class="orders__status orders__status-success">Доставлено
                                                        <div class="order__status-info">Заказ доставлен</div>
                                                    </div>
                                                    <div class="orders__pay">Оплачено <span class="orders__pay-total">1 350 ₽</span> <span class="orders__pay-economy">2 545 ₽</span></div>
                                                </div>
                                            </div>
                                            <div class="orders__button">
--}}{{--                                                <button class="orders__button orders__button--cancel-order">отменить заказ</button>--}}{{--
                                                <button class="orders__button orders__button--repeat-order">Повторить</button>
                                            </div>
                                        </div>
                                        <div class="orders__item-product">
                                            <div class="orders__item-product-title">Товары в заказе (13)</div>
                                            <div class="orders__item-product-inner">
                                                <div class="orders__item-product-row">
                                                    <div class="orders__item-product-left">
                                                        <div class="orders__item-product-img" style="background-image: url('{{asset('assets/images/card-img3.jpg')}}')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                                        <div class="orders__item-product-kl">2 шт,</div>
                                                        <div class="orders__item-product-price">119 ₽</div>
                                                    </div>
                                                </div>
                                                <div class="orders__item-product-row">
                                                    <div class="orders__item-product-left">
                                                        <div class="orders__item-product-img" style="background-image: url('{{asset('assets/images/card-img3.jpg')}}')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                                        <div class="orders__item-product-kl">2 шт,</div>
                                                        <div class="orders__item-product-price">119 ₽</div>
                                                    </div>
                                                </div>
                                                <div class="orders__item-product-row">
                                                    <div class="orders__item-product-left">
                                                        <div class="orders__item-product-img" style="background-image: url('{{asset('assets/images/card-img3.jpg')}}')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                                        <div class="orders__item-product-kl">2 шт,</div>
                                                        <div class="orders__item-product-price">119 ₽</div>
                                                    </div>
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
                                                    <div class="orders__status orders__status-success">Доставлено
                                                        <div class="order__status-info">Заказ доставлен</div>
                                                    </div>
                                                    <div class="orders__pay">Оплачено <span class="orders__pay-total">1 350 ₽</span> <span class="orders__pay-economy">2 545 ₽</span></div>
                                                </div>
                                            </div>
                                            <div class="orders__button">
--}}{{--                                                <button class="orders__button orders__button--cancel-order">отменить заказ</button>--}}{{--
                                                <button class="orders__button orders__button--repeat-order">Повторить</button>
                                            </div>
                                        </div>
                                        <div class="orders__item-product">
                                            <div class="orders__item-product-title">Товары в заказе (13)</div>
                                            <div class="orders__item-product-inner">
                                                <div class="orders__item-product-row">
                                                    <div class="orders__item-product-left">
                                                        <div class="orders__item-product-img" style="background-image: url('{{asset('assets/images/card-img3.jpg')}}')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                                        <div class="orders__item-product-kl">2 шт,</div>
                                                        <div class="orders__item-product-price">119 ₽</div>
                                                    </div>
                                                </div>
                                                <div class="orders__item-product-row">
                                                    <div class="orders__item-product-left">
                                                        <div class="orders__item-product-img" style="background-image: url('{{asset('assets/images/card-img3.jpg')}}')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                                        <div class="orders__item-product-kl">2 шт,</div>
                                                        <div class="orders__item-product-price">119 ₽</div>
                                                    </div>
                                                </div>
                                                <div class="orders__item-product-row">
                                                    <div class="orders__item-product-left">
                                                        <div class="orders__item-product-img" style="background-image: url('{{asset('assets/images/card-img3.jpg')}}')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                                        <div class="orders__item-product-kl">2 шт,</div>
                                                        <div class="orders__item-product-price">119 ₽</div>
                                                    </div>
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
                                                    <div class="orders__status orders__status-success">Доставлено
                                                        <div class="order__status-info">Заказ доставлен</div>
                                                    </div>
                                                    <div class="orders__pay">Оплачено <span class="orders__pay-total">1 350 ₽</span> <span class="orders__pay-economy">2 545 ₽</span></div>
                                                </div>
                                            </div>
                                            <div class="orders__button">
--}}{{--                                                <button class="orders__button orders__button--cancel-order">отменить заказ</button>--}}{{--
                                                <button class="orders__button orders__button--repeat-order">Повторить</button>
                                            </div>
                                        </div>
                                        <div class="orders__item-product">
                                            <div class="orders__item-product-title">Товары в заказе (13)</div>
                                            <div class="orders__item-product-inner">
                                                <div class="orders__item-product-row">
                                                    <div class="orders__item-product-left">
                                                        <div class="orders__item-product-img" style="background-image: url('{{asset('assets/images/card-img3.jpg')}}')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                                        <div class="orders__item-product-kl">2 шт,</div>
                                                        <div class="orders__item-product-price">119 ₽</div>
                                                    </div>
                                                </div>
                                                <div class="orders__item-product-row">
                                                    <div class="orders__item-product-left">
                                                        <div class="orders__item-product-img" style="background-image: url('{{asset('assets/images/card-img3.jpg')}}')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                                        <div class="orders__item-product-kl">2 шт,</div>
                                                        <div class="orders__item-product-price">119 ₽</div>
                                                    </div>
                                                </div>
                                                <div class="orders__item-product-row">
                                                    <div class="orders__item-product-left">
                                                        <div class="orders__item-product-img" style="background-image: url('{{asset('assets/images/card-img3.jpg')}}')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                                        <div class="orders__item-product-kl">2 шт,</div>
                                                        <div class="orders__item-product-price">119 ₽</div>
                                                    </div>
                                                </div>
                                                <a href="{{route('personal.order', '1')}}" class="orders__item-product-btn"><span>подробнее</span><svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.74815 5.40594L1.46799 0.246288C1.1321 -0.0820971 0.587529 -0.0820971 0.25181 0.246288C-0.0839366 0.574382 -0.0839366 1.10652 0.25181 1.43458L4.92394 6.00009L0.251945 10.5654C-0.0838008 10.8937 -0.0838008 11.4257 0.251945 11.7538C0.587692 12.0821 1.13224 12.0821 1.46812 11.7538L6.74829 6.5941C6.91616 6.42998 7 6.2151 7 6.00011C7 5.78502 6.916 5.56998 6.74815 5.40594Z" fill="#3F4042"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>--}}
                                </div>

                            {{--</div>--}}
                            <!--<div class="orders-story tab-pane fade">
                                <div class="orders">
                                    <div class="orders__item">
                                        <div class="orders__top">
                                            <div>
                                                <div class="orders__title">
                                                    <div class="orders__title-main">Заказ 22 от 14.08.2020</div>
                                                </div>
                                                <div class="orders__top&#45;&#45;price">
                                                    <div class="orders__status orders__status-success">Доставлено
                                                        <div class="order__status-info">Заказ доставлен</div>
                                                    </div>
                                                    <div class="orders__pay">Оплачено <span class="orders__pay-total">1 350 ₽</span> <span class="orders__pay-economy">2 545 ₽</span></div>
                                                </div>
                                            </div>
                                            <div class="orders__button">
                                                <button class="orders__button orders__button&#45;&#45;cancel-order">отменить заказ</button>
                                                <button class="orders__button orders__button&#45;&#45;repeat-order">Повторить</button>
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
                                                <div class="orders__top&#45;&#45;price">
                                                    <div class="orders__status orders__status-processing">В обработке
                                                        <div class="order__status-info">Мы соберем заказ в течение нескольких часов и доставим сегодня</div>
                                                    </div>
                                                    <div class="orders__pay">Оплачено <span class="orders__pay-total">1 350 ₽</span> <span class="orders__pay-economy">2 545 ₽</span></div>
                                                </div>
                                            </div>
                                            <div class="orders__button">
                                                <button class="orders__button orders__button&#45;&#45;cancel-order">отменить заказ</button>
                                                <button class="orders__button orders__button&#45;&#45;repeat-order">Повторить</button>
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
                            </div>-->
{{--                        </div>--}}
                        {{--<div class="pagination-bl">
                        <ul class="pagination">
                            <li class="page-item prev"><a class="page-link" href="#"><span class="tx">Предыдущая</span><span class="arrow"><img src="{{asset('assets/images/svg/arrow2.svg')}}" alt=""></span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item mob"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><span class="page-link">...</span></li>
                            <li class="page-item"><a class="page-link" href="#">22</a></li>
                            <li class="page-item next"><a class="page-link" href="#"><span class="tx">следующая</span><span class="arrow"><img src="{{asset('assets/images/svg/arrow2.svg')}}" alt=""></span></a></li>
                        </ul>
                    </div>--}}
                    @else
                        <div class="orders__hollow">
                            <img class="orders__hollow--img" src="{{asset('assets/images/svg/orders-hollow.svg')}}">
                            <div class="order__hollow--wrapper">
                                <h2>Вы еще не совершили покупок</h2>
                                <p>Перейдите в каталог, посмотрите скидки или воспользуйтесь поиском, чтобы найти нужный товар.</p>
                                <a href="{{route('home')}}">начать покупки</a>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="lk__menu">
                    @include('layouts.user.nav')
                    <div class="orders__wrapper">
                        <div class="orders__item">
                            <div class="order__support--wrapper">
                                <h3>Служба поддержки</h3>
                                <p>Если возникли проблемы с заказом, дайте нам знать</p>
                            </div>
                            <a class="order__support--phone" href="tel:88004562514">
                                <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" style="margin-right: 8px;">
                                    <path d="M7.805 8.90167C8.58695 10.2754 9.7246 11.4131 11.0983 12.195L11.835 11.1633C11.9535 10.9974 12.1286 10.8807 12.3273 10.8353C12.526 10.7898 12.7345 10.8188 12.9133 10.9167C14.0919 11.5608 15.3935 11.9481 16.7325 12.0533C16.9415 12.0699 17.1365 12.1646 17.2788 12.3186C17.421 12.4726 17.5 12.6745 17.5 12.8842V16.6025C17.5 16.8088 17.4235 17.0078 17.2853 17.161C17.1471 17.3142 16.9569 17.4106 16.7517 17.4317C16.31 17.4775 15.865 17.5 15.4167 17.5C8.28333 17.5 2.5 11.7167 2.5 4.58333C2.5 4.135 2.5225 3.69 2.56833 3.24833C2.58938 3.04308 2.68582 2.85293 2.83899 2.71469C2.99216 2.57646 3.19117 2.49996 3.3975 2.5H7.11583C7.32547 2.49997 7.52741 2.57896 7.6814 2.72121C7.83539 2.86346 7.93011 3.05852 7.94667 3.2675C8.05185 4.60649 8.43923 5.90807 9.08333 7.08667C9.18122 7.26547 9.21018 7.47395 9.16472 7.67266C9.11927 7.87137 9.00255 8.04654 8.83667 8.165L7.805 8.90167ZM5.70333 8.35417L7.28667 7.22333C6.83732 6.25341 6.52946 5.22403 6.3725 4.16667H4.175C4.17 4.305 4.1675 4.44417 4.1675 4.58333C4.16667 10.7967 9.20333 15.8333 15.4167 15.8333C15.5558 15.8333 15.695 15.8308 15.8333 15.825V13.6275C14.776 13.4705 13.7466 13.1627 12.7767 12.7133L11.6458 14.2967C11.1906 14.1198 10.7483 13.9109 10.3225 13.6717L10.2742 13.6442C8.63965 12.7139 7.28607 11.3604 6.35583 9.72583L6.32833 9.6775C6.08909 9.25166 5.88024 8.80945 5.70333 8.35417Z"/>
                                </svg>
                                8 800 456 25 14
                            </a>
                        </div>
                    </div>
                    <div class="orders__wrapper">
                        <div class="orders__item">
                            <div class="order__support--wrapper">
                                <h3>Внимание!</h3>
                                <p>При повторном оформлении заказа, часть товаров может отсутствовать</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
