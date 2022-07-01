@extends('layouts.layout')

@section('content')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            new CustomSelect('#select-1', {
                name: 'day',
                targetValue: 'today',
                options: [
                    ['today', 'Сегодня'],
                    ['27 may', 'Вт, 27 мая'],
                    ['28 may', 'Ср, 28 мая'],
                    ['29 may', 'Чт, 29 мая']
                ],
                onSelected(select, option) {
                    // выбранное значение
                    console.log(`Выбранное значение: ${select.value}`);
                    // индекс выбранной опции
                    console.log(`Индекс выбранной опции: ${select.selectedIndex}`);
                    // выбранный текст опции
                    const text = option ? option.textContent : '';
                    console.log(`Выбранный текст опции: ${text}`);
                },
            });
            document.querySelector('.select').addEventListener('select.change', (e) => {
                const btn = e.target.querySelector('.select__toggle');
                // выбранное значение
                console.log(`Выбранное значение: ${btn.value}`);
                // индекс выбранной опции
                console.log(`Индекс выбранной опции: ${btn.dataset.index}`);
                // выбранный текст опции
                const selected = e.target.querySelector('.select__option_selected');
                const text = selected ? selected.textContent : '';
                console.log(`Выбранный текст опции: ${text}`);
            });
        })
        document.addEventListener('DOMContentLoaded', () => {
            new CustomSelect('#select-2', {
                name: 'day',
                targetValue: '10',
                options: [
                    ['10', '10:00-11:00'],
                    ['11', '11:00-12:00'],
                    ['12', '12:00-13:00'],
                    ['13', '13:00-14:00'],
                    ['14', '14:00-15:00']
                ],
                onSelected(select, option) {
                    // выбранное значение
                    console.log(`Выбранное значение: ${select.value}`);
                    // индекс выбранной опции
                    console.log(`Индекс выбранной опции: ${select.selectedIndex}`);
                    // выбранный текст опции
                    const text = option ? option.textContent : '';
                    console.log(`Выбранный текст опции: ${text}`);
                },
            });
            document.querySelector('.select').addEventListener('select.change', (e) => {
                const btn = e.target.querySelector('.select__toggle');
                // выбранное значение
                console.log(`Выбранное значение: ${btn.value}`);
                // индекс выбранной опции
                console.log(`Индекс выбранной опции: ${btn.dataset.index}`);
                // выбранный текст опции
                const selected = e.target.querySelector('.select__option_selected');
                const text = selected ? selected.textContent : '';
                console.log(`Выбранный текст опции: ${text}`);
            });
        })
    </script>
    <div class="breadcrumb-block">
        <div class="container">
            {{ Diglactic\Breadcrumbs\Breadcrumbs::render('checkout') }}
        </div>
    </div>
    @if($GLOBALS['basket'])
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
                                                @if(isset($product['economy']))
                                                    <div class="cart__list-numb-tx">Экономия {{$product['economy']}} ₽</div>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
