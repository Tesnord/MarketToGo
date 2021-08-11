@extends('layouts.layout')

@section('content')

    <div class="breadcrumb-block">
    <div class="container">
        {{ Diglactic\Breadcrumbs\Breadcrumbs::render('subscribe.index') }}
    </div>
</div>
<div class="title-main">
    <div class="container">
        <div class="title-main__inner">
            <h1>Товары по подписке</h1>
        </div>
    </div>
</div>
<div class="subscription-list">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="subscription-list__item">
                    <div class="subscription-list__item-img"><img src="{{ asset('assets/images/svg/list-i1.svg') }}" alt=""></div>
                    <div class="subscription-list__item-tx">Оформляйте и оплачивайте<br>подписку на любимые категории</div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="subscription-list__item">
                    <div class="subscription-list__item-img"><img src="{{ asset('assets/images/svg/list-i2.svg') }}" alt=""></div>
                    <div class="subscription-list__item-tx">Добавляйте товары выбранной<br>категории к заказу</div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="subscription-list__item">
                    <div class="subscription-list__item-img"><img src="{{ asset('assets/images/svg/icon-catalog1.svg') }}" alt=""></div>
                    <div class="subscription-list__item-tx">Получайте товары по более<br>привлекательной цене</div>
                </div>
            </div>
        </div>
    </div>
