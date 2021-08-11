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
        <div class="catalog__item-tx">
            <a class="catalog__item-title" href="{{ route('product', ['slug_product' => $product['slug']]) }}">
                {{ $product['title'] }}
            </a>
            <div class="catalog__item-numb">{{ $product['subTitle'] }}</div>
            <div class="catalog__item-bottom">
                <div class="catalog__item-info">
                    <div class="catalog__item-price">
                        <div class="catalog__item-price-old">
                            {{ $product['oldPrice']['value'] }}
                            {{ $product['oldPrice']['currency'] }}
                        </div>
                        <div class="catalog__item-price-now">
                            {{ $product['price']['value'] }}
                            {{ $product['price']['currency'] }}
                        </div>
                    </div>
{{--                    <div class="catalog__item-amount">--}}
{{--                        <input type="text" value="1">--}}
{{--                        <span class="up">--}}
{{--                            <img src="{{ asset('assets/images/svg/plus.svg')}}" alt="">--}}
{{--                        </span>--}}
{{--                        <span class="down">--}}
{{--                            <img src="{{ asset('assets/images/svg/minus.svg')}}" alt="">--}}
{{--                        </span>--}}
{{--                    </div>--}}
                    <a class="catalog__item-buy" data-product-id="{{ $product['_id']  }}" style="color: #ffffff">купить
                        <img src="{{ asset('assets/images/svg/cart.svg')}}" alt="">
                    </a>
                </div>
                <a class="catalog__item-offer" href="#">5 предложений</a>
{{--                <a class="catalog__item-offer" href="#">уникальный товар</a>--}}
            </div>
        </div>
    </div>
</div>
