@extends('layouts.layout')

@section('content')

<div class="breadcrumb-block">
    <div class="container">
        {{ Diglactic\Breadcrumbs\Breadcrumbs::render('scores') }}
    </div>
</div>
<div class="title-main">
    <div class="container">
        <div class="title-main__inner">
            <h1>Баланс баллов</h1>
        </div>
    </div>
</div>
<div class="point">
    <div class="container">
        <div class="point__inner point__inner--scores">
            <div class="point__inner--left">
                @if(false)
                <div class="scores">
                    <div class="scores__block scores__access">
                        <img src="{{asset('assets/images/svg/check.svg')}}" alt="">
                        <div class="scores__block--text">
                            <p>Накопленные баллы</p>
                            <span>15</span>
                        </div>
                    </div>
                    <div class="scores__block scores__limit">
                        <img src="{{asset('assets/images/svg/flame.svg')}}" alt="">
                        <div class="scores__block--text">
                            <p>Сгорят 20 апреля</p>
                            <span>5</span>
                        </div>
                    </div>
                </div>
                <div class="point__table">
                    <div class="point__table-row">
                        <div class="point__table-cell point__table-cell-title">Дата операции</div>
                        <div class="point__table-cell point__table-cell-title">Операция</div>
                        <div class="point__table-cell point__table-cell-title">Начислено баллов</div>
                    </div>
                    <div class="point__table-row">
                        <div class="point__table-cell">
                            <div class="point__data">22.02.2021</div>
                        </div>
                        <div class="point__table-cell">
                            <div class="point__title">Покупка в MARKET TO GO</div>
                        </div>
                        <div class="point__table-cell">
                            <div class="point__price">12</div>
                        </div>
                    </div>
                    <div class="point__table-row">
                        <div class="point__table-cell">
                            <div class="point__data">16.02.2021</div>
                        </div>
                        <div class="point__table-cell">
                            <div class="point__title">Баллы в подарок</div>
                        </div>
                        <div class="point__table-cell">
                            <div class="point__price">120</div>
                        </div>
                    </div>
                    <div class="point__table-row">
                        <div class="point__table-cell">
                            <div class="point__data">16.02.2021</div>
                        </div>
                        <div class="point__table-cell">
                            <div class="point__title">Покупка в MARKET TO GO</div>
                        </div>
                        <div class="point__table-cell">
                            <div class="point__price">54</div>
                        </div>
                    </div>
                    <div class="point__table-row">
                        <div class="point__table-cell">
                            <div class="point__data">16.02.2021</div>
                        </div>
                        <div class="point__table-cell">
                            <div class="point__title">Покупка в MARKET TO GO</div>
                        </div>
                        <div class="point__table-cell">
                            <div class="point__price">86</div>
                        </div>
                    </div>
                    <div class="point__table-row">
                        <div class="point__table-cell">
                            <div class="point__data">16.02.2021</div>
                        </div>
                        <div class="point__table-cell">
                            <div class="point__title">Баллы в подарок</div>
                        </div>
                        <div class="point__table-cell">
                            <div class="point__price">121</div>
                        </div>
                    </div>
                    <div class="point__table-row">
                        <div class="point__table-cell">
                            <div class="point__data">16.02.2021</div>
                        </div>
                        <div class="point__table-cell">
                            <div class="point__title">Покупка в MARKET TO GO</div>
                        </div>
                        <div class="point__table-cell">
                            <div class="point__price">54</div>
                        </div>
                    </div>
                    <div class="point__table-row">
                        <div class="point__table-cell">
                            <div class="point__data">16.02.2021</div>
                        </div>
                        <div class="point__table-cell">
                            <div class="point__title">Покупка в MARKET TO GO</div>
                        </div>
                        <div class="point__table-cell">
                            <div class="point__price">86</div>
                        </div>
                    </div>
                    <div class="point__table-row">
                        <div class="point__table-cell">
                            <div class="point__data">16.02.2021</div>
                        </div>
                        <div class="point__table-cell">
                            <div class="point__title">Баллы в подарок</div>
                        </div>
                        <div class="point__table-cell">
                            <div class="point__price">121</div>
                        </div>
                    </div>
                </div>
                <a class="button button-all" href="#">загрузить еще</a>
                @else
                    <div class="score__hollow">
                        <h2>У вас нет накопленных баллов</h2>
                        <p>Баллы начисляются за покупки</p>
                        <a href="{{route('home')}}">начать покупки</a>
                    </div>
                @endif
            </div>
            <div class="point__inner--right">
                <div class="score__info">
                        <img src="{{asset('assets/images/svg/star.svg')}}" width="48" height="48" alt="">
                        <p>Узнайте больше об условиях начисления баллов</p>
                        <a href="{{route('score.info')}}">Узнать больше</a>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
