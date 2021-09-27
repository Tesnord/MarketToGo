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
    <div class="catalog">
        <div class="container">
            <div class="catalog-min__labels">
                @foreach($children as $category)
                    <a class="catalog-min__labels-item"
                       href="{{ route('category.index', ['slug_category' => $category['slug']]) }}">
                        <img style="height: 35px" src="{{asset($category['image'])}}" alt="">
                        <span>{{ $category['title'] }}</span>
                    </a>
                @endforeach
            </div>
            <div class="catalog__inner">
                @include('layouts.catalog.filter')
                @include('layouts.catalog.product_list')
            </div>
        </div>
    </div>

@endsection
