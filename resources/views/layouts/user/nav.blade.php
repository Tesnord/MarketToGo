<div class="lk__menu">
    <div class="lk__menu-inner">
        <ul>
            <li @if(request()->route()->getName() === "personal.index") class="active" @endif>
                <a href="{{ route('personal.index') }}">главная</a>
            </li>
            <li @if(request()->route()->getName() === "personal.setting") class="active" @endif>
                <a href="{{ route('personal.setting') }}">настройки профиля</a>
                </li>
{{--        <li @if(request()->route()->getName() === "personal.subscribe") class="active" @endif>
            <a href="{{ route('personal.subscribe') }}">подписки</a>
            </li>--}}
            <li @if(request()->route()->getName() === "personal.orders") class="active" @endif>
                <a href="{{ route('personal.orders') }}">заказы</a>
            </li>
            <li>
                <a href="javascript:void(0)" class="logout"><svg><use xlink:href="#exit"></use></svg> выйти</a>
            </li>
        </ul>
    </div>
</div>
