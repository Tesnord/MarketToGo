@extends('layouts.layout')

@section('content')

    <div class="breadcrumb-block">
        <div class="container">
            {{ Diglactic\Breadcrumbs\Breadcrumbs::render('score-info') }}
        </div>
    </div>
    <div class="title-main">
        <div class="container">
            <div class="title-main__inner">
                <h1>Бонусная программа</h1>
            </div>
        </div>
    </div>
    <div class="score">
        <div class="container">
            <div class="score__inner">
                <div class="score__inner--left">
                    <p class="score__privilege--title">Ваши привилегии</p>
                    <div class="score__privilege">
                        <div class="score__privilege__card">
                            <div class="score__privilege__card--img score__privilege--1">
                                <img src="{{asset('/assets/images/svg/score-info-1.svg')}}" alt="1%">
                            </div>
                            <div class="score__privilege__card--text">Начисляем 1% <span></span>
                                <div class="score__privilege__card--request">
                                    <h3>Начисляем 1%</h3>
                                    <p>Гарантированное начисление +1 балл за каждые 20 рублей в чеке до 555 рублей с учетом скидок</p>
                                    <p>10 баллов = 1 руб</p>
                                </div>
                            </div>
                        </div>
                        <div class="score__privilege__card">
                            <div class="score__privilege__card--img score__privilege--10">
                                <img src="{{asset('/assets/images/svg/score-info-10.svg')}}" alt="10%">
                            </div>
                            <div class="score__privilege__card--text">Начисляем 10% <span></span>
                                <div class="score__privilege__card--request">
                                    <h3>Начисляем 10%</h3>
                                    <p>Гарантированное начисление +1 балл за каждые 20 рублей в чеке до 555 рублей с учетом скидок</p>
                                    <p>10 баллов = 1 руб</p>
                                </div>
                            </div>
                        </div>
                        <div class="score__privilege__card">
                            <div class="score__privilege__card--img score__privilege--20">
                                <img src="{{asset('/assets/images/svg/score-info-20.svg')}}" alt="20%">
                            </div>
                            <div class="score__privilege__card--text">Начисляем 20% <span></span>
                                <div class="score__privilege__card--request">
                                    <h3>Начисляем 20%</h3>
                                    <p>Гарантированное начисление +1 балл за каждые 20 рублей в чеке до 555 рублей с учетом скидок</p>
                                    <p>10 баллов = 1 руб</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="score__description">
                        <h2 class="score__description--title">Что это?</h2>
                        <p class="score__description--text">Это баллы, которые вы можете оплатить часть заказа на сайте или в приложении</p>
                        <h2 class="score__description--title">Как вы их накопили</h2>
                        <ul class="score__description__list">
                            <li class="score__description__list--item">
                                <p>1000 баллов получили при регистрации</p>
                            </li>
                            <li class="score__description__list--item">
                                <p>Далее они копятся после каждого заказа. Например, за 100 рублей вы получаете 10 баллов</p>
                            </li>
                        </ul>
                        <h2 class="score__description--title">Как вы их накопили</h2>
                        <ul class="score__description__list">
                            <li class="score__description__list--item">
                                <p>Нажмите внизу на раздел с Акциями</p>
                            </li>
                            <li class="score__description__list--item">
                            <p>1000 баллов получили при регистрации</p>
                            </li>
                            <li class="score__description__list--item">
                                <p>Далее они копятся после каждого заказа. Например, за 100 рублей вы получаете 10 баллов</p>
                            </li>
                            <li class="score__description__list--item">
                                <p>Нажмите внизу на раздел с Акциями</p>
                            </li>
                            <li class="score__description__list--item">
                                <p>Далее они копятся после каждого заказа.</p>
                            </li>
                            <li class="score__description__list--item">
                                <p>Например, за 100 рублей вы получаете 10 баллов</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="score__inner--right">
                    <div class="score__wrapper">
                        <h3>Оплатите баллами до 99%</h3>
                        <p>Стоимости своего заказа на сайте или в приложении</p>
                        <img src="{{asset('/assets/images/svg/score-inner.svg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
