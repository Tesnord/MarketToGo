@extends('layouts.layout')

@section('content')

    <div class="breadcrumb-block">
        <div class="container">
            {{ Diglactic\Breadcrumbs\Breadcrumbs::render('checkout') }}
        </div>
    </div>
    <div class="title-main">
        <div class="container">
            <div class="title-main__inner">
                <h1>Оформление заказа</h1>
            </div>
        </div>
    </div>
    <div class="order">
        <div class="container">
            <div class="order__inner">
                <div class="order__left">
                    <div class="order__wrap">
                        <div class="cart__inner">
                            <div class="cart__list">
                                @foreach($order['products'] as $product)
                                    <div class="cart__list-item">
                                        <div class="cart__list-descr">
                                            <div class="cart__list-img"
                                                 style="background-image: url('{{ asset($product['image']) }}')"></div>
                                            <a class="cart__list-title" href="#">{{$product['title']}}</a>
                                            <div class="cart__list-article">Артикул: {{$product['vendorCode']}}</div>
                                        </div>
                                        <div class="cart__list-numb">
                                            <div class="cart__list-price"></div>
                                            <div class="cart__list-numb-tx">Цена за {{$product['count']}} шт</div>
                                        </div>
                                        <div class="cart__list-numb last">
                                            <div class="cart__list-price">
                                                <div class="cart__list-price-now">{{$product['price']}} ₽</div>
                                            </div>
                                            <div class="cart__list-numb-tx">Экономия {{$product['economy']}} ₽</div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="order__wrap order__create" @if(!empty($address)) style="display: none" @endif>
                        <div class="order__delivery">
                            <div class="order__wrap-top">
                                <div class="order__wrap-title">Доставка</div>
                            </div>
                            <div class="order__input">
                                <a class="button button-gr button__create" href="javascript:void(0)">добавить адрес</a>
                            </div>
                        </div>
                    </div>
                    <div class="order__wrap order__store" style="display: none">
                        <div class="order__delivery">
                            <div class="order__wrap-top">
                                <div class="order__wrap-title">Доставка</div>
                            </div>
                            <div class="order__input">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="order__input-cell order__input-cell-error">
                                            <input class="form__input-effect has-content" type="text" id="address1">
                                            <label for="address1">Адрес *</label>
                                            {{--<span class="form__input-error">К сожалению, мы еще не осуществляем доставку в данном месте.</span>--}}
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="order__input-cell">
                                            <input class="form__input-effect has-content" type="text" id="address2">
                                            <label for="address2">Квартира *</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="order__input-cell">
                                            <input class="form__input-effect has-content" type="text" id="address3">
                                            <label for="address3">Этаж</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="order__input-cell">
                                            <input class="form__input-effect has-content" type="text" id="address4">
                                            <label for="address4">Подъезд</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="order__input-cell">
                                            <input class="form__input-effect has-content" type="text" id="address5">
                                            <label for="address5">Домофон</label>
                                        </div>
                                    </div>
                                </div>
                                <a class="button button-gr button__store" href="javascript:void(0)">добавить адрес</a>
                            </div>
                        </div>
                    </div>

                    <div class="order__wrap order__show" @if(empty($address)) style="display: none" @endif>
                        <div class="order__delivery">
                            <div class="order__wrap-top">
                                <div class="order__wrap-title">Доставка</div>
                                <div class="order__wrap-list">
                                    <div class="order__wrap-list-item act">Доставка курьером</div>
                                    <div class="order__wrap-list-item">Сегодня</div>
                                    <div class="order__wrap-list-item">200 ₽</div>
                                </div>
                            </div>
                            <div class="order__payment-list fl">
                                <div class="order__payment-list-change-tx">
                                    {{ $address['street'] }}
                                </div>
                                <a class="order__payment-list-change button__show" href="javascript:void(0)">
                                    <svg>
                                        <use xlink:href="#pen"></use>
                                    </svg>
                                    Изменить
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="order__wrap order__update" style="display: none">
                        <div class="order__delivery">
                            <div class="order__wrap-top">
                                <div class="order__wrap-title">Доставка</div>
                            </div>
                            <div class="order__input">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="order__input-cell">
                                            <input class="form__input-effect has-content" type="text" id="updateAddress1"
                                                   value="{{ $address['street'] }}">
                                            <label for="address1">Адрес *</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="order__input-cell">
                                            <input class="form__input-effect has-content" type="text" id="updateAddress2"
                                                   value="{{ $address['apartment'] }}">
                                            <label for="address2">Квартира *</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="order__input-cell">
                                            <input class="form__input-effect has-content" type="text" id="updateAddress3"
                                                   value="{{ $address['floor'] }}">
                                            <label for="address3">Этаж</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="order__input-cell">
                                            <input class="form__input-effect has-content" type="text" id="updateAddress4"
                                                   value="{{ $address['entrance'] }}">
                                            <label for="address4">Подъезд</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="order__input-cell">
                                            <input class="form__input-effect has-content" type="text" id="updateAddress5"
                                                   value="{{ $address['intercom'] }}">
                                            <label for="address5">Домофон</label>
                                        </div>
                                    </div>
                                </div>
                                <a class="button button-gr button__update" href="javascript:void(0)">Сохранить изменения</a>
                            </div>
                        </div>
                    </div>

                    <div class="order__wrap">
                        <div class="order__payment">
                            <div class="order__wrap-top">
                                <div class="order__wrap-title">Оплата</div>
                                <div class="order__wrap-list">
                                    <div class="order__wrap-list-item">Выберите способ оплаты</div>
                                </div>
                            </div>
                            <div class="order__payment-list">
                                <div class="order__payment-list-item-in">
                                    <div class="order__payment-list-item">
                                        <input type="radio" id="payment1" name="payment" checked>
                                        <label for="payment1"><span class="tit">Онлайн оплата</span></label>
                                    </div>
                                </div>
                                <div class="order__payment-list-item-in">
                                    <div class="order__payment-list-item">
                                        <input type="radio" id="payment2" name="payment">
                                        <label for="payment2"><span class="tit">Наличными курьеру</span></label>
                                    </div>
                                </div>
                                <div class="order__payment-list-item-in">
                                    <div class="order__payment-list-item">
                                        <input type="radio" id="payment3" name="payment">
                                        <label for="payment3"><span class="tit">По QR коду клиенту</span></label>
                                    </div>
                                </div>
                            </div>
                            {{--<div class="order__point">
                                <div class="order__point-check">
                                    <input type="checkbox" id="check" name="check">
                                    <label for="check">Списать баллы</label>
                                </div>
                                <div class="order__range">
                                    <div class="order__range-item">
                                        <input class="polzunok-input-5-left" type="text" value="13" id="rng">
                                        <label for="rng">Баллы</label>
                                    </div>
                                    <div class="polzunok-5"></div>
                                </div>
                            </div>--}}
                        </div>
                    </div>
                    <div class="order__wrap">
                        <div class="order__lk">
                            <div class="order__wrap-top">
                                <div class="order__wrap-title">Личные данные</div>
                                <div class="order__wrap-list">
                                    <div class="order__wrap-list-item">Укажите данные получателя</div>
                                </div>
                            </div>
                            <div class="order__lk-inner">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="order__input-cell">
                                            <input class="form__input-effect" type="text" id="name"
                                                   value="{{$profile['name']}}">
                                            <label for="name">Имя *</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="order__input-cell">
                                            <input class="form__input-effect" type="text" id="name-f"
                                                   value="{{$profile['surname']}}">
                                            <label for="name-f">Фамилия *</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="order__input-cell">
                                            <input class="form__input-effect" type="text" id="tel"
                                                   value="{{$profile['phone']}}">
                                            <label for="tel">Телефон *</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="order__input-cell">
                                            <input class="form__input-effect" type="text" id="mail"
                                                   value="{{$profile['email']}}">
                                            <label for="mail">Электронная почта</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order__right">
                    <div class="order__list">
                        <div class="order__list-title">Ваш заказ</div>
                        <div class="order__list-table">
                            <div class="order__list-table-row">
                                <div class="order__list-table-item">Товары:</div>
                                <div class="order__list-table-item">{{ $order['totalCount'] }} шт</div>
                            </div>
                        </div>
                        <div class="order__list-promo">
                            <div class="cart__list-promo">
                                <input type="text">
                                <button class="cart__list-promo-btn"><img
                                        src="{{ asset('assets/images/svg/arrow3.svg')}}" alt=""></button>
                            </div>
                            <div class="cart__list-promo-done">Промокод применен</div>
                        </div>
                        <div class="order__list-table order__list-table-tw">
                            <div class="order__list-table-row">
                                <div class="order__list-table-item">Доставка:</div>
                                <div class="order__list-table-item">Курьером</div>
                            </div>
                            <div class="order__list-table-row">
                                <div class="order__list-table-item">Способ оплаты:</div>
                                <div class="order__list-table-item"><a href="#">Онлайн-оплата</a></div>
                            </div>
                        </div>
                        <div class="order__list-table">
                            <div class="order__list-table-row">
                                <div class="order__list-table-item">Товаров на:</div>
                                <div class="order__list-table-item">{{ $order['totalPrice'] }} ₽</div>
                            </div>
                            <div class="order__list-table-row">
                                <div class="order__list-table-item">Доставка:</div>
                                <div class="order__list-table-item">150 ₽</div>
                            </div>
                            {{--<div class="order__list-table-row">
                                <div class="order__list-table-item">Начислено баллов:</div>
                                <div class="order__list-table-item">15</div>
                            </div>--}}
                            <div class="order__list-table-row">
                                <div class="order__list-table-item">Экономия:</div>
                                <div class="order__list-table-item">{{ $order['totalEconomy'] }} ₽</div>
                            </div>
                        </div>
                        <div class="order__list-all prom">
                            <div class="order__list-all-item">Промокод:</div>
                            <div class="order__list-all-item">-120 ₽</div>
                        </div>
                        <div class="order__list-all">
                            <div class="order__list-all-item">Итого:</div>
                            <div class="order__list-all-item">238 ₽</div>
                        </div>
                        <a class="button button-secondary w-100" href="javascript:void(0)">оформить заказ</a>
                        <div class="order__list-descr">Нажимая кнопку «Оплатить заказ», я даю согласие на обработку
                            своих персональных данных и принимаю условия Пользовательского соглашения
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--    if заказ оформлен--}}
    {{--<div class="tx">
        <div class="container">
            <div class="tx__inner">
                <div class="tx__img"><img src="{{ asset('assets/images/svg/img-b1.svg') }}" alt=""></div>
                <div class="tx__text">
                    <div class="tx__title">Ваш заказ успешно создан!</div>
                    <p>Заказ №75 от 11.06.2020 15:15 создан.<br>Курьер свяжется с вами, как только привезет ваш заказ.</p>
                    <a class="button button-secondary" href="{{ route('home') }}">продолжить покупки</a>
                </div>
            </div>
        </div>
    </div>--}}
@endsection
