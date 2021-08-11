@extends('layouts.layout')

@section('content')
    <div class="pay">
        <div class="container">
            <div class="breadcrumb-block">
                {{ Diglactic\Breadcrumbs\Breadcrumbs::render('delivery') }}
            </div>
            <div class="title-main">
                <div class="title-main__inner">
                    <h1>Доставка и оплата</h1>
                </div>
            </div>
            <div class="pay-list">
                <div class="pay-list__inner">
                    <div class="pay-list__row">
                        <div class="pay-list__icon"><img src="{{ asset('assets/images/svg/pay-icon1.svg') }}" alt=""></div>
                        <div class="pay-list__title">Банковской картой на сайте</div>
                        <div class="pay-list__tx">Банковской картой при оформлении заказа в интернет-магазине. При добавлении карты, чтобы проверить корректность введенных данных, 1 рубль холдируется (замораживается) у вас на счету, а затем автоматически возвращается.</div>
                    </div>
                    <div class="pay-list__row">
                        <div class="pay-list__icon"><img src="{{ asset('assets/images/svg/pay-icon2.svg') }}" alt=""></div>
                        <div class="pay-list__title">Курьеру наличными</div>
                        <div class="pay-list__tx">Оплата товаров наличными при получении. Оплата принимается в российских рублях строго в соответствии с ценой, указанной в кассовом и товарном чеках.</div>
                    </div>
                    <div class="pay-list__row">
                        <div class="pay-list__icon"><img src="{{ asset('assets/images/svg/pay-icon3.svg') }}" alt=""></div>
                        <div class="pay-list__title">Курьеру картой</div>
                        <div class="pay-list__tx">Оплата курьеру картой с помощью QR- кода на накладной или по ссылке.</div>
                    </div>
                </div>
            </div>
            <div class="pay-descrip">
                <div class="row align-items-flex-end">
                    <div class="col-xl-8 col-lg-8 col-md-12">
                        <h2>Почему цена может отличаться?</h2>
                        <p>Фактическая стоимость заказа в онлайн-магазине может отличаться от предварительной в случае:</p>
                        <div class="row">
                            <div class="col-xl-6 col-lg-12 col-md-12">
                                <div class="pay-descrip__item">
                                    <div class="pay-descrip__item-title">Присутствия в заказе весовых товаров</div>
                                    <div class="pay-descrip__item-tx">На сайте указана типичная цена товаров, продаваемых на вес, которая может быть меньше или больше фактической</div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12">
                                <div class="pay-descrip__item">
                                    <div class="pay-descrip__item-title">Замена или отсутствие</div>
                                    <div class="pay-descrip__item-tx">В случае замены или отсутствия некоторых позиций товаров</div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="pay-descrip__item">
                                    <div class="pay-descrip__item-all">При приеме заказа, пожалуйста, проверьте  его комплектность по накладным документам.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="pay-descrip__img"><img src="{{ asset('assets/images/svg/pay-img.svg') }}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
