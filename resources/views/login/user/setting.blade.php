@extends('layouts.layout')

@section('content')

    <div class="breadcrumb-block">
        <div class="container">
            {{ Diglactic\Breadcrumbs\Breadcrumbs::render('personal.setting') }}
        </div>
    </div>
    <div class="title-main">
        <div class="container">
            <div class="title-main__inner">
                <h1>Настройки профиля</h1>
            </div>
        </div>
    </div>
    <div class="lk">
        <div class="container">
            <div class="lk__inner">
                <div class="lk__left">
                    <div class="lk__setting">
                        <p>Здесь вы можете менять свои личные данные, управлять аккаунтом и настройками безопасности.</p>
                        <div class="lk__setting-form">
                            <div class="lk__setting-form-title">Личные данные</div>
                            <div class="lk__setting-form-cell">
                                <input class="form__input-effect has-content" type="text" id="name-lk" value="Геннадий">
                                <label for="name-lk">Имя *</label>
                            </div>
                            <div class="lk__setting-form-cell">
                                <input class="form__input-effect has-content" type="text" id="name-lk2" value="Рожков">
                                <label for="name-lk2">Фамилия *</label>
                            </div>
                            <div class="lk__setting-form-cell">
                                <input class="form__input-effect" type="text" id="email-lk2">
                                <label for="email-lk2">Электронная почта</label>
                            </div>
                            <div class="lk__setting-form-cell">
                                <input class="form__input-effect" type="text" id="code-lk2">
                                <label for="code-lk2">Телефон *</label>
                                <div class="lk__setting-form-edit">
                                    <img src="{{ asset('assets/images/svg/edit.svg') }}" alt="">
                                </div>
                            </div>
{{--                            Подтверждение номера телефона--}}
                            {{--<div class="lk__setting-form-cell">
                                <input class="form__input-effect has-content" type="text" id="code-lk2" value="32585">
                                <label for="code-lk2">Код из SMS</label>
                                <div class="lk__setting-form-btn">
                                    <img src="assets/images/svg/arrow3.svg" alt="">
                                </div>
                                <div class="lk__setting-form-message">
                                    На указаный номер мы выслали SMS с кодом подтверждения.
                                    Пожалуйста, введите его в данное поле.
                                </div>
                            </div>--}}
                        </div>
                        <div class="lk__setting-form">
                            <div class="lk__setting-form-title">Уведомления</div>
                            <div class="order__point-check">
                                <input type="checkbox" id="check2" name="check2">
                                <label for="check2">Разрешить уведомления по e-mail</label>
                            </div>
                        </div>
                        <div class="button-group">
                            <a class="button button-secondary" href="#">Сохранить</a>
                            <a class="button button-tx" href="#">сбросить</a>
                        </div>
                    </div>
                </div>
                @include('layouts.user.nav')
            </div>
        </div>
    </div>
@endsection
