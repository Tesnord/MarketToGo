@extends('layouts.layout')

@section('content')

    <div class="breadcrumb-block">
        <div class="container">
{{--            {{ Diglactic\Breadcrumbs\Breadcrumbs::render('promotions.show') }}--}}
        </div>
    </div>
    <div class="title-main">
        <div class="container">
            <div class="title-main__inner">
                <h1>{{$promotion['title']}}</h1>
            </div>
        </div>
    </div>
    <div class="actions-item">
        <div class="container">
            <div class="actions-item__inner">
                <div class="actions-item__left">
                    <div class="actions-item__img"><img class="img-fluid" src="{{ asset($promotion['image']) }}" alt=""></div>
                    <div class="actions-item__info">
                        <div class="actions-item__info-item">
                            <div class="actions-item__info-title">дата публикации</div>
                            <div class="actions-item__info-tx">{{$promotion['created']}}</div>
                        </div>
                        <div class="actions-item__info-item">
                            <div class="actions-item__info-title">срок действия акции</div>
                            <div class="actions-item__info-tx">{{$promotion['date']}}</div>
                        </div>
                    </div>
                </div>
                <div class="actions-item__right">
                    <div class="actions-item__top">
                        <div class="actions-item__logo"><img class="img-fluid" src="{{ asset($promotion['shop']['image']) }}" alt=""></div>
                        <div class="actions-item__title">{{$promotion['shop']['title']}}</div>
                    </div>
                    {{$promotion['description']}}
                </div>
            </div>
        </div>
    </div>
    <div class="title-main tw">
        <div class="container">
            <div class="title-main__inner">
                <h1>Товары</h1>
                <div class="title-main__numb">{{ count($promotion['products']) }} товаров</div>
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
