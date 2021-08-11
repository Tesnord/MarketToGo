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
                <div class="title-main__numb">{{ count($brand_item['brands']) }}</div>
            </div>
        </div>
    </div>
    <div class="brands">
        <div class="container">
            <div class="brands__inner">
                @include('layouts.catalog.brand.letters')
                <div class="brands__all">
                    <div class="brands__all-title">{{ $brand_item['letter'] }}</div>
                    <div class="brands__all-inner">
                        @foreach($brand_item['brands'] as $brand)
                            <a class="brands__all-item" href="{{ route('brand.catalog', ['slug_brand' => $brand['slug']])}}">
                                <span>{{ $brand['title'] }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
