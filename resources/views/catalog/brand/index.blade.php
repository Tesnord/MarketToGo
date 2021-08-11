@extends('layouts.layout')

@section('content')


    <div class="breadcrumb-block">
        <div class="container">
            {{ Diglactic\Breadcrumbs\Breadcrumbs::render('brands') }}
        </div>
    </div>
    <div class="title-main">
        <div class="container">
            <div class="title-main__inner">
                <h1>Бренды</h1>
                <div class="title-main__numb">{{ count($brands) }}</div>
            </div>
        </div>
    </div>
    <div class="brands">
        <div class="container">
            <div class="brands__inner">
                @include('layouts.catalog.brand.letters')
                @foreach($brands as $brand)
                    @if($brand['avillable'])
                        <div class="brands__all">
                            <div class="brands__all-title">{{ $brand['letter'] }}</div>
                            <div class="brands__all-inner brands__all-inner-tw">
                                @foreach($brand['list'] as $list)
                                    <a class="brands__all-item" href="{{ route('brand.catalog', ['slug_brand' => $list['slug']])}}">
                                        <span>{{ $list['title'] }}</span>
                                    </a>
                                @endforeach
                                <a class="brands__all-item brands__all-item-link" href="{{ route('brand.show', ['slug_letter' => $brand['slug']])}}">
                                    <span>Все бренды на {{ $brand['letter'] }}</span>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

@endsection
