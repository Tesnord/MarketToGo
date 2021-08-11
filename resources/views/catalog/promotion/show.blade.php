@extends('layouts.layout')

@section('content')

    <div class="breadcrumb-block">
        <div class="container">
{{--            {{ Diglactic\Breadcrumbs\Breadcrumbs::render('promotions.show') }}--}}
        </div>
    </div>
    <div class="title-main">
        <div class="container">
            <div class="title-main__inner">
                <h1>Скидки до 25%</h1>
            </div>
        </div>
    </div>
    <div class="actions-item">
        <div class="container">
            <div class="actions-item__inner">
                <div class="actions-item__left">
                    <div class="actions-item__img"><img class="img-fluid" src="{{ asset('assets/images/act-img.jpg') }}" alt=""></div>
                    <div class="actions-item__info">
                        <div class="actions-item__info-item">
                            <div class="actions-item__info-title">дата публикации</div>
                            <div class="actions-item__info-tx">18 января</div>
                        </div>
                        <div class="actions-item__info-item">
                            <div class="actions-item__info-title">срок действия акции</div>
                            <div class="actions-item__info-tx">18 января – 25 января</div>
                        </div>
                    </div>
                </div>
                <div class="actions-item__right">
                    <div class="actions-item__top">
                        <div class="actions-item__logo"><img class="img-fluid" src="{{ asset('assets/images/logo-i.png') }}" alt=""></div>
                        <div class="actions-item__title">Freshop</div>
                    </div>
                    <p>Хорошее и натуральное спелое манго, которое будет сочиться и будет обладать неповторимым вкусом и ароматом, найти достаточно сложно! Если приобрести манго в любом сетевом магазине, то Вы сами в этом убедитесь. Их манго жесткие, незрелые, блестят (что явно указывает на их внешнюю обработку, чтобы они дольше хранились),  а волокнистая текстура мякоти... постоянно приходится доставать из зубов волокна после это чувство?!</p>
                    <p>Наши манго из Таиланда лишены этих неудобств, мы их сами встречаем в аэропорту после фито-санитарного контроля в Москве, сами везем на нашу розничную точку и на доставки! Мы уверены в том, что они ничем не обработаны, потому что видим естественном цикле.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="title-main tw">
        <div class="container">
            <div class="title-main__inner">
                <h1>Товары</h1>
                <div class="title-main__numb">230 товаров</div>
            </div>
        </div>
    </div>
    <div class="catalog">
        <div class="container">
            <div class="catalog__inner">
                @include('layouts.catalog.filter')
{{--            @include('layouts.catalog.product_list')--}}
            </div>
        </div>
    </div>

@endsection
