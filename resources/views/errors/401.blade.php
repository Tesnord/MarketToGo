@extends('layouts.layout')

@section('content')

    <div class="tx">
        <div class="container">
            <div class="tx__inner">
                <div class="tx__img"><img src="{{ asset('assets/images/svg/img5.svg') }}" alt=""></div>
                <div class="tx__text">
                    <div class="tx__title big">401</div>
                    <p>Упс! Похоже, что Вы не авторизованы.<br>
                        Зарегистрируйтесь или Авторизуйтесь.</p>
                    <a class="button button-secondary" href="{{ route('login.create') }}">Авторизация</a>
                </div>
            </div>
        </div>
    </div>
<!--    <div class="catalog-min catalog-min-tw">
        <div class="container">
            <h3>Возможно вас заинтересует</h3>
            <div class="row">
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog__item catalog__item-bt">
                        <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img17.jpg') }}" alt=""></a>
                            <div class="catalog__item-fav"><svg><use xlink:href="#like"></use></svg></div>
                            <div class="catalog__item-label catalog__item-label-hit"><span>хит</span></div>
                        </div>
                        <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Подарочный набор «Дари тепло»</a>
                            <div class="catalog__item-numb">12 товаров</div>
                            <div class="catalog__item-bottom">
                                <div class="catalog__item-info">
                                    <div class="catalog__item-price">
                                        <div class="catalog__item-price-old">50 руб</div>
                                        <div class="catalog__item-price-now">2200 ₽</div>
                                    </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                                </div><a class="catalog__item-offer" href="#">5 предложений</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog__item catalog__item-bt">
                        <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img18.jpg') }}" alt=""></a>
                            <div class="catalog__item-fav"><svg><use xlink:href="#like"></use></svg></div>
                        </div>
                        <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Подарочный набор «Порция счастья»</a>
                            <div class="catalog__item-numb">5 товаров</div>
                            <div class="catalog__item-bottom">
                                <div class="catalog__item-info">
                                    <div class="catalog__item-price">
                                        <div class="catalog__item-price-now">1305 ₽</div>
                                    </div>
                                    <div class="catalog__item-amount">
                                        <input type="text" value="1"><span class="up"><img src="{{ asset('assets/images/svg/plus.svg') }}" alt=""></span><span class="down"><img src="{{ asset('assets/images/svg/minus.svg') }}" alt=""></span>
                                    </div>
                                </div><a class="catalog__item-offer" href="#">5 предложений</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog__item catalog__item-bt">
                        <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img19.jpg') }}" alt=""></a>
                            <div class="catalog__item-fav"><svg><use xlink:href="#like"></use></svg></div>
                        </div>
                        <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Подарочный набор «Любимым родителям»</a>
                            <div class="catalog__item-numb">12 товаров</div>
                            <div class="catalog__item-bottom">
                                <div class="catalog__item-info">
                                    <div class="catalog__item-price">
                                        <div class="catalog__item-price-old">50 ₽</div>
                                        <div class="catalog__item-price-now">1500 ₽</div>
                                    </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                                </div><a class="catalog__item-offer" href="#">5 предложений</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog__item catalog__item-bt">
                        <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img20.jpg') }}" alt=""></a>
                            <div class="catalog__item-fav"><svg><use xlink:href="#like"></use></svg></div>
                        </div>
                        <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Подарочный набор «Чудо»</a>
                            <div class="catalog__item-numb">12 товаров</div>
                            <div class="catalog__item-bottom">
                                <div class="catalog__item-info">
                                    <div class="catalog__item-price">
                                        <div class="catalog__item-price-old">50 ₽</div>
                                        <div class="catalog__item-price-now">1900 ₽</div>
                                    </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                                </div><a class="catalog__item-offer" href="#">5 предложений</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog__item catalog__item-bt">
                        <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img21.jpg') }}" alt=""></a>
                            <div class="catalog__item-fav"><svg><use xlink:href="#like"></use></svg></div>
                        </div>
                        <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Подарочный набор «Дорогому дедушке»</a>
                            <div class="catalog__item-numb">12 товаров</div>
                            <div class="catalog__item-bottom">
                                <div class="catalog__item-info">
                                    <div class="catalog__item-price">
                                        <div class="catalog__item-price-old">50 ₽</div>
                                        <div class="catalog__item-price-now">2100 ₽</div>
                                    </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                                </div><a class="catalog__item-offer" href="#">5 предложений</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

@endsection
