@extends('layouts.layout')

@section('content')

    <div class="breadcrumb-block">
        <div class="container">
            {{ Diglactic\Breadcrumbs\Breadcrumbs::render('product', $breadcrumbs) }}
        </div>
    </div>
    <div class="card-product">
        <div class="container">
            <div class="card-product__inner" data-product-id="{{$product['_id']}}">
                <div class="card-product__top-mob">
                    <div class="card-product__description-top">
                        <div class="card-product__description-top-item">Артикул: {{$product['vendorCode']}}</div>
                        @if(isset($product['status']))
                            <div class="card-product__description-top-item">{{$product['status']}}</div>
                        @endif
                    </div>
                    <h1>{{ $product['title'] }}</h1>
                </div>
                @if(isset($product['images']))
                    <div class="card-product__slider js-card-product-slider">
                        <div class="card-product__slider-nav">
                            @foreach($product['images'] as $image)
                                <div class="card-product__slider-nav-item">
                                    <div class="card-product__slider-nav-item-img"
                                         style="background-image: url({{ $image['small'] }})"></div>
                                </div>
                            @endforeach
                        </div>
                        <div class="card-product__slider-for banner__big-slider">
                            @foreach($product['images'] as $image)
                                <a class="card-product__slider-for-item" href="{{ asset($image['big']) }}"
                                   data-fancybox="cart-prod" style="background-image: url({{ asset($image['big']) }})">
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif
                <div class="card-product__description">
                    <div class="card-product__description-top">
                        <div class="card-product__description-top-item">Артикул: {{$product['vendorCode']}}</div>
                        @if(isset($product['status']))
                            <div class="card-product__description-top-item">{{$product['status']}}</div>
                        @endif
                    </div>
                    <h1>{{ $product['title'] }}</h1>
                    <p>Цена за фасованный товар указана с учетом оптимально возможного веса фасовки.</p>
                    {{--<div class="card-product__description-points">+{{ $product['score'] }} балла</div>--}}
                    <div class="card-product__description-info">
                        <div class="card-product__description-price">
                            <div class="card-product__description-price-now">
                                {{$product['price']['value']}} {{ $product['price']['currency'] }}
                            </div>
                            @if(isset($product['oldPrice']))
                                <div class="card-product__description-price-old">
                                    {{$product['oldPrice']['value']}} {{ $product['oldPrice']['currency'] }}
                                </div>
                            @endif
                        </div>
                        <div class="card-product__description-numb">{{ $product['subTitle'] }}</div>
                    </div>
                    <div class="card-product__description-btns">
                        <div class="catalog__item-amount catalog__item-amount-product" id="count"
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
                            <a class="button button-all" href="javascript:void(0)">
                                в избранное
                                <img class="like" src="{{ asset('assets/images/svg/like.svg') }}" alt="">
                            </a>
                        @else
                            <a class="button button-all" href="javascript:void(0)">
                                в избранное
                                <img class="like" src="{{ asset('assets/images/svg/like2.svg') }}" alt="">
                            </a>
                        @endif
                    </div>

                    {{-- <a class="card-product__description-link" href="#">
                         <img src="{{ asset('assets/images/svg/icon1.svg') }}" alt="">
                         <span>Получайте товары по более привлекательной цене</span>
                     </a>--}}
                </div>
                <div class="card-product__all lnk">
                    @if($product['reviews']['score'])
                        <div class="card-product__all-reviews">
                            <a class="card-product__all-lnk" href="#card-item3"></a>
                            <div class="card-product__all-reviews-rating">
                                <div class="card-product__all-reviews-rating-now">{{ $product['reviews']['score'] }}</div>
                                <div class="card-product__all-reviews-rating-all">({{ $product['reviews']['count'] }}
                                    отзыва)
                                </div>
                            </div>
                            <div class="card-product__all-reviews-list">
                                @for($i = 0; $i < 5; $i++)
                                    @if( $product['reviews']['score'] - $i >= 0.5)
                                        <div class="card-product__all-reviews-list-item-act">
                                            <img src="{{ asset('assets/images/svg/rating-active.svg') }}" alt="">
                                        </div>
                                    @else
                                        <div class="card-product__all-reviews-list-item">
                                            <img src="{{ asset('assets/images/svg/rating.svg') }}" alt="">
                                        </div>
                                    @endif
                                @endfor
                            </div>
                        </div>
                    @endif
                    {{--Brand--}}
                    @if(isset($product['brand']))
                        <div class="card-product__all-logo">
                            <a href="{{ route('brand.catalog', ['slug_brand' => $product['brand']['slug']]) }}"></a>
                            <img src="{{ asset($product['brand']['image']) }}" alt="">
                        </div>
                    @endif
                    @if(isset($product['labels']))
                        <div class="card-product__slider-label">
                            @foreach($product['labels'] as $label)
                                <div class="catalog__item-label catalog__item-label-{{ $label['type'] }}">
                                    @if(!empty($label['data']))
                                        <span>{{ $label['data'] }}</span>
                                    @else
                                        <span>{{ $label['type'] }}</span>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    @endif
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
                        <div class="card-product__container">
                            <div class="tab-content card-product-left" id="myTabContent">
                                <div class="tab-pane fade show active" id="card-item1" role="tabpanel"
                                     aria-labelledby="card-item1-tab">
                                    <div class="card-product__tabs-holder">
                                        <div class="card-product__tabs-inner">
                                            <div class="card-product__tabs-table">
                                                @foreach($product['characteristics'] as $characteristics)
                                                    <div class="card-product__tabs-table-row">
                                                        <div class="card-product__tabs-table-cell">
                                                            {{$characteristics[0]}}:
                                                        </div>
                                                        <div class="card-product__tabs-table-cell card-product__tabs-table-cell-city">
                                                            {{$characteristics[1]}}
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <!--<div class="card-product__tabs-storage">
                                                <div class="card-product__tabs-storage-title">Хранение:</div>
                                                <p>В недоступном для детей месте. Не более 10 суток в сухом месте,
                                                    избегая чрезмерной влаги и охлаждения.</p>
                                            </div>-->
                                            @if(isset($product['tags']))
                                                <div class="card-product__tabs-label">
                                                    @foreach($product['tags'] as $tag)
                                                        <div class="card-product__tabs-label-item"> {{$tag['title']}}
                                                            <img src="{{ $tag['image'] }}" width="47" alt="">
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="card-item2" role="tabpanel" aria-labelledby="card-item2-tab">
                                    <div class="card-product__tabs-holder">
                                        <div class="card-product__tabs-inner">
                                            <div class="card-product__tabs-text">
                                                <div class="card-product__tabs-text-mob open">
                                                    <p>{{ $product['description'] }}</p>
                                                </div>
                                            </div>
                                            @if(isset($product['tags']))
                                                <div class="card-product__tabs-label">
                                                    @foreach($product['tags'] as $tag)
                                                        <div class="card-product__tabs-label-item"> {{$tag['title']}}
                                                            <img src="{{ $tag['image'] }}" width="47" alt="">
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="card-item3" role="tabpanel" aria-labelledby="card-item3-tab">
                                    <div class="card-product__tabs-holder">
                                        <div class="card-product__tabs-inner">
                                            @if($product['reviews']['count'] == 0)
                                                <div class="card-product__reviews-none">
                                                    <div class="card-product__reviews-none-title">У этого товара пока нет
                                                        отзывов.
                                                    </div>
                                                    <p>Если вы заказывали этот товар, поделитесь своим впечатлением о нём, и<br>
                                                        другие покупатели будут вам благодарны.</p>
                                                </div>
                                            @else
                                                <div class="card-product__reviews">
                                                    @foreach($product['reviews']['list'] as $review)

                                                        <div class="card-product__reviews-item">
                                                            <div class="card-product__reviews-info">
                                                                <div
                                                                    class="card-product__reviews-title">{{ $review['name'] }}</div>
                                                                @if(!empty($review['rating']))
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
                                                                @endif
                                                                <div
                                                                    class="card-product__reviews-data">{{ $review['date'] }}</div>
                                                            </div>
                                                            <div class="card-product__reviews-description">
                                                                <p>{{ $review['text'] ?? '' }}</p>
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
                                    </div>
                                </div>
                            </div>
                            <div class="card-product__right">
                                @include('layouts.catalog.product.shop')
                                @include('layouts.catalog.product.review')
                                @include('layouts.catalog.product.delivery')
                            </div>
                        </div>
                    </div>
                    @if(!empty($product['offers']))
                        <div class="card-product__other">
                            <h3>Другие предложения продавцов на сайте</h3>
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
                    @endif
                </div>
            </div>
        </div>
        <!--Modal-->
        <style>
            .modal-reviews__rating-item {
                overflow: hidden;
                position: relative;
            }
            .modal-reviews__rating-item label {
                width: 17px;
                height: 17px;
            }
            .modal-reviews__rating-item label svg {
                width: 17px;
                height: 17px;
                fill: #D9DED4;
                position: absolute;
            }
            .modal-reviews__rating-item:not(:checked) > input {
                display: none;
            }
            .modal-reviews__rating-item:not(:checked) > label {
                float: right;
                padding: 0;
                cursor: pointer;
            }

            .modal-reviews__rating-item > input:checked ~ label svg {
                fill: #7ABC2F;
            }
            .modal-reviews__rating-item:not(:checked) > label:hover svg,
            .modal-reviews__rating-item:not(:checked) > label:hover ~ label svg {
                fill: #7ABC2F;
            }
            .modal-reviews__rating-item > input:checked + label:hover svg,
            .modal-reviews__rating-item > input:checked + label:hover ~ label svg,
            .modal-reviews__rating-item > input:checked ~ label:hover svg,
            .modal-reviews__rating-item > input:checked ~ label:hover ~ label svg,
            .modal-reviews__rating-item > label:hover ~ input:checked ~ label svg {
                fill: #7ABC2F;
            }
            .modal-reviews__rating-item > label:active {
                position: relative;
            }
        </style>
        <div class="modal fade" id="modalReviews" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="close" data-dismiss="modal" aria-label="Close">
                        <img src="{{ asset('assets/images/svg/close2.svg')}}" alt="">
                    </div>
                    <div class="modal-reviews">
                        <div class="modal-reviews__title">Оставить отзыв</div>
                        <div class="modal-reviews__rating">
                            <div class="modal-reviews__rating-title">Оцените товар</div>
                            <div class="modal-reviews__rating-list">
                                <div class="modal-reviews__rating-item">
                                    <input type="radio" id="star-5" name="rating" value="5">
                                    <label for="star-5" title="Оценка «5»">
                                        <svg viewBox="0 0 17 17" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.955 6.5082C16.8262 6.11197 16.4428 5.83973 15.903 5.76126L11.5032 5.12184L9.53539 1.135C9.29402 0.645905 8.91659 0.365234 8.5 0.365234C8.0834 0.365234 7.70598 0.645905 7.46461 1.13513L5.49706 5.12184L1.09713 5.76126C0.55719 5.83973 0.173668 6.11197 0.045006 6.5082C-0.0836561 6.90444 0.0665362 7.35009 0.457192 7.73075L3.64106 10.8341L2.88932 15.2162C2.79321 15.7767 2.95702 16.1125 3.11137 16.2956C3.29243 16.5104 3.5565 16.6287 3.85493 16.6287C4.07944 16.6287 4.31822 16.5629 4.56478 16.4333L8.5 14.3645L12.4355 16.4335C12.6819 16.563 12.9207 16.6287 13.1452 16.6287H13.1453C13.4436 16.6287 13.7078 16.5104 13.8889 16.2956C14.0431 16.1126 14.207 15.7767 14.1108 15.2162L13.3592 10.8341L16.5429 7.73075C16.9335 7.35009 17.0837 6.90444 16.955 6.5082Z"/>
                                        </svg>
                                    </label>
                                    <input type="radio" id="star-4" name="rating" value="4">
                                    <label for="star-4" title="Оценка «4»">
                                        <svg viewBox="0 0 17 17" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.955 6.5082C16.8262 6.11197 16.4428 5.83973 15.903 5.76126L11.5032 5.12184L9.53539 1.135C9.29402 0.645905 8.91659 0.365234 8.5 0.365234C8.0834 0.365234 7.70598 0.645905 7.46461 1.13513L5.49706 5.12184L1.09713 5.76126C0.55719 5.83973 0.173668 6.11197 0.045006 6.5082C-0.0836561 6.90444 0.0665362 7.35009 0.457192 7.73075L3.64106 10.8341L2.88932 15.2162C2.79321 15.7767 2.95702 16.1125 3.11137 16.2956C3.29243 16.5104 3.5565 16.6287 3.85493 16.6287C4.07944 16.6287 4.31822 16.5629 4.56478 16.4333L8.5 14.3645L12.4355 16.4335C12.6819 16.563 12.9207 16.6287 13.1452 16.6287H13.1453C13.4436 16.6287 13.7078 16.5104 13.8889 16.2956C14.0431 16.1126 14.207 15.7767 14.1108 15.2162L13.3592 10.8341L16.5429 7.73075C16.9335 7.35009 17.0837 6.90444 16.955 6.5082Z"/>
                                        </svg>
                                    </label>
                                    <input type="radio" id="star-3" name="rating" value="3">
                                    <label for="star-3" title="Оценка «3»">
                                        <svg viewBox="0 0 17 17" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.955 6.5082C16.8262 6.11197 16.4428 5.83973 15.903 5.76126L11.5032 5.12184L9.53539 1.135C9.29402 0.645905 8.91659 0.365234 8.5 0.365234C8.0834 0.365234 7.70598 0.645905 7.46461 1.13513L5.49706 5.12184L1.09713 5.76126C0.55719 5.83973 0.173668 6.11197 0.045006 6.5082C-0.0836561 6.90444 0.0665362 7.35009 0.457192 7.73075L3.64106 10.8341L2.88932 15.2162C2.79321 15.7767 2.95702 16.1125 3.11137 16.2956C3.29243 16.5104 3.5565 16.6287 3.85493 16.6287C4.07944 16.6287 4.31822 16.5629 4.56478 16.4333L8.5 14.3645L12.4355 16.4335C12.6819 16.563 12.9207 16.6287 13.1452 16.6287H13.1453C13.4436 16.6287 13.7078 16.5104 13.8889 16.2956C14.0431 16.1126 14.207 15.7767 14.1108 15.2162L13.3592 10.8341L16.5429 7.73075C16.9335 7.35009 17.0837 6.90444 16.955 6.5082Z"/>
                                        </svg>
                                    </label>
                                    <input type="radio" id="star-2" name="rating" value="2">
                                    <label for="star-2" title="Оценка «2»">
                                        <svg viewBox="0 0 17 17" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.955 6.5082C16.8262 6.11197 16.4428 5.83973 15.903 5.76126L11.5032 5.12184L9.53539 1.135C9.29402 0.645905 8.91659 0.365234 8.5 0.365234C8.0834 0.365234 7.70598 0.645905 7.46461 1.13513L5.49706 5.12184L1.09713 5.76126C0.55719 5.83973 0.173668 6.11197 0.045006 6.5082C-0.0836561 6.90444 0.0665362 7.35009 0.457192 7.73075L3.64106 10.8341L2.88932 15.2162C2.79321 15.7767 2.95702 16.1125 3.11137 16.2956C3.29243 16.5104 3.5565 16.6287 3.85493 16.6287C4.07944 16.6287 4.31822 16.5629 4.56478 16.4333L8.5 14.3645L12.4355 16.4335C12.6819 16.563 12.9207 16.6287 13.1452 16.6287H13.1453C13.4436 16.6287 13.7078 16.5104 13.8889 16.2956C14.0431 16.1126 14.207 15.7767 14.1108 15.2162L13.3592 10.8341L16.5429 7.73075C16.9335 7.35009 17.0837 6.90444 16.955 6.5082Z"/>
                                        </svg>
                                    </label>
                                    <input type="radio" id="star-1" name="rating" value="1">
                                    <label for="star-1" title="Оценка «1»">
                                        <svg viewBox="0 0 17 17" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.955 6.5082C16.8262 6.11197 16.4428 5.83973 15.903 5.76126L11.5032 5.12184L9.53539 1.135C9.29402 0.645905 8.91659 0.365234 8.5 0.365234C8.0834 0.365234 7.70598 0.645905 7.46461 1.13513L5.49706 5.12184L1.09713 5.76126C0.55719 5.83973 0.173668 6.11197 0.045006 6.5082C-0.0836561 6.90444 0.0665362 7.35009 0.457192 7.73075L3.64106 10.8341L2.88932 15.2162C2.79321 15.7767 2.95702 16.1125 3.11137 16.2956C3.29243 16.5104 3.5565 16.6287 3.85493 16.6287C4.07944 16.6287 4.31822 16.5629 4.56478 16.4333L8.5 14.3645L12.4355 16.4335C12.6819 16.563 12.9207 16.6287 13.1452 16.6287H13.1453C13.4436 16.6287 13.7078 16.5104 13.8889 16.2956C14.0431 16.1126 14.207 15.7767 14.1108 15.2162L13.3592 10.8341L16.5429 7.73075C16.9335 7.35009 17.0837 6.90444 16.955 6.5082Z"/>
                                        </svg>
                                    </label>
                                </div>

