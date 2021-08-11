<div class="catalog-min">
    <div class="container">
        <div class="catalog-min__top">
            <div class="catalog-min__top-title">
                @if(!empty($category['image']))
                    <img src="{{ $category['image'] }}" alt="">
                @else
                    <img src="{{asset('assets/images/svg/logo.svg')}}" alt="">
                @endif
                {{ $category['title'] }}
            </div>
            <a class="button button-all" href="{{ route('category.index', ['slug_category' => $category['slug']]) }}">
                смотреть еще
            </a>
        </div>
        <div class="row">
            @foreach($category['products'] as $product)
                @include('layouts.catalog.product')
            @endforeach
        </div>
    </div>
</div>
