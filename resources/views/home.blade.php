@extends('layouts.layout')

@section('content')

    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-12">
                    <div class="banner__big">
                        <div class="banner__big-slider js-banner-big">
                            <div class="banner__big-slider-item" style="background-image: url('{{ asset('assets/images/banner1.jpg')}}')">
                                <div class="banner__big-slider-title">Ура! Мы открылись</div>
                                <div class="banner__big-slider-tx">В честь открытия дарим скидку 10% на все!</div><a class="button button-bord" href="#">Узнать больше</a>
                            </div>
                            <div class="banner__big-slider-item" style="background-image: url('{{ asset('assets/images/banner1.jpg')}}')">
                                <div class="banner__big-slider-title">Ура! Мы открылись</div>
                                <div class="banner__big-slider-tx">В честь открытия дарим скидку 10% на все!</div><a class="button button-bord" href="#">Узнать больше</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="banner__al">
                        <div class="banner__min-in"><a class="banner__min" href="#" style="background-image: url('{{ asset('assets/images/banner2.jpg')}}')"><span class="banner__min-title">Скидки до 25%<br>на батончики Jimmy</span></a></div>
                        <div class="banner__min-in"><a class="banner__min" href="#" style="background-image: url('{{ asset('assets/images/banner3.jpg')}}')"><span class="banner__min-title">Спецпредложение<br>на овощи и фрукты</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach($categories as $category)
        @include('layouts.catalog.product_min_list')
    @endforeach
    {{--<div class="delivery">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="delivery__info">
                        <img class="img-fluid" src="{{ asset('assets/images/svg/delivery-img.svg')}}" alt="">
                        <div class="delivery__info-title">Доставка 24/7</div>
                        <p>Мы доставим ваш заказ в течение 1,5 часа. В нашей команде только вежливые и пунктуальные курьеры.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="delivery__order" style="background-image: url('{{ asset('assets/images/delivery-bg.jpg')}}')">
                        <div class="delivery__order-title">Хотите оформить регулярную доставку своих любимых продуктов?</div>
                        <p>Оформите подписку в личном кабинете и еженедельно получайте выбранные вами продукты на дом.</p>
                        <a class="button button-bord" href="#">Узнать больше</a>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
    <div class="delivery-tw" style="background-image: url('{{ asset('assets/images/delivery-bg2.jpg')}}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="delivery-tw__img">
                        <img class="img-fluid" src="{{ asset('assets/images/svg/delivery-img3.svg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="delivery-tw__info">
                        <div class="delivery-tw__title">MarketToGo –<br>доставка продуктов на дом</div>
                        <p>На складе строго соблюдаются нормы товарного соседства и контроль сроков годности, а для сохранности продуктов во время транспортировки используются только современные автомобили, обеспечивающие необходимый температурный режим.</p>
                        <div class="delivery-tw__list">
                            <div class="delivery-tw__list-item">
                                <img src="{{ asset('assets/images/svg/delivery-i1.svg')}}" alt=''> свежесть<br>и качество
                            </div>
                            <div class="delivery-tw__list-item">
                                <img src="{{ asset('assets/images/svg/delivery-i2.svg')}}" alt=''> все на<br>каждый день
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
