@extends('layouts.layout')

@section('content')

    <div class="breadcrumb-block">
        <div class="container">
            {{ Diglactic\Breadcrumbs\Breadcrumbs::render('personal.subscribe') }}
        </div>
    </div>
    <div class="title-main">
        <div class="container">
            <div class="title-main__inner">
                <h1>Подписки</h1>
            </div>
        </div>
    </div>
    <div class="lk">
        <div class="container">
            <div class="lk__inner">
                <div class="lk__left">
                    <div class="catalog-subscription__list">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                <div class="catalog-subscription__item">
                                    <a class="catalog-subscription__item-img" href="#">
                                        <img src="{{ asset('assets/images/subscription-img1.jpg') }}" alt="">
                                    </a>
                                    <a class="catalog-subscription__item-title" href="#">FRESH</a>
                                    <a class="catalog-subscription__item-offer" href="#">1 000 товаров</a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                <div class="catalog-subscription__item">
                                    <a class="catalog-subscription__item-img" href="#">
                                        <img src="{{ asset('assets/images/subscription-img2.jpg') }}" alt="">
                                    </a>
                                    <a class="catalog-subscription__item-title" href="#">NON-FOOD</a>
                                    <a class="catalog-subscription__item-offer" href="#">230 товаров</a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                <div class="catalog-subscription__item">
                                    <a class="catalog-subscription__item-img" href="#">
                                        <img src="{{ asset('assets/images/subscription-img3.jpg') }}" alt="">
                                    </a>
                                    <a class="catalog-subscription__item-title" href="#">Кондитерские изделия</a>
                                    <a class="catalog-subscription__item-offer" href="#">1 000 товаров</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lk__menu">
                    @include('layouts.user.nav')
                </div>
            </div>
        </div>
    </div>

@endsection
