<div class="col-lg-2-1 col-lg-3 col-md-4 col-sm-6">
    <div class="catalog__item catalog__item-bt {{ in_array($product['_id'], $favorites) ? 'catalog__item-favorites' : '' }}"
            data-product-id="{{ $product['_id']  }}">
        <div class="catalog__item-top">
            <a class="catalog__item-img" href="{{ route('product', ['slug_product' => $product['slug']]) }}">
                @if($product['image'] !== null)
                    <img src="{{ $product['image'] }}" alt="">
                @else
                    <img src="{{asset('assets/images/svg/logo.svg')}}" alt="">
                @endif
            </a>
            <div class="catalog__item-fav">
                <svg>
                    <use xlink:href="#like"></use>
                </svg>
            </div>
            {{--@foreach($product['label'] as $label)
                <div class="catalog__item-label catalog__item-label-{{ $label['type'] }}">
                    @if(!empty($label['data']))
                        <span>{{ $label['data'] }} %</span>
                    @else
                        <span>{{ $label['type'] }}</span>
                    @endif
                </div>
            @endforeach--}}
        </div>
        <div class="catalog__item-tx">
            <a class="catalog__item-title" href="{{ route('product', ['slug_product' => $product['slug']]) }}">
                {{ $product['title'] }}
            </a>
            <div class="catalog__item-numb">{{ $product['subTitle'] }}</div>
            <div class="catalog__item-bottom">
                <div class="catalog__item-info">
                    <div class="catalog__item-price">
                        @if(!empty($product['oldPrice']))
                            <div class="catalog__item-price-old">
                                {{ $product['oldPrice']['value'] }}
                                {{ $product['oldPrice']['currency'] }}
                            </div>
                        @endif
                        <div class="catalog__item-price-now">
                            {{ $product['price']['value'] }}
                            {{ $product['price']['currency'] }}
                        </div>
                    </div>
                    <span class="catalog__item-buy js-buy-cart" id="buy" style="{{ in_array($product['_id'], $productId) ? 'display: none' : '' }}">
                        купить
                        <img src="{{ asset('assets/images/svg/cart.svg')}}" alt="">
                    </span>
                    <div class="catalog__item-amount" id="count" style="{{ in_array($product['_id'], $productId) ? '' : 'display: none' }}">
                        <input class="count" type="text" min="1" max="{{$product['count']}}" value="{{$productBasket($product['_id'])}}">
                        <span class="up" onclick="up(event)">
                            <img src="{{ asset('assets/images/svg/plus.svg')}}" alt="">
                        </span>
                        <span class="down" onclick="down(event)">
                            <img src="{{ asset('assets/images/svg/minus.svg')}}" alt="">
                        </span>
                    </div>
                </div>
                @if(!empty($product['offers']))
                    <div class="catalog__item-offer">Похожие товары: {{$product['offers']}} </div>
                @else
                    <div class="catalog__item-offer">уникальный товар</div>
                @endif
            </div>
        </div>
    </div>
</div>