</div>
// if
<div class="catalog-min">
    <div class="container">
        <h3>Ваши подписки (2)</h3>
        <div class="catalog-min__top">
            <div class="catalog-min__top-title"><img src="{{ asset('assets/images/svg/icon-catalog1.svg') }}" alt=''> Овощи</div><a class="button button-all" href="#"><span>смотреть</span> +75 еще</a>
        </div>
        <div class="row">
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item catalog__item-bt">
                    <div class="catalog__item-top">
                        <a class="catalog__item-img" href="#">
                            <img src="{{ asset('assets/images/catalog-img2.jpg') }}" alt="">
                        </a>
                        <div class="catalog__item-fav">
                            <svg><use xlink:href="#like"></use></svg>
                        </div>
                        <div class="catalog__item-label catalog__item-label-hit">
                            <span>хит</span>
                        </div>
                    </div>
                    <div class="catalog__item-tx">
                        <a class="catalog__item-title" href="#">Клубника отборная ~ 250 г</a>
                        <div class="catalog__item-numb">1 шт (125 г)</div>
                        <div class="catalog__item-bottom">
                            <div class="catalog__item-info">
                                <div class="catalog__item-price">
                                    <div class="catalog__item-price-old">50 руб</div>
                                    <div class="catalog__item-price-now">395 ₽</div>
                                </div>
                                <a class="catalog__item-buy" href="#">
                                    купить <img src="{{ asset('assets/images/svg/cart.svg') }}" alt="">
                                </a>
                            </div>
                            <a class="catalog__item-offer" href="#">
                                5 предложений
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item catalog__item-bt">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img3.jpg') }}" alt=""></a>
                        <div class="catalog__item-fav"><svg><use xlink:href="#like"></use></svg></div>
                        <div class="catalog__item-label catalog__item-label-new"><span>NEW</span></div>
                    </div>
                    <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Мандарины Абхазские ~ 500 гр.</a>
                        <div class="catalog__item-numb">0.5 кг</div>
                        <div class="catalog__item-bottom">
                            <div class="catalog__item-info">
                                <div class="catalog__item-price">
                                    <div class="catalog__item-price-now">135 ₽</div>
                                </div>
                                <div class="catalog__item-amount">
                                    <input type="text" value="1"><span class="up"><img src="{{ asset('assets/images/svg/plus.svg') }}" alt=""></span><span class="down"><img src="{{ asset('assets/images/svg/minus.svg') }}" alt=""></span>
                                </div>
                            </div><a class="catalog__item-offer" href="#">уникальный товар</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item catalog__item-bt catalog__item-favorites">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img4.jpg') }}" alt=""></a>
                        <div class="catalog__item-fav"><svg><use xlink:href="#like"></use></svg></div>
                        <div class="catalog__item-label catalog__item-label-sale"><span>30%</span></div>
                    </div>
                    <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Манго Кео Вьетнам ~ 350 г</a>
                        <div class="catalog__item-numb">1 шт (125 г)</div>
                        <div class="catalog__item-bottom">
                            <div class="catalog__item-info">
                                <div class="catalog__item-price">
                                    <div class="catalog__item-price-old">50 ₽</div>
                                    <div class="catalog__item-price-now">45 ₽</div>
                                </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                            </div><a class="catalog__item-offer" href="#">1 предложение</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item catalog__item-bt">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img5.jpg') }}" alt=""></a>
                        <div class="catalog__item-fav"><svg><use xlink:href="#like"></use></svg></div>
                        <div class="catalog__item-label catalog__item-label-sale"><span>30%</span></div>
                    </div>
                    <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Помидоры Узбекские сладкие ~ 500 г</a>
                        <div class="catalog__item-numb">1 шт (125 г)</div>
                        <div class="catalog__item-bottom">
                            <div class="catalog__item-info">
                                <div class="catalog__item-price">
                                    <div class="catalog__item-price-old">50 ₽</div>
                                    <div class="catalog__item-price-now">450 ₽</div>
                                </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                            </div><a class="catalog__item-offer" href="#">3 предложение</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item catalog__item-bt">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img6.jpg') }}" alt=""></a>
                        <div class="catalog__item-fav"><svg><use xlink:href="#like"></use></svg></div>
                        <div class="catalog__item-label catalog__item-label-sale"><span>30%</span></div>
                    </div>
                    <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Авокадо Хасс ~ 2 шт. в упаковке 350 г</a>
                        <div class="catalog__item-numb">1 шт (125 г)</div>
                        <div class="catalog__item-bottom">
                            <div class="catalog__item-info">
                                <div class="catalog__item-price">
                                    <div class="catalog__item-price-old">50 ₽</div>
                                    <div class="catalog__item-price-now">45 ₽</div>
                                </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                            </div><a class="catalog__item-offer" href="#">5 предложение</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="catalog-min">
    <div class="container">
        <div class="catalog-min__top">
            <div class="catalog-min__top-title"><img src="{{ asset('assets/images/svg/icon-catalog1.svg') }}" alt=''> Овощи</div><a class="button button-all" href="#"><span>смотреть</span> +75 еще</a>
        </div>
        <div class="row">
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img12.jpg') }}" alt=""></a>
                        <div class="catalog__item-fav"><svg><use xlink:href="#like"></use></svg></div>
                        <div class="catalog__item-label catalog__item-label-hit"><span>хит</span></div>
                    </div>
                    <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Клубника отборная ~ 250 г</a>
                        <div class="catalog__item-numb">1 шт (125 г)</div>
                        <div class="catalog__item-bottom">
                            <div class="catalog__item-info">
                                <div class="catalog__item-price">
                                    <div class="catalog__item-price-old">50 руб</div>
                                    <div class="catalog__item-price-now">395 ₽</div>
                                </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img13.jpg') }}" alt=""></a>
                        <div class="catalog__item-fav"><svg><use xlink:href="#like"></use></svg></div>
                        <div class="catalog__item-label catalog__item-label-new"><span>NEW</span></div>
                    </div>
                    <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Мандарины Абхазские ~ 500 гр.</a>
                        <div class="catalog__item-numb">0.5 кг</div>
                        <div class="catalog__item-bottom">
                            <div class="catalog__item-info">
                                <div class="catalog__item-price">
                                    <div class="catalog__item-price-now">135 ₽</div>
                                </div>
                                <div class="catalog__item-amount">
                                    <input type="text" value="1"><span class="up"><img src="{{ asset('assets/images/svg/plus.svg') }}" alt=""></span><span class="down"><img src="{{ asset('assets/images/svg/minus.svg') }}" alt=""></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item catalog__item-favorites">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img14.jpg') }}" alt=""></a>
                        <div class="catalog__item-fav"><svg><use xlink:href="#like"></use></svg></div>
                        <div class="catalog__item-label catalog__item-label-sale"><span>30%</span></div>
                    </div>
                    <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Манго Кео Вьетнам ~ 350 г</a>
                        <div class="catalog__item-numb">1 шт (125 г)</div>
                        <div class="catalog__item-bottom">
                            <div class="catalog__item-info">
                                <div class="catalog__item-price">
                                    <div class="catalog__item-price-old">50 ₽</div>
                                    <div class="catalog__item-price-now">45 ₽</div>
                                </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img15.jpg') }}" alt=""></a>
                        <div class="catalog__item-fav"><svg><use xlink:href="#like"></use></svg></div>
                        <div class="catalog__item-label catalog__item-label-sale"><span>30%</span></div>
                    </div>
                    <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Помидоры Узбекские сладкие ~ 500 г</a>
                        <div class="catalog__item-numb">1 шт (125 г)</div>
                        <div class="catalog__item-bottom">
                            <div class="catalog__item-info">
                                <div class="catalog__item-price">
                                    <div class="catalog__item-price-old">50 ₽</div>
                                    <div class="catalog__item-price-now">450 ₽</div>
                                </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                <div class="catalog__item">
                    <div class="catalog__item-top"><a class="catalog__item-img" href="#"><img src="{{ asset('assets/images/catalog-img16.jpg') }}" alt=""></a>
                        <div class="catalog__item-fav"><svg><use xlink:href="#like"></use></svg></div>
                        <div class="catalog__item-label catalog__item-label-sale"><span>30%</span></div>
                    </div>
                    <div class="catalog__item-tx"><a class="catalog__item-title" href="#">Авокадо Хасс ~ 2 шт. в упаковке 350 г</a>
                        <div class="catalog__item-numb">1 шт (125 г)</div>
                        <div class="catalog__item-bottom">
                            <div class="catalog__item-info">
                                <div class="catalog__item-price">
                                    <div class="catalog__item-price-old">50 ₽</div>
                                    <div class="catalog__item-price-now">45 ₽</div>
                                </div><a class="catalog__item-buy" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="notice">
    <div class="container">
        <div class="notice__inner">
            <p>О сроках действия подписки вы можете узнать в Личном кабинете</p><a class="notice__link" href="#">перейти в ЛК</a>
        </div>
    </div>
