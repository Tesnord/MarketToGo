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
        <div class="point__inner">
            <div class="point__table">
                <div class="point__table-row">
                    <div class="point__table-cell point__table-cell-title">Дата операции</div>
                    <div class="point__table-cell point__table-cell-title">Операция</div>
                    <div class="point__table-cell point__table-cell-title">Начислено баллов</div>
                </div>
                @foreach($scores as $score)
                    <div class="point__table-row">
                        <div class="point__table-cell">
                            <div class="point__data">{{ $score['date'] }}</div>
                        </div>
                        <div class="point__table-cell">
                            <div class="point__title">{{ $score['type'] }}</div>
                        </div>
                        <div class="point__table-cell">
                            <div class="point__price">{{ $score['count'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div><a class="button button-all" href="#">загрузить еще</a>
        </div>
    </div>
</div>

@endsection
