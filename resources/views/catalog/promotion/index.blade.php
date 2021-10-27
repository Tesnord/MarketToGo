@extends('layouts.layout')

@section('content')

    <div class="breadcrumb-block">
        <div class="container">
            {{ Diglactic\Breadcrumbs\Breadcrumbs::render('promotions.index') }}
        </div>
    </div>
    <div class="title-main">
        <div class="container">
            <div class="title-main__inner">
                <h1>Акции</h1>
            </div>
        </div>
    </div>
    <div class="actions">
        <div class="container">
            <div class="row">
                @foreach($promotions as $promotion)
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="actions__item">
                            <a class="actions__item-img" href="{{ route('promotions.show', ['slug_promotion' => $promotion['slug']]) }}" style="background-image: url('{{ asset($promotion['image']) }}')">
                                <span class="actions__item-label">еще 7 дней</span>
                            </a>
                            <div class="actions__item-tx">
                                <div class="actions__item-data">{{ $promotion['date'] }}</div>
                                <a class="actions__item-title" href="{{ route('promotions.show', ['slug_promotion' => $promotion['slug']]) }}">{{$promotion['title']}}</a>
                                <div class="actions__item-firm">{{$promotion['shop']}}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{--<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="actions__item"><a class="actions__item-img" href="{{ route('promotions.show') }}" style="background-image: url('{{ asset('assets/images/action-img2.jpg') }}')"></a>
                        <div class="actions__item-tx">
                            <div class="actions__item-data">с 2 ноября по 4 апреля</div><a class="actions__item-title" href="{{ route('promotions.show') }}">Неделя черных суперцен</a>
                            <div class="actions__item-firm">ООО «Мир здоровья»</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="actions__item"><a class="actions__item-img" href="{{ route('promotions.show') }}" style="background-image: url('{{ asset('assets/images/action-img3.jpg') }}')"></a>
                        <div class="actions__item-tx">
                            <div class="actions__item-data">с 2 ноября по 4 апреля</div><a class="actions__item-title" href="{{ route('promotions.show') }}">Неделя черных суперцен</a>
                            <div class="actions__item-firm">ООО «Мир здоровья»</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="actions__item"><a class="actions__item-img" href="{{ route('promotions.show') }}" style="background-image: url('{{ asset('assets/images/action-img4.jpg') }}')"></a>
                        <div class="actions__item-tx">
                            <div class="actions__item-data">с 2 ноября по 4 апреля</div><a class="actions__item-title" href="{{ route('promotions.show') }}">Неделя черных суперцен</a>
                            <div class="actions__item-firm">ООО «Мир здоровья»</div>
                        </div>
                    </div>
                </div>--}}
            </div>
            {{ $paginator->render('layouts.vendor.pagination.bootstrap-4') }}
        </div>
    </div>

@endsection
