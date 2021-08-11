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
                        <div class="orders__item">
                            <div class="orders__top">
                                <div class="orders__title">
                                    <div class="orders__title-main">Заказ 18 от 14.08.2020</div>
                                    <div class="orders__title-min">1 товар на сумму 180 руб.</div>
                                </div>
                                <div class="orders__status orders__status-success">Доставлено</div>
                            </div>
                            <div class="orders__item-descr">
                                <div class="orders__item-descr-title"><span>Получатель</span><a href="#">Повторить заказ</a></div>
                                <div class="orders__item-descr-count">
                                    <div class="orders__item-descr-count-tit">Геннадий Петров</div>
                                </div>
                            </div>
                            <div class="orders__item-descr">
                                <div class="orders__item-descr-title">Оплата</div>
                                <div class="orders__item-descr-count">
                                    <div class="orders__item-descr-count-tit">Счет 18/1 от 14.08.2020, Яндекс.Деньги</div>
                                    <div class="orders__item-descr-count-st">Не оплачено</div>
                                </div>
                                <p>Сумма к оплате по счету: <b>180 ₽</b></p>
                            </div>
                            <div class="orders__item-descr">
                                <div class="orders__item-descr-title">Доставка</div>
                                <div class="orders__item-descr-count">
                                    <div class="orders__item-descr-count-tit">Адрес доставки: г. Москва улица Большая Дмитровка д 7</div>
                                </div>
                            </div>
                            <div class="orders__item-descr orders__item-descr-rating">
                                <div class="orders__item-descr-title">Оцените доставку</div>
                                <div class="orders__item-descr-rating-im">
                                    <div class="orders__item-descr-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                    <div class="orders__item-descr-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                    <div class="orders__item-descr-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                    <div class="orders__item-descr-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                    <div class="orders__item-descr-rating-im-item"><img src="{{ asset('assets/images/svg/rating.svg') }}" alt=""></div>
                                </div>
                            </div>
                            <div class="orders__item-product">
                                <div class="orders__item-product-title">Товары в заказе</div>
                                <div class="orders__item-product-inner">
                                    <div class="orders__item-product-row">
                                        <div class="orders__item-product-left">
                                            <div class="orders__item-product-img" style="background-image: url('{{ asset('assets/images/card-img3.jpg') }}')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                            <div class="orders__item-product-price">119 ₽</div>
                                        </div>
                                        <div class="orders__item-product-right">
                                            <div class="orders__item-product-rating">
                                                <div class="orders__item-product-rating-title">Оценить товар</div>
                                                <div class="orders__item-product-rating-im">
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating.svg') }}" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="orders__item-product-row">
                                        <div class="orders__item-product-left">
                                            <div class="orders__item-product-img" style="background-image: url('{{ asset('assets/images/card-img3.jpg') }}')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                            <div class="orders__item-product-price">119 ₽</div>
                                        </div>
                                        <div class="orders__item-product-right">
                                            <div class="orders__item-product-rating">
                                                <div class="orders__item-product-rating-title">Оценить товар</div>
                                                <div class="orders__item-product-rating-im">
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating.svg') }}" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="orders__item-product-row">
                                        <div class="orders__item-product-left">
                                            <div class="orders__item-product-img" style="background-image: url('{{ asset('assets/images/card-img3.jpg') }}')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                            <div class="orders__item-product-price">119 ₽</div>
                                        </div>
                                        <div class="orders__item-product-right">
                                            <div class="orders__item-product-rating">
                                                <div class="orders__item-product-rating-title">Оценить товар</div>
                                                <div class="orders__item-product-rating-im">
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating.svg') }}" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="orders__item-product-row d-none">
                                        <div class="orders__item-product-left">
                                            <div class="orders__item-product-img" style="background-image: url('{{ asset('assets/images/card-img3.jpg') }}')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                            <div class="orders__item-product-price">119 ₽</div>
                                        </div>
                                        <div class="orders__item-product-right">
                                            <div class="orders__item-product-rating">
                                                <div class="orders__item-product-rating-title">Оценить товар</div>
                                                <div class="orders__item-product-rating-im">
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating.svg') }}" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="orders__item-product-btn js-orders-btn">смотреть +5 еще</div>
                                </div>
                            </div>
                        </div>
                        <div class="orders__item">
                            <div class="orders__top">
                                <div class="orders__title">
                                    <div class="orders__title-main">Заказ 18 от 14.08.2020</div>
                                    <div class="orders__title-min">1 товар на сумму 180 руб.</div>
                                </div>
                                <div class="orders__status orders__status-success">Доставлено</div>
                            </div>
                            <div class="orders__item-descr">
                                <div class="orders__item-descr-title"><span>Получатель</span><a href="#">Повторить заказ</a></div>
                                <div class="orders__item-descr-count">
                                    <div class="orders__item-descr-count-tit">Геннадий Петров</div>
                                </div>
                            </div>
                            <div class="orders__item-descr">
                                <div class="orders__item-descr-title">Оплата</div>
                                <div class="orders__item-descr-count">
                                    <div class="orders__item-descr-count-tit">Счет 18/1 от 14.08.2020, Яндекс.Деньги</div>
                                    <div class="orders__item-descr-count-st tw">Оплачено</div>
                                </div>
                                <p>Сумма к оплате по счету: <b>180 ₽</b></p>
                            </div>
                            <div class="orders__item-descr">
                                <div class="orders__item-descr-title">Доставка</div>
                                <div class="orders__item-descr-count">
                                    <div class="orders__item-descr-count-tit">Адрес доставки: г. Москва улица Большая Дмитровка д 7</div>
                                </div>
                            </div>
                            <div class="orders__item-descr orders__item-descr-rating">
                                <div class="orders__item-descr-title">Оцените доставку</div>
                                <div class="orders__item-descr-rating-im">
                                    <div class="orders__item-descr-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                    <div class="orders__item-descr-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                    <div class="orders__item-descr-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                    <div class="orders__item-descr-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                    <div class="orders__item-descr-rating-im-item"><img src="{{ asset('assets/images/svg/rating.svg') }}" alt=""></div>
                                </div>
                            </div>
                            <div class="orders__item-product">
                                <div class="orders__item-product-title">Товары в заказе</div>
                                <div class="orders__item-product-inner">
                                    <div class="orders__item-product-row">
                                        <div class="orders__item-product-left">
                                            <div class="orders__item-product-img" style="background-image: url('{{ asset('assets/images/card-img3.jpg') }}')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                            <div class="orders__item-product-price">119 ₽</div>
                                        </div>
                                        <div class="orders__item-product-right">
                                            <div class="orders__item-product-rating">
                                                <div class="orders__item-product-rating-title">Оценить товар</div>
                                                <div class="orders__item-product-rating-im">
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating.svg') }}" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="orders__item-product-row">
                                        <div class="orders__item-product-left">
                                            <div class="orders__item-product-img" style="background-image: url('{{ asset('assets/images/card-img3.jpg') }}')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                            <div class="orders__item-product-price">119 ₽</div>
                                        </div>
                                        <div class="orders__item-product-right">
                                            <div class="orders__item-product-rating">
                                                <div class="orders__item-product-rating-title">Оценить товар</div>
                                                <div class="orders__item-product-rating-im">
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating.svg') }}" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="orders__item-product-row">
                                        <div class="orders__item-product-left">
                                            <div class="orders__item-product-img" style="background-image: url('{{ asset('assets/images/card-img3.jpg') }}')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                            <div class="orders__item-product-price">119 ₽</div>
                                        </div>
                                        <div class="orders__item-product-right">
                                            <div class="orders__item-product-rating">
                                                <div class="orders__item-product-rating-title">Оценить товар</div>
                                                <div class="orders__item-product-rating-im">
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating.svg') }}" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="orders__item-product-row d-none">
                                        <div class="orders__item-product-left">
                                            <div class="orders__item-product-img" style="background-image: url('{{ asset('assets/images/card-img3.jpg') }}')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                            <div class="orders__item-product-price">119 ₽</div>
                                        </div>
                                        <div class="orders__item-product-right">
                                            <div class="orders__item-product-rating">
                                                <div class="orders__item-product-rating-title">Оценить товар</div>
                                                <div class="orders__item-product-rating-im">
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating.svg') }}" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="orders__item-product-btn js-orders-btn">смотреть +5 еще</div>
                                </div>
                            </div>
                        </div>
                        <div class="orders__item">
                            <div class="orders__top">
                                <div class="orders__title">
                                    <div class="orders__title-main">Заказ 18 от 14.08.2020</div>
                                    <div class="orders__title-min">1 товар на сумму 180 руб.</div>
                                </div>
                                <div class="orders__status orders__status-success">Доставлено</div>
                            </div>
                            <div class="orders__item-descr">
                                <div class="orders__item-descr-title"><span>Получатель</span><a href="#">Повторить заказ</a></div>
                                <div class="orders__item-descr-count">
                                    <div class="orders__item-descr-count-tit">Геннадий Петров</div>
                                </div>
                            </div>
                            <div class="orders__item-descr">
                                <div class="orders__item-descr-title">Оплата</div>
                                <div class="orders__item-descr-count">
                                    <div class="orders__item-descr-count-tit">Счет 18/1 от 14.08.2020, Яндекс.Деньги</div>
                                    <div class="orders__item-descr-count-st tw">Оплачено</div>
                                </div>
                                <p>Сумма к оплате по счету: <b>180 ₽</b></p>
                            </div>
                            <div class="orders__item-descr">
                                <div class="orders__item-descr-title">Доставка</div>
                                <div class="orders__item-descr-count">
                                    <div class="orders__item-descr-count-tit">Адрес доставки: г. Москва улица Большая Дмитровка д 7</div>
                                </div>
                            </div>
                            <div class="orders__item-descr orders__item-descr-rating">
                                <div class="orders__item-descr-title">Оцените доставку</div>
                                <div class="orders__item-descr-rating-im">
                                    <div class="orders__item-descr-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                    <div class="orders__item-descr-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                    <div class="orders__item-descr-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                    <div class="orders__item-descr-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                    <div class="orders__item-descr-rating-im-item"><img src="{{ asset('assets/images/svg/rating.svg') }}" alt=""></div>
                                </div>
                            </div>
                            <div class="orders__item-product">
                                <div class="orders__item-product-title">Товары в заказе</div>
                                <div class="orders__item-product-inner">
                                    <div class="orders__item-product-row">
                                        <div class="orders__item-product-left">
                                            <div class="orders__item-product-img" style="background-image: url('{{ asset('assets/images/card-img3.jpg') }}')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                            <div class="orders__item-product-price">119 ₽</div>
                                        </div>
                                        <div class="orders__item-product-right">
                                            <div class="orders__item-product-rating">
                                                <div class="orders__item-product-rating-title">Оценить товар</div>
                                                <div class="orders__item-product-rating-im">
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating.svg') }}" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="orders__item-product-row">
                                        <div class="orders__item-product-left">
                                            <div class="orders__item-product-img" style="background-image: url('{{ asset('assets/images/card-img3.jpg') }}')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                            <div class="orders__item-product-price">119 ₽</div>
                                        </div>
                                        <div class="orders__item-product-right">
                                            <div class="orders__item-product-rating">
                                                <div class="orders__item-product-rating-title">Оценить товар</div>
                                                <div class="orders__item-product-rating-im">
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating.svg') }}" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="orders__item-product-row">
                                        <div class="orders__item-product-left">
                                            <div class="orders__item-product-img" style="background-image: url('{{ asset('assets/images/card-img3.jpg') }}')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                            <div class="orders__item-product-price">119 ₽</div>
                                        </div>
                                        <div class="orders__item-product-right">
                                            <div class="orders__item-product-rating">
                                                <div class="orders__item-product-rating-title">Оценить товар</div>
                                                <div class="orders__item-product-rating-im">
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating.svg') }}" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="orders__item-product-row d-none">
                                        <div class="orders__item-product-left">
                                            <div class="orders__item-product-img" style="background-image: url('{{ asset('assets/images/card-img3.jpg') }}')"></div><a class="orders__item-product-name" href="#">Макароны Кисловодские Вермишель</a>
                                            <div class="orders__item-product-price">119 ₽</div>
                                        </div>
                                        <div class="orders__item-product-right">
                                            <div class="orders__item-product-rating">
                                                <div class="orders__item-product-rating-title">Оценить товар</div>
                                                <div class="orders__item-product-rating-im">
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                    <div class="orders__item-product-rating-im-item"><img src="{{ asset('assets/images/svg/rating.svg') }}" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="orders__item-product-btn js-orders-btn">смотреть +5 еще</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-bl">
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
                    </div>
                </div>
                @include('layouts.user.nav')
            </div>
        </div>
    </div>

@endsection