</div>
<div class="catalog-subscription catalog-subscription-bord">
    <div class="container">
        <div class="catalog-subscription__list">
            <h3>Добавить еще подписки</h3>
            <div class="row">
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog-subscription__item"><a class="catalog-subscription__item-img" href="#"><img src="{{ asset('assets/images/subscription-img1.jpg') }}" alt=""></a><a class="catalog-subscription__item-title" href="#">FRESH</a><a class="catalog-subscription__item-offer" href="#">1 000 товаров</a></div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog-subscription__item"><a class="catalog-subscription__item-img" href="#"><img src="{{ asset('assets/images/subscription-img2.jpg') }}" alt=""></a><a class="catalog-subscription__item-title" href="#">NON-FOOD</a><a class="catalog-subscription__item-offer" href="#">230 товаров</a></div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog-subscription__item"><a class="catalog-subscription__item-img" href="#"><img src="{{ asset('assets/images/subscription-img3.jpg') }}" alt=""></a><a class="catalog-subscription__item-title" href="#">Кондитерские изделия</a><a class="catalog-subscription__item-offer" href="#">1 000 товаров</a></div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog-subscription__item"><a class="catalog-subscription__item-img" href="#"><img src="{{ asset('assets/images/subscription-img4.jpg') }}" alt=""></a><a class="catalog-subscription__item-title" href="#">Консервация</a><a class="catalog-subscription__item-offer" href="#">1 000 товаров</a></div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog-subscription__item"><a class="catalog-subscription__item-img" href="#"><img src="{{ asset('assets/images/subscription-img2.jpg') }}" alt=""></a><a class="catalog-subscription__item-title" href="#">Холодильник</a><a class="catalog-subscription__item-offer" href="#">1 000 товаров</a></div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog-subscription__item"><a class="catalog-subscription__item-img" href="#"><img src="{{ asset('assets/images/subscription-img1.jpg') }}" alt=""></a><a class="catalog-subscription__item-title" href="#">Сопутствующие товары</a><a class="catalog-subscription__item-offer" href="#">1 000 товаров</a></div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog-subscription__item"><a class="catalog-subscription__item-img" href="#"><img src="{{ asset('assets/images/subscription-img2.jpg') }}" alt=""></a><a class="catalog-subscription__item-title" href="#">Соки и вода</a><a class="catalog-subscription__item-offer" href="#">230 товаров</a></div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog-subscription__item"><a class="catalog-subscription__item-img" href="#"><img src="{{ asset('assets/images/subscription-img3.jpg') }}" alt=""></a><a class="catalog-subscription__item-title" href="#">Чай и кофе</a><a class="catalog-subscription__item-offer" href="#">1 000 товаров</a></div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog-subscription__item"><a class="catalog-subscription__item-img" href="#"><img src="{{ asset('assets/images/subscription-img4.jpg') }}" alt=""></a><a class="catalog-subscription__item-title" href="#">Хлебобулочные изделия</a><a class="catalog-subscription__item-offer" href="#">1 000 товаров</a></div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog-subscription__item"><a class="catalog-subscription__item-img" href="#"><img src="{{ asset('assets/images/subscription-img2.jpg') }}" alt=""></a><a class="catalog-subscription__item-title" href="#">Новинки</a><a class="catalog-subscription__item-offer" href="#">1 000 товаров</a></div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog-subscription__item"><a class="catalog-subscription__item-img" href="#"><img src="{{ asset('assets/images/subscription-img4.jpg') }}" alt=""></a><a class="catalog-subscription__item-title" href="#">Распродажа</a><a class="catalog-subscription__item-offer" href="#">1 000 товаров</a></div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog-subscription__item"><a class="catalog-subscription__item-img" href="#"><img src="{{ asset('assets/images/subscription-img2.jpg') }}" alt=""></a><a class="catalog-subscription__item-title" href="#">Товары по подписке</a><a class="catalog-subscription__item-offer" href="#">1 000 товаров</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

