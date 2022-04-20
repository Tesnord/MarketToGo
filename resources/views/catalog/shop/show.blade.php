@extends('layouts.layout')

@section('content')
<div class="catalog-brand-title" style="background-image: url('{{ asset('assets/images/bg-top.jpg') }}')">
    <div class="container">
        <div class="catalog-brand-title__inner">
            <div class="breadcrumb-block">
                {{ Diglactic\Breadcrumbs\Breadcrumbs::render('shop.show', ['slug_shop' => $slug]) }}
            </div>
        </div>
        <div class="catalog-brand-title__holder">
            <div class="catalog-brand-title__main">
                <div class="catalog-brand-title__logo"><img src="{{ asset($shop['image']) }}" alt=""></div>
                <h1>{{$shop['title']}}</h1>
                <div class="title-main__numb">{{ $shop['count'] }} товаров</div>
            </div>
            <div class="catalog-brand-title__in"><a class="button button-bord" href="#">Поделиться</a>
                <div class="catalog-brand-title__in-list">
                    <a class="catalog-brand-title__in-list-item" href="#">
                        <img src="{{ asset('assets/images/svg/ic-tt1.svg') }}" alt="">
                        <span>Скопировать ссылку</span>
                    </a>
                    <a class="catalog-brand-title__in-list-item" href="#">
                        <img src="{{ asset('assets/images/svg/ic-tt2.svg') }}" alt="">
                        <span>Вконтакте</span>
                    </a>
                    <a class="catalog-brand-title__in-list-item" href="#">
                        <img src="{{ asset('assets/images/svg/ic-tt3.svg') }}" alt="">
                        <span>Facebook</span>
                    </a>
                    <a class="catalog-brand-title__in-list-item" href="#">
                        <img src="{{ asset('assets/images/svg/ic-tt4.svg') }}" alt="">
                        <span>Одноклассники</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="actions-slider">
    <div class="container">
        <div class="actions-slider__inner">
            <div class="title-main-tw">
                <h2>Акции магазина</h2>
                <a class="button button-all" href="{{ route('promotions.index') }}">смотреть все</a>
            </div>
            <div class="actions-slider__sldr js-actions-slider">
                @foreach($promotions as $promotion)
                    <div class="actions-slider__item">
                        <div class="actions__item">
                            <a class="actions__item-img" href="{{ route('promotions.show', ['slug_promotion' => $promotion['slug']]) }}" style="background-image: url('{{ asset($promotion['image']) }}')"></a>
                            <div class="actions__item-tx">
                                <div class="actions__item-data">{{--{{ $promotion['date'] }}--}}</div>
                                <a class="actions__item-title" href="{{ route('promotions.show', ['slug_promotion' => $promotion['slug']]) }}">{{ $promotion['title'] }}</a>
                                <div class="actions__item-firm">{{ $promotion['shop'] }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="catalog">
    <div class="container">
        <div class="catalog__inner">
            @include('layouts.catalog.filter')
            @include('layouts.catalog.product_list')
        </div>
    </div>
</div>
@endsection
