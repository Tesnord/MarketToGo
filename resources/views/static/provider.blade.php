@extends('layouts.layout')

@section('content')
    <div class="breadcrumb-block">
        <div class="container">
            {{ Diglactic\Breadcrumbs\Breadcrumbs::render('provider') }}
        </div>
    </div>
    <div class="container">
        <div class="text">
            <h1>Страница Поставщикам</h1>
        </div>
    </div>
    <div class="tx">
        <div class="container">
            <div class="tx__inner">
                <div class="tx__img"><img src="{{ asset('assets/images/svg/img5.svg') }}" alt=""></div>
                <div class="tx__text">
                    <div class="tx__title big">404</div>
                    <p>Упс! Страница, которую вы искали не найдена.<br>
                        Возможно вы ввели неправельный адрес или она была удалена.</p>
                    <a class="button button-secondary" href="{{ route('home') }}">вернуться на главную</a>
                </div>
            </div>
        </div>
    </div>

@endsection
