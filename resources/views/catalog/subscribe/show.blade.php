@extends('layouts.layout')

@section('content')

<div class="breadcrumb-block">
    <div class="container">
{{--        {{ Diglactic\Breadcrumbs\Breadcrumbs::render('subscribe.show') }}--}}
    </div>
</div>
<div class="title-main">
    <div class="container">
        <div class="title-main__inner">
            <h1>Товары по подписке</h1>
        </div>
    </div>
</div>
<div class="subscription-tx">
    <div class="container">
        <div class="subscription-tx__inner">
            <p>У вас оформлена подписка на категорию «FRESH»</p><a class="subscription-tx__link" href="#">Вернуться во все категории</a>
        </div>
    </div>
</div>
<div class="catalog">
    <div class="container">
        <div class="catalog__inner">
            <div class="catalog__top">
                <div class="filter">
                    <div class="filter__btn"><svg><use xlink:href="#filter"></use></svg> фильтр</div>
                    <div class="filter__top-close js-filter-close"><img src="{{ asset('assets/images/svg/close2.svg') }}" alt=""></div>
                    <div class="filter-bl">
                        <div class="filter__top">
                            <div class="filter__top-title">Фильтр</div>
                            <div class="filter__top-close js-filter-close"><img src="{{ asset('assets/images/svg/close2.svg') }}" alt=""></div>
                        </div>
                        <div class="filter__item open">
                            <div class="filter__title open">цена</div>
                            <div class="filter__holder" style="display: block;">
                                <div class="filter__container">
                                    <div class="filter__range polzunok-container-6">
                                        <div class="filter__range-item">
                                            <input class="polzunok-input-6-left" type="text" value="от">
                                        </div>
                                        <div class="filter__range-item">
                                            <input class="polzunok-input-6-right" type="text" value="до">
                                        </div>
                                        <div class="polzunok-6"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter__item filter__item-list open">
                            <div class="filter__title open">бренд</div>
                            <div class="filter__holder" style="display: block;">
                                <div class="filter__container">
                                    <div class="filter__group-check">
                                        <div class="filter__check">
                                            <input type="checkbox" id="equipment-brand1" name="equipment-brand" checked>
                                            <label for="equipment-brand1">Дары Кубани</label>
                                        </div>
                                    </div>
                                    <div class="filter__group-check">
                                        <div class="filter__check">
                                            <input type="checkbox" id="equipment-brand2" name="equipment-brand">
                                            <label for="equipment-brand2">Лукошко</label>
                                        </div>
                                    </div>
                                    <div class="filter__group-check">
                                        <div class="filter__check">
                                            <input type="checkbox" id="equipment-brand3" name="equipment-brand">
                                            <label for="equipment-brand3">Бабушкины рецепты</label>
                                        </div>
                                    </div>
                                    <div class="filter__group-check">
                                        <div class="filter__check">
                                            <input type="checkbox" id="equipment-brand4" name="equipment-brand">
                                            <label for="equipment-brand4">Маруся</label>
                                        </div>
                                    </div>
                                    <div class="filter__group-check">
                                        <div class="filter__check">
                                            <input type="checkbox" id="equipment-brand5" name="equipment-brand">
                                            <label for="equipment-brand5">Дары Кубани</label>
                                        </div>
                                    </div>
                                    <div class="filter__group-check">
                                        <div class="filter__check">
                                            <input type="checkbox" id="equipment-brand6" name="equipment-brand">
                                            <label for="equipment-brand6">Лукошко</label>
                                        </div>
                                    </div>
                                    <div class="filter__group-check">
                                        <div class="filter__check">
                                            <input type="checkbox" id="equipment-brand7" name="equipment-brand">
                                            <label for="equipment-brand7">Лукошко</label>
                                        </div>
                                    </div>
                                    <div class="filter__group-check">
                                        <div class="filter__check">
                                            <input type="checkbox" id="equipment-brand8" name="equipment-brand">
                                            <label for="equipment-brand8">Лукошко</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter__item open">
                            <div class="filter__title open">Дополнительно</div>
                            <div class="filter__holder" style="display: block;">
                                <div class="filter__container">
                                    <div class="filter__group-check">
                                        <div class="filter__check">
                                            <input type="checkbox" id="dop1" name="dop" checked>
                                            <label for="dop1">Халяль</label>
                                        </div>
                                    </div>
                                    <div class="filter__group-check">
                                        <div class="filter__check">
                                            <input type="checkbox" id="dop2" name="dop">
                                            <label for="dop2">Эко</label>
                                        </div>
                                    </div>
                                    <div class="filter__group-check">
                                        <div class="filter__check">
                                            <input type="checkbox" id="dop3" name="dop">
                                            <label for="dop3">Веган</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter__item filter__item-bord open">
                            <div class="filter__holder">
                                <div class="filter__container">
                                    <div class="filter__group-check">
                                        <div class="filter__check">
                                            <input type="checkbox" id="act2" name="act2">
                                            <label for="act2">В наличии</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter__item filter__item-bord open">
                            <div class="filter__holder">
                                <div class="filter__container">
                                    <div class="filter__group-check">
                                        <div class="filter__check">
                                            <input type="checkbox" id="act1" name="act">
                                            <label for="act1">Акции</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter__btn-b"><a class="button button-primary" href="#">Показать 40 товаров</a><a class="button button-tx" href="#">Сбросить</a></div>
                    </div>
                </div>
                <div class="catalog__sorting">
                    <div class="catalog__sorting-title">сортировать:</div>
                    <ul class="catalog__sorting-list">
                        <li><a href="#">% скидки</a></li>
                        <li class="active"><a href="#">цене</a></li>
                    </ul>
                </div>
            </div>
            <div class="catalog__list">
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
                    <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                        <div class="catalog__item">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                        <div class="catalog__item">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                        <div class="catalog__item">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                        <div class="catalog__item">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                        <div class="catalog__item">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                        <div class="catalog__item">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                        <div class="catalog__item">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                        <div class="catalog__item">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                        <div class="catalog__item">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                        <div class="catalog__item">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                        <div class="catalog__item">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                        <div class="catalog__item">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                        <div class="catalog__item">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                        <div class="catalog__item">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
                        <div class="catalog__item">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination-bl">
                    <ul class="pagination">
                        <li class="page-item prev"><a class="page-link" href="#"><span class="tx">Предыдущая</span><span class="arrow"><img src="{{ asset('assets/images/svg/arrow2.svg') }}" alt=""></span></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item mob"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><span class="page-link">...</span></li>
                        <li class="page-item"><a class="page-link" href="#">22</a></li>
                        <li class="page-item next"><a class="page-link" href="#"><span class="tx">следующая</span><span class="arrow"><img src="{{ asset('assets/images/svg/arrow2.svg') }}" alt=""></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
