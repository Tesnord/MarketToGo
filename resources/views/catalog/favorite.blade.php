@extends('layouts.layout')

@section('content')

    <div class="breadcrumb-block">
        <div class="container">
            {{ Diglactic\Breadcrumbs\Breadcrumbs::render('favorite') }}
        </div>
    </div>
    <div class="title-main">
        <div class="container">
            <div class="title-main__inner">
                <h1>Избранное</h1>
            </div>
        </div>
    </div>
    @if(count($products))
        <div class="catalog">
            <div class="container">
                <div class="catalog__inner">
                    <div class="catalog__list">
                        <div class="row">
                            @foreach($products as $product)
{{--                                @include('layouts.catalog.product')--}}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="tx">
            <div class="container">
                <div class="tx__inner">
                    <div class="tx__img"><img src="{{ asset('assets/images/svg/img2.svg') }}" alt=""></div>
                    <div class="tx__text">
                        <div class="tx__title">Тут будут понравившиеся Вам товары!</div>
                        <p>Нажимайте <img src="{{ asset('assets/images/svg/like2.svg') }}" alt=''>, чтобы сохранять
                            товары в избранное.</p><a class="button button-secondary" href="{{ route('home') }}">начать покупки</a>
                    </div>
                </div>
            </div>
        </div>
{{--        @include('layouts.catalog.offer')--}}
    @endif

@endsection
