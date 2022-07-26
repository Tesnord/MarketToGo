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
                        <form method="POST" action="/personal/setting" class="order__wrap mt-4 profile--data__js">
                            @csrf
                            <div class="order__delivery">
                                <div class="order__wrap-top">
                                    <div class="order__wrap-title">Личные данные</div>
                                </div>
                                <div class="order__input">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="order__input-cell">
                                                <input class="form__input-effect @if(!empty($profile['name'])) has-content @endif name" name="name" type="text" id="nm1"
                                                    value="{{ $profile['name'] }}">
                                                <label for="nm1">Имя</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="order__input-cell">
                                                <input class="form__input-effect @if(!empty($profile['surname'])) has-content @endif surname" name="surname" type="text" id="nm2"
                                                    value="{{$profile['surname']}}">
                                                <label for="nm2">Фамилия</label>
                                            </div>
                                        </div>
                                        {{--<div class="col-lg-6 col-md-6">
                                            <div class="order__input-cell">
                                                <input class="form__input-effect" name="phone" type="text" id="nm3">
                                                <label for="nm3">Телефон</label>
                                            </div>
                                        </div>--}}
                                        <div class="col-lg-6 col-md-6">
                                            <div class="order__input-cell">
                                                <input class="form__input-effect @if(!empty($profile['email'])) has-content @endif email" name="email" type="text" id="nm4"
                                                    value="{{$profile['email']}}">
                                                <label for="nm4">Электронная почта</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-group__back">
                                        <button type="submit" class="button button-secondary save">Сохранить</button>
                                        <button type="reset" class="button button-tx clear">сбросить</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @foreach($addresses as $address)
                            <form method="POST" action="/personal/setting" class="order__wrap address" id="{{$address['id']}}">
                                @csrf
                                @if(!empty($address['id']))
                                    <input type="hidden" name="id" class="address-id" value="{{$address['id']}}">
                                @endif
                                <div class="order__delivery">
                                    <div class="order__wrap-top">
                                        <div class="order__wrap-title">Адрес доставки</div>
                                    </div>
                                    <div class="order__input">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="order__input-cell">
                                                    <input class="form__input-effect @if(!empty($address['street'])) has-content @endif street" name="street" type="text" id="address-street-{{$address['id']}}"
                                                        value="{{ $address['street']}}">
                                                    <label for="address-street-{{$address['id']}}">Адрес</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="order__input-cell">
                                                    <input class="form__input-effect @if(!empty($address['apartment'])) has-content @endif apartment" name="apartment" type="number" id="address-apartment-{{$address['id']}}"
                                                        value="{{ $address['apartment']}}">
                                                    <label for="address-apartment-{{$address['id']}}">Квартира</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="order__input-cell">
                                                    <input class="form__input-effect @if(!empty($address['floor'])) has-content @endif floor" name="floor" type="number" id="address-floor-{{$address['id']}}"
                                                        value="{{ $address['floor']}}">
                                                    <label for="address-floor-{{$address['id']}}">Этаж</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="order__input-cell">
                                                    <input class="form__input-effect @if(!empty($address['entrance'])) has-content @endif entrance" name="entrance" type="number" id="address-entrance-{{$address['id']}}"
                                                        value="{{ $address['entrance']}}">
                                                    <label for="address-entrance-{{$address['id']}}">Подъезд</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="order__input-cell">
                                                    <input class="form__input-effect @if(!empty($address['intercom'])) has-content @endif intercom" name="intercom" type="text" id="address-intercom-{{$address['id']}}"
                                                        value="{{ $address['intercom']}}">
                                                    <label for="address-intercom-{{$address['id']}}">Домофон</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="button-group__back">
                                        <button type="submit" class="button button-secondary save">Сохранить</button>
                                        <button type="reset" class="button button-tx clear">удалить</button>
                                    </div>
                                </div>
                            </form>
                        @endforeach
                        <div class="lk__setting__address--add">
                            <button type="button">добавить адрес</button>
                        </div>
                    </div>
                </div>
                <div class="lk__menu">
                    @include('layouts.user.nav')
                </div>
            </div>
        </div>
    </div>
@endsection
