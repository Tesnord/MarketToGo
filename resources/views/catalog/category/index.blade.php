{{--
@extends('layouts.layout')

@section('content')
    <div class="breadcrumb-block">
        <div class="container">
            {{ Diglactic\Breadcrumbs\Breadcrumbs::render('category.index', $breadcrumbs) }}
        </div>
    </div>
    <div class="title-main">
        <div class="container">
            <div class="title-main__inner">
                <h1>{{ $category['title'] }}</h1>
                <div class="title-main__numb">{{ $category['count'] }} товаров</div>
            </div>
        </div>
    </div>
    @foreach($children as $category)
        @include('layouts.catalog.product_min_list')
    @endforeach

    --}}
{{--        <div class="title-main">
                <div class="container">
                    <div class="title-main__inner">
                        <h1>{{ $category->name }}</h1>
                        <div class="title-main__numb">{{ $products->count() }}</div>
                    </div>
                </div>
            </div>
            @foreach($sub_categories as $sub_category)
                <div class="catalog-min">
                    <div class="container">
                        <div class="catalog-min__top">
                            <div class="catalog-min__top-title">
                                @foreach($sub_category->getImages() as $image)
                                <img src="{{ asset($image->src) }}" alt=''>
                                @endforeach
                                {{ $sub_category->name }}
                            </div>
                            <a class="button button-all"
                               href="{{ route('catalog.index', ['path' => $sub_category->getPath()]) }}">
                                смотреть еще
                            </a>
                        </div>
                        <div class="row">
                            @foreach($sub_category->qProductsRcsv()->paginate(20) as $product)
                                @include('layouts.catalog.product')
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach--}}{{--


@endsection
--}}