<!--                        <div class="order__wrap order__create" @if(isset($address['street'])) style="display: none" @endif>
                            <div class="order__delivery">
                                <div class="order__wrap-top">
                                    <div class="order__wrap-title">Доставка</div>
                                </div>
                                <div class="order__input">
                                    <a class="button button-gr button__create" href="javascript:void(0)">добавить адрес</a>
                                </div>
                            </div>
                        </div>-->
                        <div class="order__wrap order__show" {{--@if(!isset($address['street'])) style="display: none" @endif--}}>
                            <div class="order__delivery">
                                <div class="order__wrap-top">
                                    <div class="order__wrap-title">Доставка</div>
                                    <div class="order__wrap-list">
                                        <div class="order__wrap-list-item act">Доставка курьером</div>
                                        <div class="order__wrap-list-item">Сегодня</div>
                                        <div class="order__wrap-list-item">{{$order['deliveryPrice']}} ₽</div>
                                    </div>
                                </div>
                                <div class="order__payment-list-item">
                                    <input type="radio" id="address-1" name="address" checked="">
                                    <label for="address-1">
                                        <span class="tit">Краснодар, улица им. Котлярова Н.С., д.24</span>
                                    </label>
                                </div>
                                <div class="order__payment-list-item">
                                    <input type="radio" id="address-2" name="address">
                                    <label for="address-2">
                                        <span class="tit">г. Краснодар (Краснодарский край), улица имени Сергея Есенина, д. 113</span>
                                    </label>
                                </div>
                                <div class="lk__setting__address--add order__payment--btn">
                                    <button type="button">добавить адрес</button>
                                </div>
                                <div class="order__wrap-title order__delivery__time--title">Время</div>
                                <div class="order__delivery__time">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="order__payment-list-item" role="presentation">
                                            <a class="delivery__time--js" id="pills-time-1-tab" data-toggle="pill" href="#pills-time-1" role="tab" aria-controls="pills-time-1" aria-selected="true">
                                                <input type="radio" id="delivery-time-1" name="delivery-time" checked="">
                                                <label for="delivery-time-1">
                                                    <span class="">Как можно быстрее</span>
                                                </label>
                                            </a>
                                        </li>
                                        <li class="order__payment-list-item" role="presentation">
                                            <a class="delivery__time--js" id="pills-time-2-tab" data-toggle="pill" href="#pills-time-2" role="tab" aria-controls="pills-time-2" aria-selected="false">
                                                <input type="radio" id="delivery-time-2" name="delivery-time">
                                                <label for="delivery-time-2">
                                                    <span class="">К определенному времени</span>
                                                </label>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-time-1" role="tabpanel" aria-labelledby="pills-time-1-tab"></div>
                                    <div class="tab-pane fade" id="pills-time-2" role="tabpanel" aria-labelledby="pills-time-2-tab">
                                        <div class="delivery__date--wrapper">
                                            <div class="delivery__date">
                                                <div id="select-1"></div>
                                            </div>
                                            <div class="delivery__date">
                                                <div id="select-2"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<!--                                <div class="order__payment-list fl">
                                    <div class="order__payment-list-change-tx">
                                        @if(isset($address['street'])){{ $address['street'] }}@endif
                                    </div>
                                    <a class="order__payment-list-change button__show" href="javascript:void(0)">
                                        <svg>
                                            <use xlink:href="#pen"></use>
                                        </svg>
                                        Изменить
                                    </a>
                                </div>-->
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
                                                <input
                                                    class="form__input-effect has-content"
                                                    type="text" id="updateAddress1"
                                                    value="@if(isset($address['street'])){{ $address['street'] }}@endif">
                                                <label for="address1">Адрес *</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="order__input-cell">
                                                <input
                                                    class="form__input-effect has-content"
                                                    type="text" id="updateAddress2"
                                                    value="@if(isset($address['apartment'])){{ $address['apartment'] }}@endif">
                                                <label for="address2">Квартира *</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="order__input-cell">
                                                <input
                                                    class="form__input-effect has-content"
                                                    type="text" id="updateAddress3"
                                                    value="@if(isset($address['floor'])){{ $address['floor'] }}@endif">
                                                <label for="address3">Этаж</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="order__input-cell">
                                                <input
                                                    class="form__input-effect has-content"
                                                    type="text" id="updateAddress4"
                                                    value="@if(isset($address['entrance'])){{ $address['entrance'] }}@endif">
                                                <label for="address4">Подъезд</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="order__input-cell">
                                                <input
                                                    class="form__input-effect has-content"
                                                    type="text" id="updateAddress5"
                                                    value="@if(isset($address['intercom'])){{ $address['intercom'] }}@endif">
                                                <label for="address5">Домофон</label>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="button button-gr button__update" href="javascript:void(0)">Сохранить
                                        изменения</a>
                                </div>
                            </div>
                        </div>

                        <div class="order__wrap payment__variables--js">
                            <div class="order__payment">
                                <div class="order__wrap-top">
                                    <div class="order__wrap-title">Оплата</div>
                                    <div class="order__wrap-list">
                                        <div class="order__wrap-list-item">Выберите способ оплаты</div>
                                    </div>
                                </div>
                                <div class="order__payment-list nav" id="payment">
                                    <a class="order__payment-list-item-in" data-toggle="tab" href="#payment-1">
                                        <div class="order__payment-list-item payment--js">
                                            <input type="radio" id="payment1" name="payment" checked>
                                            <label for="payment1"><span class="tit">Онлайн оплата</span></label>
                                        </div>
                                    </a>
                                    <a class="order__payment-list-item-in collapsed" data-toggle="tab" href="#payment-2">
                                        <div class="order__payment-list-item payment--js">
                                            <input type="radio" id="payment2" name="payment">
                                            <label for="payment2"><span class="tit">Наличными курьеру</span></label>
                                        </div>
                                    </a>
                                    <a class="order__payment-list-item-in collapsed" for="payment3" data-toggle="tab" href="#payment-3">
                                        <div class="order__payment-list-item payment--js">
                                            <input type="radio" id="payment3" name="payment">
                                            <label for="payment3"><span class="tit">По QR коду клиенту</span></label>
                                        </div>
                                    </a>
                                </div>

                                <div class="tab-content payment__tab--js" id="myTabContent">
                                    <div class="tab-pane fade show active" id="payment-1"></div>
                                    <div class="tab-pane fade" id="payment-2">
                                        <div class="payment__cash">
                                            <p class="payment__cash--title">Нужна сдача с</p>
                                            <input type="number" class="payment__cash--input">
                                            <div class="payment__cash--btn--wrapper">
                                                <button class="payment__cash--btn payment__cash--btn--active">Без сдачи</button>
                                                <button class="payment__cash--btn">2000</button>
                                                <button class="payment__cash--btn">5000</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="payment-3">
                                        <div class="payment__qr">
                                            <p class="payment__qr--text">Курьер приедет с QR кодом. Вам нужно будет открыть банковское приложение, отсканировать QR код и подтвердить оплату</p>
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
                                                <input
                                                    class="form__input-effect @if(isset($profile['name'])) has-content @endif"
                                                    type="text" id="name"
                                                    value="@if(isset($profile['name'])){{$profile['name']}}@endif">
                                                <label for="name">Имя *</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="order__input-cell">
                                                <input
                                                    class="form__input-effect @if(isset($profile['surname'])) has-content @endif"
                                                    type="text" id="name-f"
                                                    value="@if(isset($profile['surname'])){{$profile['surname']}}@endif">
                                                <label for="name-f">Фамилия *</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="order__input-cell">
                                                <input
                                                    class="form__input-effect @if(isset($profile['phone'])) has-content @endif"
                                                    type="text" id="tel"
                                                    value="@if(isset($profile['phone'])){{$profile['phone']}}@endif">
                                                <label for="tel">Телефон *</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="order__input-cell">
                                                <input
                                                    class="form__input-effect @if(isset($profile['email'])) has-content @endif"
                                                    type="text" id="mail"
                                                    value="@if(isset($profile['email'])){{$profile['email']}}@endif">
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
                            {{--<div class="order__list-promo">
                                <div class="cart__list-promo">
                                    <input type="text">
                                    <button class="cart__list-promo-btn"><img
                                            src="{{ asset('assets/images/svg/arrow3.svg')}}" alt=""></button>
                                </div>
                                <div class="cart__list-promo-done">Промокод применен</div>
                            </div>--}}
                            <div class="order__list-table order__list-table-tw">
                                <div class="order__list-table-row">
                                    <div class="order__list-table-item">Доставка:</div>
                                    <div class="order__list-table-item">Курьером</div>
                                </div>
                                <div class="order__list-table-row">
                                    <div class="order__list-table-item">Способ оплаты:</div>
                                    <div class="order__list-table-item">
                                        <a id="paymentResult" href="javascript:void(0)">Онлайн оплата</a>
                                    </div>
                                </div>
                            </div>
                            <div class="order__list-table">
                                <div class="order__list-table-row">
                                    <div class="order__list-table-item">Товаров на:</div>
                                    <div class="order__list-table-item">{{ $order['totalProductsPrice'] }} ₽</div>
                                </div>
                                <div class="order__list-table-row">
                                    <div class="order__list-table-item">Доставка:</div>
                                    <div class="order__list-table-item">{{$order['deliveryPrice']}} ₽</div>
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
                            {{--<div class="order__list-all prom">
                                <div class="order__list-all-item">Промокод:</div>
                                <div class="order__list-all-item">-120 ₽</div>
                            </div>--}}
                            <div class="order__list-all">
                                <div class="order__list-all-item">Итого:</div>
                                <div class="order__list-all-item">{{$order['totalPrice']}} ₽</div>
                            </div>
                            <a class="button button-secondary w-100 buy" href="javascript:void(0)">оформить заказ</a>
                            <div class="order__list-descr">Нажимая кнопку «Оплатить заказ», я даю согласие на обработку
                                своих персональных данных и принимаю условия Пользовательского соглашения
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elseif(isset($_GET['numberId']) && isset($_GET['date']))
        <div class="tx">
            <div class="container">
                <div class="tx__inner">
                    <div class="tx__img"><img src="{{ asset('assets/images/svg/img-b1.svg') }}" alt=""></div>
                    <div class="tx__text">
                        <div class="tx__title">Ваш заказ успешно создан!</div>
                        <p>Заказ №{{ $_GET['numberId'] }} от {{ date('d.m.Y', ($_GET['date']/1000)) }} создан.<br>Курьер свяжется с вами, как только привезет ваш заказ.
                        </p>
                        <a class="button button-secondary" href="{{ route('home') }}">продолжить покупки</a>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="tx">
            <div class="container">
                <div class="tx__inner">
                    <div class="tx__img"><img src="{{ asset('assets/images/svg/img5.svg') }}" alt=""></div>
                    <div class="tx__text">
                        <div class="tx__title big">404</div>
                        <p>Упс! Страница, которую вы искали не найдена.<br>
                            Возможно вы ввели неправильный адрес или она была удалена.</p>
                        <a class="button button-secondary" href="{{ route('home') }}">вернуться на главную</a>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