//else

<div class="catalog-subscription">
    <div class="container">
        <div class="catalog-subscription__top">
            <p>У вас еще не оформлено ни одной подписки. Выберите интересующую вас категорию</p><a class="catalog-subscription__top-link" href="#">Узнать больше о подписке</a>
        </div>
        <div class="catalog-subscription__list">
            <div class="row">
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog-subscription__item"><a class="catalog-subscription__item-img" href="#"><img src="{{ asset('assets/images/subscription-img1.jpg') }}" alt=""></a><a class="catalog-subscription__item-title" href="#">FRESH</a><a class="catalog-subscription__item-offer" href="#">1 000 товаров</a></div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog-subscription__item"><a class="catalog-subscription__item-img" href="#"><img src="{{ asset('assets/images/subscription-img2.jpg') }}" alt=""></a><a class="catalog-subscription__item-title" href="#">NON-FOOD</a><a class="catalog-subscription__item-offer" href="#">230 товаров</a></div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog-subscription__item"><a class="catalog-subscription__item-img" href="#"><img src="{{ asset('assets/images/subscription-img3.jpg') }}" alt=""></a><a class="catalog-subscription__item-title" href="#">Кондитерские изделия</a><a class="catalog-subscription__item-offer" href="#">1 000 товаров</a></div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog-subscription__item"><a class="catalog-subscription__item-img" href="#"><img src="{{ asset('assets/images/subscription-img4.jpg') }}" alt=""></a><a class="catalog-subscription__item-title" href="#">Консервация</a><a class="catalog-subscription__item-offer" href="#">1 000 товаров</a></div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog-subscription__item"><a class="catalog-subscription__item-img" href="#"><img src="{{ asset('assets/images/subscription-img2.jpg') }}" alt=""></a><a class="catalog-subscription__item-title" href="#">Холодильник</a><a class="catalog-subscription__item-offer" href="#">1 000 товаров</a></div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog-subscription__item"><a class="catalog-subscription__item-img" href="#"><img src="{{ asset('assets/images/subscription-img1.jpg') }}" alt=""></a><a class="catalog-subscription__item-title" href="#">Сопутствующие товары</a><a class="catalog-subscription__item-offer" href="#">1 000 товаров</a></div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog-subscription__item"><a class="catalog-subscription__item-img" href="#"><img src="{{ asset('assets/images/subscription-img2.jpg') }}" alt=""></a><a class="catalog-subscription__item-title" href="#">Соки и вода</a><a class="catalog-subscription__item-offer" href="#">230 товаров</a></div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog-subscription__item"><a class="catalog-subscription__item-img" href="#"><img src="{{ asset('assets/images/subscription-img3.jpg') }}" alt=""></a><a class="catalog-subscription__item-title" href="#">Чай и кофе</a><a class="catalog-subscription__item-offer" href="#">1 000 товаров</a></div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog-subscription__item"><a class="catalog-subscription__item-img" href="#"><img src="{{ asset('assets/images/subscription-img4.jpg') }}" alt=""></a><a class="catalog-subscription__item-title" href="#">Хлебобулочные изделия</a><a class="catalog-subscription__item-offer" href="#">1 000 товаров</a></div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog-subscription__item"><a class="catalog-subscription__item-img" href="#"><img src="{{ asset('assets/images/subscription-img2.jpg') }}" alt=""></a><a class="catalog-subscription__item-title" href="#">Новинки</a><a class="catalog-subscription__item-offer" href="#">1 000 товаров</a></div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog-subscription__item"><a class="catalog-subscription__item-img" href="#"><img src="{{ asset('assets/images/subscription-img4.jpg') }}" alt=""></a><a class="catalog-subscription__item-title" href="#">Распродажа</a><a class="catalog-subscription__item-offer" href="#">1 000 товаров</a></div>
                </div>
                <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                    <div class="catalog-subscription__item"><a class="catalog-subscription__item-img" href="#"><img src="{{ asset('assets/images/subscription-img2.jpg') }}" alt=""></a><a class="catalog-subscription__item-title" href="#">Товары по подписке</a><a class="catalog-subscription__item-offer" href="#">1 000 товаров</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