{{--                                <img src="{{ asset('assets/images/svg/rating-active.svg')}}" alt="">--}}
                            </div>

                        </div>
                        <div class="modal-reviews__inp">
                            <textarea class="form__input-effect" id="tx"></textarea>
                            <label for="tx">Комментарий</label>
                        </div>
                        <div class="modal-reviews__upload">
                            <div class="modal-reviews__upload-list">
                                <label class="custom-file-upload">
                                    <input type="file" accept=".png, .jpg, .jpeg" multiple/>
                                </label>
                                <!--<input type="file" name=""pic class="modal-reviews__upload-item modal-reviews__upload-item-none" >-->
                            </div>
                            <div class="modal-reviews__upload-tx">
                                <div class="modal-reviews__upload-tx-title">Добавьте фото, нажав на кнопку, или перетащите фото в эту область</div>
                                <div class="modal-reviews__upload-tx-text">До 10 изображений в формате PNG, JPEG</div>
                            </div>
                        </div>
                        <div class="modal-reviews__bottom">
                            <div class="order__point-check">
                                <input type="checkbox" id="check-modal" name="check-modal">
                                <label for="check-modal">Оставить анонимный отзыв</label>
                            </div>
                            <a class="button button-primary" data-toggle="modal" data-target="#modalReviewsThanks" data-dismiss="modal" aria-label="Close" href="javascript:void(0)">оставить отзыв</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalReviewsThanks" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content__thanks">
                    <div class="close" data-dismiss="modal" aria-label="Close"><img src="{{asset('assets/images/svg/close2.svg')}}" alt=""></div>
                    <div class="modal-reviews__thanks">
                        <div class="modal-reviews__thanks__title">Мы получили ваше сообщение и приняли его в обработку</div>
                        <div class="modal-reviews__thanks__text">Некоторые отзывы требуют проверки, поэтому публикация может происходить с задержкой</div>
                        <div class="modal-reviews__thanks__bottom">
                            <a class="button button-primary" data-dismiss="modal" aria-label="Close" href="">хорошо</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalReviews3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="close" data-dismiss="modal" aria-label="Close">
                        <img src="{{asset('assets/images/svg/close2.svg')}}" alt="">
                    </div>
                    <div class="modal-reviews">
                        <div class="modal-reviews__title">Оставить отзыв</div>
                        <p>Вы ещё не покупали этот товар в нашем магазине. Купите его и поделитесь отзывом.</p>
                        <div class="modal-reviews__rating">
                            <div class="modal-reviews__rating-list">
                                @for($i = 0; $i < 5; $i++)
                                    @if(floor($product['reviews']['score']) - $i >= 1)
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
                            <div class="modal-reviews__rating-numb">{{$product['reviews']['score']}}</div>
                            <div class="modal-reviews__rating-all">({{$product['reviews']['count']}} отзыва)</div>
                        </div>
                        <div class="modal-reviews__bottom">
                            <a class="button button-primary" data-dismiss="modal" aria-label="Close" href="">Вернуться</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Modal-->
    </div>
    @if(!empty($product['others']))
        <div class="catalog-min catalog-min-tw">
            <div class="container">
                <h3>Возможно вас заинтересует</h3>
                <div class="row">
                    @foreach($product['others'] as $product)
                        @include('layouts.catalog.product')
                    @endforeach
                </div>
            </div>
        </div>
    @endif
@endsection
