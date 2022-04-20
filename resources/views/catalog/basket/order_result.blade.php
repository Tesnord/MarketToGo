@extends('layouts.layout')

@section('content')

<div class="tx">
    <div class="container">
        <div class="tx__inner">
            <div class="tx__img"><img src="{{ asset('assets/images/svg/img-b1.svg') }}" alt=""></div>
            <div class="tx__text">
                <div class="tx__title">Ваш заказ успешно создан!</div>
                <p>Заказ №{{ $request['numberId'] }} от {{ date($request['date']) }} создан.<br>Курьер свяжется с вами,
                    как только привезет ваш заказ.
                </p>
                <a class="button button-secondary" href="{{ route('home') }}">продолжить покупки</a>
            </div>
        </div>
    </div>
</div>

@endsection
