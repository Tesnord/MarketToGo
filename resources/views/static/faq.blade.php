@extends('layouts.layout')

@section('content')

    <div class="breadcrumb-block">
        <div class="container">
            {{ Diglactic\Breadcrumbs\Breadcrumbs::render('faq') }}
        </div>
    </div>
    <div class="title-main">
        <div class="container">
            <div class="title-main__inner">
                <h1>Вопросы и ответы</h1>
            </div>
        </div>
    </div>
    <div class="faq">
        <div class="container">
            <div class="faq__inner">

                <h2 class="faq__title">Заказы</h2>
                <button class="faq__button collapsed" type="button" data-toggle="collapse" data-target="#faq-1">Как оформить заказ?
                    <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.6762 7.70792L4.88741 0.828385C4.45556 0.390537 3.75539 0.390537 3.32376 0.828385C2.89208 1.26584 2.89208 1.97536 3.32376 2.41278L9.33078 8.50011L3.32393 14.5872C2.89226 15.0249 2.89226 15.7343 3.32393 16.1718C3.7556 16.6094 4.45574 16.6094 4.88759 16.1718L11.6764 9.29214C11.8922 9.0733 12 8.7868 12 8.50015C12 8.21336 11.892 7.92665 11.6762 7.70792Z" fill="black"/>
                    </svg>
                </button>
                <div class="collapse faq__text" id="faq-1">
                    <div class="">
                        Для оформления заказа нужно добавить товары в корзину на минимальную сумму в 1000 рублей. Далее в корзине можно будет переходить к оформлению заказа.
                    </div>
                </div>
                <button class="faq__button collapsed" type="button" data-toggle="collapse" data-target="#faq-2">Как редактировать наполнение заказа во время оформления?
                    <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.6762 7.70792L4.88741 0.828385C4.45556 0.390537 3.75539 0.390537 3.32376 0.828385C2.89208 1.26584 2.89208 1.97536 3.32376 2.41278L9.33078 8.50011L3.32393 14.5872C2.89226 15.0249 2.89226 15.7343 3.32393 16.1718C3.7556 16.6094 4.45574 16.6094 4.88759 16.1718L11.6764 9.29214C11.8922 9.0733 12 8.7868 12 8.50015C12 8.21336 11.892 7.92665 11.6762 7.70792Z" fill="black"/>
                    </svg>
                </button>
                <div class="collapse faq__text" id="faq-2">
                    <div class="">
                        Редактирование заказа происходит в корзине до оформления, так как есть минимальная сумма заказа.
                    </div>
                </div>
                <button class="faq__button collapsed" type="button" data-toggle="collapse" data-target="#faq-3">Почему могут быть не все товары в корзине при повторении заказа?
                    <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.6762 7.70792L4.88741 0.828385C4.45556 0.390537 3.75539 0.390537 3.32376 0.828385C2.89208 1.26584 2.89208 1.97536 3.32376 2.41278L9.33078 8.50011L3.32393 14.5872C2.89226 15.0249 2.89226 15.7343 3.32393 16.1718C3.7556 16.6094 4.45574 16.6094 4.88759 16.1718L11.6764 9.29214C11.8922 9.0733 12 8.7868 12 8.50015C12 8.21336 11.892 7.92665 11.6762 7.70792Z" fill="black"/>
                    </svg>
                </button>
                <div class="collapse faq__text" id="faq-3">
                    <div class="">
                        При повторном заказе товары добавляются в корзину. Если часть товаров отсутствует, значит товар на данное время отсутствует в продаже.
                    </div>
                </div>
                <button class="faq__button collapsed" type="button" data-toggle="collapse" data-target="#faq-4">Почему не получается сделать заказ?
                    <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.6762 7.70792L4.88741 0.828385C4.45556 0.390537 3.75539 0.390537 3.32376 0.828385C2.89208 1.26584 2.89208 1.97536 3.32376 2.41278L9.33078 8.50011L3.32393 14.5872C2.89226 15.0249 2.89226 15.7343 3.32393 16.1718C3.7556 16.6094 4.45574 16.6094 4.88759 16.1718L11.6764 9.29214C11.8922 9.0733 12 8.7868 12 8.50015C12 8.21336 11.892 7.92665 11.6762 7.70792Z" fill="black"/>
                    </svg>
                </button>
                <div class="collapse faq__text" id="faq-4">
                    <div class="">
                        Если у вас не получается сделать заказ, попытайтесь снова или свяжитесь с нашей <br> службой поддержки 8 800 456 25 14.
                        <ul class="faq__list">
                            <li class="faq__item"><p class="faq__item--text">Подробно расскажите о трудностях, которые у вас возникли.</p></li>
                            <li class="faq__item"><p class="faq__item--text">Если знаете, укажите название и версию используемого браузера.</p></li>
                        </ul>
                    </div>
                </div>
                <button class="faq__button collapsed" type="button" data-toggle="collapse" data-target="#faq-5">Есть ли точки самовывоза?
                    <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.6762 7.70792L4.88741 0.828385C4.45556 0.390537 3.75539 0.390537 3.32376 0.828385C2.89208 1.26584 2.89208 1.97536 3.32376 2.41278L9.33078 8.50011L3.32393 14.5872C2.89226 15.0249 2.89226 15.7343 3.32393 16.1718C3.7556 16.6094 4.45574 16.6094 4.88759 16.1718L11.6764 9.29214C11.8922 9.0733 12 8.7868 12 8.50015C12 8.21336 11.892 7.92665 11.6762 7.70792Z" fill="black"/>
                    </svg>
                </button>
                <div class="collapse faq__text" id="faq-5">
                    <div class="">
                        На данный момент заказы доставляют наши высококвалифицированные курьеры. В будущем, возможно, откроются и стационарные точки магазинов.
                    </div>
                </div>

                <h2 class="faq__title">Об оплате</h2>
                <button class="faq__button collapsed" type="button" data-toggle="collapse" data-target="#faq-6">Какие есть способы оплаты?
                    <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.6762 7.70792L4.88741 0.828385C4.45556 0.390537 3.75539 0.390537 3.32376 0.828385C2.89208 1.26584 2.89208 1.97536 3.32376 2.41278L9.33078 8.50011L3.32393 14.5872C2.89226 15.0249 2.89226 15.7343 3.32393 16.1718C3.7556 16.6094 4.45574 16.6094 4.88759 16.1718L11.6764 9.29214C11.8922 9.0733 12 8.7868 12 8.50015C12 8.21336 11.892 7.92665 11.6762 7.70792Z" fill="black"/>
                    </svg>
                </button>
                <div class="collapse faq__text" id="faq-6">
                    <div class="">
                        Market To Go предусматривает 3 способа оплаты для своих клиентов:
                        <ul class="faq__list">
                            <li class="faq__item">
                                <p class="faq__item--text">Оплата картой</p>
                            </li>
                            <li class="faq__item">
                                <p class="faq__item--text">Оплата по QR коду курьеру </p>
                            </li>
                            <li class="faq__item">
                                <p class="faq__item--text">Наличными с возможность заранее подготовить сдачу под указанный номинал.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <button class="faq__button collapsed" type="button" data-toggle="collapse" data-target="#faq-7">Возникают проблемы с онлайн оплатой заказа?
                    <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.6762 7.70792L4.88741 0.828385C4.45556 0.390537 3.75539 0.390537 3.32376 0.828385C2.89208 1.26584 2.89208 1.97536 3.32376 2.41278L9.33078 8.50011L3.32393 14.5872C2.89226 15.0249 2.89226 15.7343 3.32393 16.1718C3.7556 16.6094 4.45574 16.6094 4.88759 16.1718L11.6764 9.29214C11.8922 9.0733 12 8.7868 12 8.50015C12 8.21336 11.892 7.92665 11.6762 7.70792Z" fill="black"/>
                    </svg>
                </button>
                <div class="collapse faq__text" id="faq-7">
                    <div class="">
                        Ошибки с оплатой возможны по нескольким причинам:
                        <ul class="faq__list">
                            <li class="faq__item">
                                <p class="faq__item--text">Введены неверные данные банковской карты.</p>
                            </li>
                            <li class="faq__item">
                                <p class="faq__item--text">Карта не обслуживается по истечению срока действия.</p>
                            </li>
                            <li class="faq__item">
                                <p class="faq__item--text">На карте недостаточно средств.</p>
                            </li>
                            <li class="faq__item">
                                <p class="faq__item--text">Банк установил запрет на оплату в интернете.</p>
                            </li>
                        </ul>
                        Попробуйте повторить оплату через 20-30 минут или свяжитесь с нашей службой поддержки 8 800 456 25 14.
                    </div>
                </div>
                <button class="faq__button collapsed" type="button" data-toggle="collapse" data-target="#faq-8">У курьера не оказалось сдачи при оплате наличными?
                    <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.6762 7.70792L4.88741 0.828385C4.45556 0.390537 3.75539 0.390537 3.32376 0.828385C2.89208 1.26584 2.89208 1.97536 3.32376 2.41278L9.33078 8.50011L3.32393 14.5872C2.89226 15.0249 2.89226 15.7343 3.32393 16.1718C3.7556 16.6094 4.45574 16.6094 4.88759 16.1718L11.6764 9.29214C11.8922 9.0733 12 8.7868 12 8.50015C12 8.21336 11.892 7.92665 11.6762 7.70792Z" fill="black"/>
                    </svg>
                </button>
                <div class="collapse faq__text" id="faq-8">
                    <div class="">
                        Проверьте, возможно вы указали, что оплата будет произведена без сдачи.
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
