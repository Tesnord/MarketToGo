@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="breadcrumb-block">
                {{ Diglactic\Breadcrumbs\Breadcrumbs::render('provider') }}
        </div>
        <div class="title-main">
            <div class="title-main__inner">
                <h1>Поставщикам</h1>
            </div>
        </div>
        <div class="provider">
            <div class="provider--text">
                <h2 class="provider--text__head">Кто мы?</h2>
                <p class="provider--text__body">Market To Go – площадка для развития и сотрудничества с партнерами, которые хотят продавать качественные товары вместе с нами.</p>
                <p class="provider--text__body">Наш Маркетплейс — это онлайн-витрина с тысячами товаров. Клиент может за пару кликов приобрести нужные для себя продукты и не только.</p>

                <h2 class="provider--text__head">Почему вам выгодно становиться нашим партнером?</h2>
                <p class="provider--text__body">Успех продаж во многом зависит от выбора товара и правильного экономического расчета. У нас проработана система акций и аналитики, которая позволит нашим партнерам выгоднее торговать и отслеживать свои результаты.</p>

                <p class="provider--text__body">Чтобы понять потребности наших клиентов, можно изучить ассортимент платформы, почитать отзывы на конкретные товары и оценить конкуренцию.</p>
                <p class="provider--text__body">Система рекомендаций товаров и выдачи по стоимости поможет увеличивать прибыльность при выгодном ценовом предложении.</p>

                <p class="provider--text__body">Административный ресурс поставщиков предоставляет множество удобных функций, чтобы быстро приступить к торговле на площадке.</p>
                <p class="provider--text__body">Если товары уже продаются на маркетплейсе, вы сможете их дублировать с правками исключительных для вашего торгового предложения параметров.</p>

                <h2 class="provider--text__head">Кто может стать поставщиком и что для этого нужно?</h2>

                <p class="provider--text__body">Поставщиком может стать Юридическое лицо и Индивидуальный предприниматель. С нами могут работать как производители, так и посредники.</p>
                <p class="provider--text__body">При регистрации нам понадобятся следующие данные:</p>
                <ul class="faq__list">
                    <li class="faq__item">
                        <p class="faq__item--text">ИНН</p>
                    </li>
                    <li class="faq__item">
                        <p class="faq__item--text">Код ОКВЭД</p>
                    </li>
                    <li class="faq__item">
                        <p class="faq__item--text">ФИО представителя</p>
                    </li>
                    <li class="faq__item">
                        <p class="faq__item--text">Название организации</p>
                    </li>
                </ul>
                <p class="provider--text__body">Мы ждем вас в рядах поставщиков Market To Go</p>
            </div>
            <div class="provider--link">
                <h3>Хотите стать поставщиком?</h3>
                <p>Перейдите в портал для поставщиков и начните размещать товары на Market To Go</p>
                <a href="http://80.78.246.225:4003/login" target="_blank">Перейти в портал</a>
            </div>
        </div>
    </div>

@endsection
