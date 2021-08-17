@extends('layouts.layout')

@section('content')

    <div class="check-in">
        <div class="container">
            <div class="check-in__inner">

                <div class="check-in__tx">
                    <h1>Войти или зарегистрироваться</h1>
                    <div class="check-in__input" id="phoneForm">
                        <div class="registration">
                            <div class="check-in__tx phone">
                                <p>Чтобы сохранять корзину, получать промокоды и следить за своей историей покупок</p>
                                <div class="order__input-cell">
                                    <input class="form__input-effect phone" name="tel" type="tel" id="tel">
                                    <label for="tel">Телефон *</label>
                                </div>
                                <button type="submit" data-login="true" class="button button-secondary w-100 phone">
                                    Получить код из SMS
                                </button>
                            </div>
                            <div class="check-in__tx code" style="display: none">
                                <p>Мы отправили код подтверждения на номер <span class="phone"></span></p>
                                <div class="order__input-cell">
                                    <input class="form__input-effect code" type="text" id="code">
                                    <label for="tl">Код из SMS</label>
                                </div>
                                <p class="codetime">Отправить код ещё раз через <span class="time"></span> сек.</p>
                                <p class="codelink" style="display: none"><a href="javascript:void(0)">Отправить ещё раз</a></p>
                                <button type="submit" class="button button-secondary w-100 code">
                                    Подтвердить
                                </button>
                            </div>
                            <div class="check-in__soc">
                                <a class="check-in__soc-item" href="#">С помощью Facebook
                                    <img src="{{ asset('assets/images/svg/fc.svg') }}" alt="">
                                </a>
                                <a class="check-in__soc-item" href="#">С помощью Google
                                    <img src="{{ asset('assets/images/svg/gm.svg') }}" alt="">
                                </a>
                                <a class="check-in__soc-item" href="#">С помощью ВКонтакте
                                    <img src="{{ asset('assets/images/svg/vk2.svg') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="check-in__img">
                    <img src="{{ asset('assets/images/svg/check-in-img.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>

@endsection
