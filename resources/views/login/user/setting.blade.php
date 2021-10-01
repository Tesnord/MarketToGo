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
                        <p>Здесь вы можете менять свои личные данные, управлять аккаунтом и настройками
                            безопасности.</p>
                        <div class="order__wrap mt-4">
                            <div class="order__delivery">
                                <div class="order__wrap-top">
                                    <div class="order__wrap-title">Личные данные</div>
                                </div>
                                <div class="order__input">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="order__input-cell">
                                                <input class="form__input-effect @if(!empty($profile['name'])) has-content @endif name" type="text" id="nm1"
                                                       value="{{ $profile['name'] }}">
                                                <label for="nm1">Имя *</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="order__input-cell">
                                                <input class="form__input-effect @if(!empty($profile['surname'])) has-content @endif surname" type="text" id="nm2"
                                                       value="{{$profile['surname']}}">
                                                <label for="nm2">Фамилия *</label>
                                            </div>
                                        </div>
                                        {{--<div class="col-lg-6 col-md-6">
                                            <div class="order__input-cell">
                                                <input class="form__input-effect" type="text" id="nm3">
                                                <label for="nm3">Телефон *</label>
                                            </div>
                                        </div>--}}
                                        <div class="col-lg-6 col-md-6">
                                            <div class="order__input-cell">
                                                <input class="form__input-effect @if(!empty($profile['email'])) has-content @endif email" type="text" id="nm4"
                                                       value="{{$profile['email']}}">
                                                <label for="nm4">Электронная почта</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="order__wrap">
                            <div class="order__delivery">
                                <div class="order__wrap-top">
                                    <div class="order__wrap-title">Доставка</div>
                                </div>
                                <div class="order__input">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="order__input-cell">
                                                <input class="form__input-effect @if(!empty($profile['address']['street'])) has-content @endif street" type="text" id="address1"
                                                       value="{{ $profile['address']['street'] }}">
                                                <label for="address1">Адрес *</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="order__input-cell">
                                                <input class="form__input-effect @if(!empty($profile['address']['apartment'])) has-content @endif apartment" type="text" id="address2"
                                                       value="{{ $profile['address']['apartment'] }}">
                                                <label for="address2">Квартира *</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="order__input-cell">
                                                <input class="form__input-effect @if(!empty($profile['address']['floor'])) has-content @endif floor" type="text" id="address3"
                                                       value="{{ $profile['address']['floor'] }}">
                                                <label for="address3">Этаж</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="order__input-cell">
                                                <input class="form__input-effect @if(!empty($profile['address']['entrance'])) has-content @endif entrance" type="text" id="address4"
                                                       value="{{ $profile['address']['entrance'] }}">
                                                <label for="address4">Подъезд</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="order__input-cell">
                                                <input class="form__input-effect @if(!empty($profile['address']['intercom'])) has-content @endif intercom" type="text" id="address5"
                                                       value="{{ $profile['address']['intercom'] }}">
                                                <label for="address5">Домофон</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lk__setting-form">
                            <div class="lk__setting-form-title">Согласен получать новостную рассылку</div>
                            <div class="order__point-check">
                                <input type="checkbox" id="check2" name="check2">
                                <label for="check2">Разрешить уведомления по e-mail</label>
                            </div>
                        </div>
                        <div class="button-group">
                            <a class="button button-secondary save" href="javascript:void(0)">Сохранить</a>
                            <a class="button button-tx" href="javascript:void(0)">сбросить</a>
                        </div>
                    </div>
                </div>
                @include('layouts.user.nav')
            </div>
        </div>
    </div>
@endsection
