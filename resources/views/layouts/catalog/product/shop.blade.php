@if(isset($product['shop']))
    <a class="card-product__shop" href="{{ route('shop.show', ['slug_shop' => $product['shop']['slug']]) }}">
        <div class="card-product__shop-img">
            <img src="{{ asset($product['shop']['image']) }}" alt=""></div>
        <div class="card-product__shop-tx">
            <div class="card-product__shop-tt">Продавец</div>
            <div class="card-product__shop-title">{{ $product['shop']['title'] }}</div>
            <div class="card-product__shop-tt">{{ $product['shop']['subTitle'] }}</div>
        </div>
        <div class="card-product__deliv-icon">
            <img src="{{ asset('assets/images/svg/inf.svg') }}" alt="">
            <div class="card-product__deliv-icon-inf">{{ $product['shop']['info'] }}</div>
        </div>
    </a>
@endif
