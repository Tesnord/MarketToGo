@extends('layouts.layout')

@section('content')

    <div class="breadcrumb-block">
        <div class="container">
            {{ Diglactic\Breadcrumbs\Breadcrumbs::render('product', $slug) }}
        </div>
    </div>
    <div class="card-product">
        <div class="container">
            <div class="card-product__inner" data-product-id="{{$product['_id']}}">
                <div class="card-product__top-mob">
                    <div class="card-product__description-top">
                        <div class="card-product__description-top-item">Артикул: {{$product['vendorCode']}}</div>
                        @if($product['availability'] === true)
                            <div class="card-product__description-top-item">В наличии</div>
                        @else
                            <div class="card-product__description-top-item">Отсутствует</div>
                        @endif
                    </div>
                    <h1>{{ $product['title'] }}</h1>
                </div>
                <div class="card-product__slider js-card-product-slider">
                    <div class="card-product__slider-nav">
                        @foreach($product['images'] as $image)
                            <div class="card-product__slider-nav-item">
                                <div class="card-product__slider-nav-item-img"
                                     style="background-image: url({{ $image }})"></div>
                            </div>
                        @endforeach
                    </div>
                    <div class="card-product__slider-for">
                        @foreach($product['images'] as $image)
                            <a class="card-product__slider-for-item" href="{{ asset($image) }}"
                               data-fancybox="cart-prod" style="background-image: url({{ asset($image) }})">
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="card-product__description">
                    <div class="card-product__description-top">
                        <div class="card-product__description-top-item">Артикул: {{$product['vendorCode']}}</div>
                        @if($product['availability'] === true)
                            <div class="card-product__description-top-item">В наличии</div>
                        @else
                            <div class="card-product__description-top-item">Отсутствует</div>
                        @endif
                    </div>
                    <h1>{{ $product['title'] }}</h1>
                    <p>Цена за фасованный товар указана с учетом оптимально возможного веса фасовки.</p>
                    {{--                    <div class="card-product__description-points">+{{ $product['score'] }} балла</div>--}}
                    <div class="card-product__description-info">
                        <div class="card-product__description-price">
                            <div class="card-product__description-price-now">
                                {{$product['price']['value']}}{{ $product['price']['currency'] }}
                            </div>
                            <div class="card-product__description-price-old">
                                {{$product['oldPrice']['value']}}{{ $product['oldPrice']['currency'] }}
                            </div>
                        </div>
                        <div class="card-product__description-numb">{{ $product['subTitle'] }}</div>
                    </div>
                    <div class="card-product__description-btns">
                        <div class="catalog__item-amount" id="count"
                             style="{{ in_array($product['_id'], $productId) ? '' : 'display: none' }}">
                            <input class="count" type="text" min="1" max="{{$product['count']}}"
                                   value="{{$productBasket($product['_id'])}}">
                            <span class="up" onclick="up(event)">
                                <img src="{{ asset('assets/images/svg/plus.svg')}}" alt="">
                            </span>
                            <span class="down" onclick="down(event)">
                                <img src="{{ asset('assets/images/svg/minus.svg')}}" alt="">
                            </span>
                        </div>
                        <a class="button button-primary js-cart" href="javascript:void(0)" id="buy"
                           style="{{ in_array($product['_id'], $productId) ? 'display: none' : '' }}">
                            купить
                            <img src="{{ asset('assets/images/svg/cart.svg')}}" alt="">
                        </a>
                        @if(empty(in_array($product['_id'], $favorites)))
                            <a class="button button-all" href="javascript:void(0)">в избранное
                                <img class="like" src="{{ asset('assets/images/svg/like.svg') }}" alt=""></a>
                        @else
                            <a class="button button-all" href="javascript:void(0)">в избранное
                                <img class="like" src="{{ asset('assets/images/svg/like2.svg') }}" alt=""></a>
                        @endif
                    </div>
                    {{-- <a class="card-product__description-link" href="#">
                         <img src="{{ asset('assets/images/svg/icon1.svg') }}" alt="">
                         <span>Получайте товары по более привлекательной цене</span>
                     </a>--}}
                </div>
                <div class="card-product__all lnk">
                    <div class="card-product__all-reviews">
                        <a class="card-product__all-lnk" href="#card-item3"></a>
                        <div class="card-product__all-reviews-rating">
                            <div class="card-product__all-reviews-rating-now">{{ $product['rating']['score'] }}</div>
                            <div class="card-product__all-reviews-rating-all">({{ $product['rating']['reviews'] }}
                                отзыва)
                            </div>
                        </div>
                        <div class="card-product__all-reviews-list">
                            @for($i = 0; $i < 5; $i++)
                                @if( $product['rating']['score'] - $i >= 0.5)
                                    <div class="card-product__all-reviews-list-item-act">
                                        <img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt="">
                                    </div>
                                @else
                                    <div class="card-product__all-reviews-list-item">
                                        <img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt="">
                                    </div>
                                @endif
                            @endfor
                        </div>
                    </div>
                    {{--Brand--}}
                    {{--<div class="card-product__all-logo">
                        <a  href="{{ route('brand.catalog', ['slug' => $product['brand']['slug']]) }}"></a>
                        <img src="{{ asset($product['brand']['image']) }}" alt="">
                    </div>--}}
                    <div class="card-product__all-logo">
                        <img src="{{ asset('assets/images/logo-card.png') }}" alt="">
                    </div>
                    <div class="card-product__slider-label">
                        @foreach($product['label'] as $label)
                            <div class="catalog__item-label catalog__item-label-{{ $label['type'] }}">
                                @if(!empty($label['data']))
                                    <span>{{ $label['data'] }} %</span>
                                @else
                                    <span>{{ $label['type'] }}</span>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="card-product__inner-tw">
                <div class="card-product__left">
                    <div class="card-product__tabs">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#card-item1" id="card-item1-tab" data-toggle="tab"
                                   role="tab" aria-controls="card-item1" aria-selected="true">характеристики</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#card-item2" id="card-item2-tab" data-toggle="tab"
                                   role="tab" aria-controls="card-item2" aria-selected="false">Описание</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#card-item3" id="card-item3-tab" data-toggle="tab"
                                   role="tab" aria-controls="card-item3" aria-selected="false">Отзывы</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="card-item1" role="tabpanel"
                                 aria-labelledby="card-item1-tab">
                                <div class="card-product__tabs-holder">
                                    <div class="card-product__tabs-inner">
                                        <div class="card-product__tabs-table">
                                            @foreach($product['characteristics'] as $characteristics)
                                                <div class="card-product__tabs-table-row">
                                                    <div class="card-product__tabs-table-cell">{{$characteristics[0]}}
                                                        :
                                                    </div>
                                                    <div
                                                        class="card-product__tabs-table-cell card-product__tabs-table-cell-city">
                                                        {{$characteristics[1]}}</div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="card-product__tabs-storage">
                                            <div class="card-product__tabs-storage-title">Хранение:</div>
                                            <p>В недоступном для детей месте. Не более 10 суток в сухом месте,
                                                избегая чрезмерной влаги и охлаждения.</p>
                                        </div>
                                        <div class="card-product__tabs-label">
                                            @foreach($product['tags'] as $tag)
                                                @switch($tag)
                                                    @case('halal')
                                                    <div class="card-product__tabs-label-item"> Халяль
                                                        <img src="{{ asset('assets/images/svg/tb-icon1.svg') }}" alt="">
                                                    </div>
                                                    @break
                                                    @case('vegan')
                                                    <div class="card-product__tabs-label-item"> Веган
                                                        <img src="{{ asset('assets/images/svg/tb-icon2.svg') }}" alt="">
                                                    </div>
                                                    @break
                                                    @case('eco')
                                                    <div class="card-product__tabs-label-item"> Эко
                                                        <img src="{{ asset('assets/images/svg/tb-icon3.svg') }}" alt="">
                                                    </div>
                                                    @break
                                                @endswitch
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="card-product__right">
                                        @include('layouts.catalog.product.shop')
                                        @include('layouts.catalog.product.review')
                                        @include('layouts.catalog.product.delivery')
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="card-item2" role="tabpanel" aria-labelledby="card-item2-tab">
                                <div class="card-product__tabs-holder">
                                    <div class="card-product__tabs-inner">
                                        <div class="card-product__tabs-text">
                                            <p>{{ $product['description'] }}</p>
                                            <div class="card-product__tabs-text-mob">
                                                <p>{{ $product['description'] }}</p>
                                                <div class="card-product__tabs-text-title">Состав корзины</div>
                                                <ol>
                                                    <li>Вино игристое итальянское</li>
                                                    <li>Масло оливковое нефильтрованное</li>
                                                    <li>Масло оливковое классическое</li>
                                                    <li>Масло оливковое в жестяной канистре</li>
                                                    <li>Масло оливковое в глиняном горшочке</li>
                                                    <li>Драже конфеты - 1 кг</li>
                                                    <li>Драже конфеты - 0,15 кг</li>
                                                    <li>Уксус бальзамический из Модены</li>
                                                    <li>Соус бальзамический</li>
                                                    <li>Жемчужины (икринки) из бальзамического уксуса</li>
                                                    <li>Итальянский новогодний кулич - 750 гр</li>
                                                    <li>Итальянская паста</li>
                                                    <li>Соус для пасты</li>
                                                    <li>Итальянский кофе</li>
                                                    <li>Итальянский шоколад</li>
                                                    <li>Нуга</li>
                                                    <li>Крокканте</li>
                                                    <li>Артишоки Гурмэ</li>
                                                    <li>Оливки Гурмэ</li>
                                                    <li>Корзина огромная</li>
                                                    <li>Новогодний декор</li>
                                                </ol>
                                            </div>
                                            <div class="card-product__tabs-text-mob-btn js-text-mob-btn">читать еще
                                            </div>
                                        </div>
                                        <div class="card-product__tabs-label">
                                            @foreach($product['tags'] as $tag)
                                                @switch($tag)
                                                    @case('halal')
                                                    <div class="card-product__tabs-label-item"> Халяль
                                                        <img src="{{ asset('assets/images/svg/tb-icon1.svg') }}" alt="">
                                                    </div>
                                                    @break
                                                    @case('vegan')
                                                    <div class="card-product__tabs-label-item"> Веган
                                                        <img src="{{ asset('assets/images/svg/tb-icon2.svg') }}" alt="">
                                                    </div>
                                                    @break
                                                    @case('eco')
                                                    <div class="card-product__tabs-label-item"> Эко
                                                        <img src="{{ asset('assets/images/svg/tb-icon3.svg') }}" alt="">
                                                    </div>
                                                    @break
                                                @endswitch
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="card-product__right">
                                        @include('layouts.catalog.product.shop')
                                        @include('layouts.catalog.product.review')
                                        @include('layouts.catalog.product.delivery')
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="card-item3" role="tabpanel" aria-labelledby="card-item3-tab">
                                <div class="card-product__tabs-holder">
                                    <div class="card-product__tabs-inner">
                                        @if(empty($product['reviews']))
                                            <div class="card-product__reviews-none">
                                                <div class="card-product__reviews-none-title">У этого товара пока нет отзывов.</div>
                                                <p>Если вы заказывали этот товар, поделитесь своим впечатлением о нём, и<br> другие покупатели будут вам благодарны.</p>
                                            </div>
                                        @else
                                            <div class="card-product__reviews">
                                                @foreach($product['reviews']['list'] as $review)
                                                    <div class="card-product__reviews-item">
                                                        <div class="card-product__reviews-info">
                                                            <div
                                                                class="card-product__reviews-title">{{ $review['name'] }}</div>
                                                            <div class="card-product__reviews-rating">
                                                                @for($i = 0; $i < 5; $i++)
                                                                    @if(floor($review['rating']) - $i >= 1)
                                                                        <div class="card-product__reviews-rating-item">
                                                                            <img
                                                                                src="{{asset('assets/images/svg/rating-active.svg')}}"
                                                                                alt="">
                                                                        </div>
                                                                    @else
                                                                        <div class="card-product__reviews-rating-item">
                                                                            <img
                                                                                src="{{asset('assets/images/svg/rating.svg')}}"
                                                                                alt="">
                                                                        </div>
                                                                    @endif
                                                                @endfor
                                                            </div>
                                                            <div
                                                                class="card-product__reviews-data">{{ $review['date'] }}</div>
                                                        </div>
                                                        <div class="card-product__reviews-description">
                                                            <p>{{ $review['text'] }}</p>
                                                            @if(!empty($review['images']))
                                                                <div class="card-product__reviews-list">
                                                                    @foreach($review['images'] as $image)
                                                                        <a class="card-product__reviews-list-img"
                                                                           href="{{ asset($image) }}"
                                                                           data-fancybox="rev1" style="background-image:
                                                                            url('{{ asset($image) }}')"></a>
                                                                    @endforeach
                                                                    {{--<div class="card-product__reviews-list-img card-product__reviews-list-img-all"
                                                                         style="background-image: url('{{ asset('assets/images/card-img4.jpg') }}')">
                                                                        <span>еще 3</span>
                                                                    </div>--}}
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endforeach
                                                {{--<div class="card-product__reviews-item d-none">
                                                    <div class="card-product__reviews-info">
                                                        <div class="card-product__reviews-title">Лариса Шинкаренко</div>
                                                        <div class="card-product__reviews-rating">
                                                            <div class="card-product__reviews-rating-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                            <div class="card-product__reviews-rating-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                            <div class="card-product__reviews-rating-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                            <div class="card-product__reviews-rating-item"><img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt=""></div>
                                                            <div class="card-product__reviews-rating-item"><img src="{{ asset('assets/images/svg/rating.svg') }}" alt=""></div>
                                                        </div>
                                                        <div class="card-product__reviews-data">14.01.2021</div>
                                                    </div>
                                                    <div class="card-product__reviews-description">
                                                        <p>Хорошее и натуральное спелое манго, которое будет сочиться и будет обладать неповторимымвкусом и ароматом, найти достаточно сложно! Если приобрести манго в любом сетевом магазине,то Вы сами в этом убедитесь. Их манго жесткие, незрелые, блестят</p>
                                                        <div class="card-product__reviews-list"><a class="card-product__reviews-list-img" href="{{ asset('assets/images/card-img3.jpg') }}" data-fancybox="rev3" style="background-image: url('{{ asset('assets/images/card-img3.jpg') }}')"></a><a class="card-product__reviews-list-img" href="{{ asset('assets/images/card-img4.jpg') }}" data-fancybox="rev3" style="background-image: url('{{ asset('assets/images/card-img4.jpg') }}')"></a><a class="card-product__reviews-list-img" href="{{ asset('assets/images/card-img4.jpg') }}" data-fancybox="rev3" style="background-image: url('{{ asset('assets/images/card-img4.jpg') }}')"></a></div>
                                                    </div>
                                                </div>
                                                <div class="card-product__reviews-btn js-card-product-reviews">смотреть +75 еще</div>--}}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="card-product__right">
                                        @include('layouts.catalog.product.shop')
                                        @include('layouts.catalog.product.review')
                                        @include('layouts.catalog.product.delivery')

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-product__other">
                        <h3>Другие предложения продавцов на сайте</h3>
                        {{--                        {{ dd($product['offers']) }}--}}
                        <div class="card-product__product">
                            @foreach($product['offers'] as $offer)
                                <div class="card-product__product-row">
                                    <div class="card-product__product-descr">
                                        <div class="card-product__product-img">
                                            <img src="{{ asset($offer['image']) }}" alt="">
                                        </div>
                                        <a class="card-product__product-title"
                                           href="{{ $offer['slug'] }}">{{ $offer['title'] }}</a>
                                        <div class="card-product__product-firm">{{ $offer['subTitle'] }}</div>
                                    </div>
                                    <div class="card-product__product-price">
                                        <div class="card-product__product-price-now">
                                            {{ $offer['price']['value'] }} {{ $offer['price']['currency'] }}
                                        </div>
                                        @if(!empty($offer['old_price']))
                                            <div class="card-product__product-price-old">
                                                {{ $offer['old_price']['value'] }} {{ $offer['old_price']['currency'] }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="card-product__product-btn">
                                        <a class="button button-primary" href="{{ $offer['slug'] }}">подробнее
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                            {{--<div class="card-product__product-row d-none">
                                <div class="card-product__product-descr">
                                    <div class="card-product__product-img"><img src="{{ asset('assets/images/logo-i.png') }}" alt=""></div>
                                    <div class="card-product__product-title">Мир здоровья</div>
                                    <div class="card-product__product-firm">ООО «Свежие продукты»</div>
                                </div>
                                <div class="card-product__product-price">
                                    <div class="card-product__product-price-now">121 ₽</div>
                                    <div class="card-product__product-price-old">145 ₽</div>
                                </div>
                                <div class="card-product__product-btn"><a class="button button-primary" href="#">купить<img src="{{ asset('assets/images/svg/cart.svg') }}" alt=""></a></div>
                            </div>
                            <div class="card-product__product-btn-main js-card-product">смотреть +75 еще</div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="catalog-min catalog-min-tw">
        <div class="container">
            <h3>Возможно вас заинтересует</h3>
            <div class="row">
                @foreach($product['others'] as $product)
                    @include('layouts.catalog.product')
                    {{--<div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
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
                    </div>--}}
                @endforeach
            </div>
        </div>
    </div>

@endsection
