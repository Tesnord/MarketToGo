@extends('layouts.layout')

@section('content')

    <div class="breadcrumb-block">
        <div class="container">
            {{ Diglactic\Breadcrumbs\Breadcrumbs::render('brand.catalog', $slug) }}
        </div>
    </div>
    <div class="title-main">
        <div class="container">
            <div class="title-main__inner">
                <div class="catalog-brand-title__main-show">
                    <div class="catalog-brand-title__logo-show">
                        <img src="{{asset('assets/images/logo-i.png')}}" alt="">
                    </div>
                    <h1>{{ $brand['title'] }}</h1>
                    <div class="title-main__numb">{{ $brand['count'] }} товаров</div>
                </div>
            </div>
        </div>
    </div>
    <div class="catalog">
        <div class="container">
            <div class="catalog__inner">
                @include('layouts.catalog.filter')
                @include('layouts.catalog.product_list')
            </div>
        </div>
    </div>

@endsection
