<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <meta http-equiv="cleartype" content="on">
    <meta http-equiv="msthemecompatible" content="no">
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.ico')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&amp;display=swap">
    <link rel="stylesheet" href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/select/select2.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{asset('vendors/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
</head><svg style="display: none">
    <symbol id="vk" viewBox="0 0 22 12" fill="none">
        <path fill="currentColor" d="M21.4956 0.812637C21.6493 0.343808 21.4956 0 20.7688 0H18.3611C17.7485 0 17.4685 0.297429 17.3148 0.624097C17.3148 0.624097 16.0907 3.36548 14.356 5.143C13.7961 5.66022 13.5403 5.82356 13.2351 5.82356C13.0825 5.82356 12.8607 5.66023 12.8607 5.1914V0.812637C12.8607 0.250042 12.6839 0 12.1734 0H8.39007C8.00801 0 7.77745 0.260125 7.77745 0.50815C7.77745 1.0405 8.64478 1.1635 8.73371 2.66375V5.91833C8.73371 6.63115 8.59428 6.76122 8.28687 6.76122C7.47114 6.76122 5.48615 4.00975 4.30812 0.860024C4.07866 0.248026 3.84701 0.00100864 3.23219 0.00100864H0.825613C0.137236 0.00100864 0 0.298438 0 0.625105C0 1.2119 0.815732 4.11561 3.7998 7.95597C5.78917 10.5784 8.58989 12 11.1414 12C12.6707 12 12.8596 11.6844 12.8596 11.14V9.15779C12.8596 8.52663 13.0056 8.3996 13.4898 8.3996C13.8455 8.3996 14.4581 8.56495 15.8865 9.82826C17.5179 11.3265 17.788 11.999 18.7047 11.999H21.1113C21.7986 11.999 22.1422 11.6834 21.9446 11.0603C21.7283 10.4403 20.9488 9.53789 19.9146 8.47017C19.3525 7.8612 18.5126 7.20585 18.2568 6.87817C17.9 6.45572 18.0032 6.2692 18.2568 5.89414C18.2579 5.89514 21.1904 2.10217 21.4956 0.812637Z"/>
    </symbol>
    <symbol id="in" viewBox="0 0 22 22" fill="none">
        <g clip-path="url(#clip0)">
            <path fill="currentColor" d="M19.2012 7.61288C19.192 6.91862 19.062 6.23126 18.8172 5.58154C18.6048 5.03352 18.2805 4.53581 17.8649 4.12022C17.4493 3.70464 16.9516 3.38031 16.4036 3.16796C15.7622 2.9272 15.0847 2.79702 14.3997 2.78296C13.5179 2.74354 13.2383 2.73254 10.9998 2.73254C8.76132 2.73254 8.4744 2.73254 7.59899 2.78296C6.91438 2.79713 6.23714 2.92731 5.59607 3.16796C5.04796 3.38016 4.55017 3.70443 4.13457 4.12004C3.71896 4.53565 3.39469 5.03343 3.18249 5.58154C2.94125 6.22242 2.81135 6.89981 2.7984 7.58446C2.75899 8.46721 2.74707 8.74679 2.74707 10.9853C2.74707 13.2238 2.74707 13.5098 2.7984 14.3861C2.81215 15.0718 2.9414 15.7483 3.18249 16.3909C3.39504 16.9388 3.71956 17.4364 4.1353 17.8518C4.55105 18.2673 5.04888 18.5914 5.59699 18.8035C6.2363 19.054 6.91366 19.1935 7.5999 19.216C8.48265 19.2555 8.76224 19.2674 11.0007 19.2674C13.2392 19.2674 13.5262 19.2674 14.4016 19.216C15.0865 19.2026 15.7641 19.0727 16.4054 18.832C16.9533 18.6194 17.4509 18.295 17.8664 17.8794C18.282 17.4638 18.6064 16.9663 18.819 16.4184C19.0601 15.7767 19.1893 15.1002 19.2031 14.4136C19.2425 13.5318 19.2544 13.2522 19.2544 11.0128C19.2526 8.77429 19.2526 8.49013 19.2012 7.61288ZM10.9943 15.2185C8.65315 15.2185 6.75657 13.3219 6.75657 10.9807C6.75657 8.63954 8.65315 6.74296 10.9943 6.74296C12.1182 6.74296 13.1961 7.18944 13.9909 7.98417C14.7856 8.7789 15.2321 9.85679 15.2321 10.9807C15.2321 12.1046 14.7856 13.1825 13.9909 13.9773C13.1961 14.772 12.1182 15.2185 10.9943 15.2185ZM15.4007 7.57438C14.8535 7.57438 14.4126 7.13254 14.4126 6.58621C14.4126 6.4565 14.4381 6.32807 14.4878 6.20823C14.5374 6.0884 14.6101 5.97951 14.7019 5.8878C14.7936 5.79608 14.9025 5.72332 15.0223 5.67369C15.1421 5.62405 15.2706 5.5985 15.4003 5.5985C15.53 5.5985 15.6584 5.62405 15.7783 5.67369C15.8981 5.72332 16.007 5.79608 16.0987 5.8878C16.1904 5.97951 16.2632 6.0884 16.3128 6.20823C16.3624 6.32807 16.388 6.4565 16.388 6.58621C16.388 7.13254 15.9462 7.57438 15.4007 7.57438Z"/>
            <path fill="currentColor" d="M10.9949 13.7335C12.5152 13.7335 13.7477 12.5011 13.7477 10.9808C13.7477 9.46048 12.5152 8.22803 10.9949 8.22803C9.47464 8.22803 8.24219 9.46048 8.24219 10.9808C8.24219 12.5011 9.47464 13.7335 10.9949 13.7335Z"/>
        </g>
        <defs>
            <clipPath id="clip0">
                <rect width="22" height="22" fill="white"/>
            </clipPath>
        </defs>
    </symbol>
    <symbol id="like" viewBox="0 0 21 18" fill="none">
        <path d="M19.9947 4.07014L19.9949 4.07075C20.3301 4.80276 20.5023 5.58306 20.5 6.38643M19.9947 4.07014L9.79871 1.45514C8.86301 0.918559 8.03381 0.500015 6.81282 0.500015C5.97131 0.500015 5.15305 0.65168 4.37911 0.953837C3.63185 1.24469 2.95603 1.66403 2.37496 2.19892C1.79483 2.73108 1.32962 3.36672 1.00725 4.07071L1.00724 4.07075C0.672026 4.80296 0.5 5.58298 0.5 6.38554C0.5 7.14696 0.665443 7.92824 0.983326 8.70957L0.983432 8.70983C1.24901 9.36155 1.62568 10.028 2.09936 10.6926L2.09953 10.6929C2.84979 11.7443 3.87125 12.8273 5.12366 13.9142C7.16756 15.6885 9.18971 16.9209 9.34376 17.0116L9.86245 17.3243L9.86341 17.3249C10.2527 17.5584 10.7473 17.5584 11.1366 17.3249L11.1375 17.3243L11.6587 17.0101C11.6587 17.0101 11.6587 17.0101 11.6588 17.0101C11.7554 16.9518 13.8018 15.7131 15.8761 13.9144L15.8763 13.9142C17.1287 12.8273 18.1502 11.7443 18.9004 10.6929L18.9006 10.6926C19.3735 10.0291 19.753 9.3623 20.0169 8.70899C20.3345 7.92815 20.4998 7.14738 20.5 6.38643M19.9947 4.07014C19.6716 3.36701 19.2068 2.73187 18.6277 2.19939C18.049 1.66616 17.3683 1.24379 16.6233 0.953941C15.8509 0.652341 15.0235 0.498275 14.1888 0.500015M19.9947 4.07014L11.2013 1.45514C12.1372 0.918458 12.9683 0.50014 14.1888 0.500015M20.5 6.38643C20.5 6.38664 20.5 6.38684 20.5 6.38705L20 6.38554H20.5C20.5 6.38584 20.5 6.38613 20.5 6.38643ZM14.1888 0.500015C14.189 0.500015 14.1892 0.500015 14.1894 0.500015V1.00001L14.1883 0.500016C14.1885 0.500015 14.1886 0.500015 14.1888 0.500015Z" fill="white" fill-opacity="0.6" stroke="currentColor"/>
    </symbol>
    <symbol id="filter" viewBox="0 0 17 11" fill="none">
        <path fill="currentColor" d="M10.75 9C10.9489 9 11.1397 9.07902 11.2803 9.21967C11.421 9.36032 11.5 9.55109 11.5 9.75C11.5 9.94891 11.421 10.1397 11.2803 10.2803C11.1397 10.421 10.9489 10.5 10.75 10.5H6.25C6.05109 10.5 5.86032 10.421 5.71967 10.2803C5.57902 10.1397 5.5 9.94891 5.5 9.75C5.5 9.55109 5.57902 9.36032 5.71967 9.21967C5.86032 9.07902 6.05109 9 6.25 9H10.75ZM13.75 4.5C13.9489 4.5 14.1397 4.57902 14.2803 4.71967C14.421 4.86032 14.5 5.05109 14.5 5.25C14.5 5.44891 14.421 5.63968 14.2803 5.78033C14.1397 5.92098 13.9489 6 13.75 6H3.25C3.05109 6 2.86032 5.92098 2.71967 5.78033C2.57902 5.63968 2.5 5.44891 2.5 5.25C2.5 5.05109 2.57902 4.86032 2.71967 4.71967C2.86032 4.57902 3.05109 4.5 3.25 4.5H13.75ZM16 0C16.1989 0 16.3897 0.0790178 16.5303 0.21967C16.671 0.360322 16.75 0.551088 16.75 0.75C16.75 0.948912 16.671 1.13968 16.5303 1.28033C16.3897 1.42098 16.1989 1.5 16 1.5H1C0.801088 1.5 0.610322 1.42098 0.46967 1.28033C0.329018 1.13968 0.25 0.948912 0.25 0.75C0.25 0.551088 0.329018 0.360322 0.46967 0.21967C0.610322 0.0790178 0.801088 0 1 0H16Z"/>
    </symbol>
    <symbol id="delete" viewBox="0 0 18 20" fill="none">
        <path fill="currentColor" d="M4 2C4 1.46957 4.21071 0.960859 4.58579 0.585786C4.96086 0.210714 5.46957 0 6 0H12C12.5304 0 13.0391 0.210714 13.4142 0.585786C13.7893 0.960859 14 1.46957 14 2V4H17C17.2652 4 17.5196 4.10536 17.7071 4.29289C17.8946 4.48043 18 4.73478 18 5C18 5.26522 17.8946 5.51957 17.7071 5.70711C17.5196 5.89464 17.2652 6 17 6H16.931L16.064 18.142C16.0281 18.6466 15.8023 19.1188 15.4321 19.4636C15.0619 19.8083 14.5749 20 14.069 20H3.93C3.42414 20 2.93707 19.8083 2.56688 19.4636C2.1967 19.1188 1.97092 18.6466 1.935 18.142L1.07 6H1C0.734784 6 0.48043 5.89464 0.292893 5.70711C0.105357 5.51957 0 5.26522 0 5C0 4.73478 0.105357 4.48043 0.292893 4.29289C0.48043 4.10536 0.734784 4 1 4H4V2ZM6 4H12V2H6V4ZM3.074 6L3.931 18H14.07L14.927 6H3.074Z"/>
    </symbol>
    <symbol id="exit" viewBox="0 0 16 16" fill="none">
        <path fill="currentColor" d="M7.62839 1C9.32251 1 10.7052 2.33432 10.7829 4.00926L10.7863 4.1579V4.82224C10.7863 5.11718 10.5472 5.35627 10.2523 5.35627C9.98191 5.35627 9.75847 5.15536 9.72311 4.8947L9.71824 4.82224V4.1579C9.71824 3.04505 8.84811 2.13518 7.75118 2.07161L7.62839 2.06806H4.15719C3.04494 2.06806 2.13517 2.93827 2.07161 4.03513L2.06806 4.1579V12.0829C2.06806 13.1957 2.93811 14.1056 4.03447 14.1692L4.15719 14.1728H7.63551C8.74442 14.1728 9.65133 13.3058 9.7147 12.2131L9.71824 12.0908V11.4193C9.71824 11.1244 9.95733 10.8853 10.2523 10.8853C10.5226 10.8853 10.7461 11.0862 10.7814 11.3468L10.7863 11.4193V12.0908C10.7863 13.7792 9.45706 15.1576 7.78814 15.2372L7.63551 15.2408H4.15719C2.46364 15.2408 1.08106 13.9064 1.00344 12.2316L1 12.0829V4.1579C1 2.46392 2.33419 1.08107 4.00859 1.00344L4.15719 1H7.62839ZM13.3212 5.61464L13.3812 5.66621L15.4661 7.74182C15.4849 7.76044 15.5013 7.7794 15.5164 7.79945L15.4661 7.74182C15.4878 7.76347 15.5073 7.78653 15.5246 7.81071C15.5367 7.82762 15.548 7.84549 15.5581 7.86403C15.56 7.86764 15.5619 7.87118 15.5637 7.87473C15.5727 7.8918 15.5807 7.90951 15.5878 7.9277C15.5906 7.93567 15.5935 7.94373 15.5962 7.95183C15.6014 7.9668 15.6058 7.98222 15.6094 7.99789C15.6112 8.00627 15.6129 8.01458 15.6144 8.02293C15.6174 8.03748 15.6195 8.0525 15.621 8.0677C15.6218 8.07828 15.6225 8.08875 15.6229 8.09923C15.6234 8.10626 15.6236 8.11329 15.6236 8.12034L15.623 8.14051C15.6225 8.15147 15.6218 8.16242 15.6207 8.17334L15.6236 8.12034C15.6236 8.1537 15.6205 8.18634 15.6146 8.218C15.6129 8.2259 15.6112 8.23425 15.6092 8.24256C15.6056 8.25907 15.6011 8.27506 15.5958 8.29072C15.5931 8.29801 15.5904 8.30538 15.5876 8.3127C15.581 8.33042 15.5733 8.34757 15.5647 8.36421C15.5626 8.36797 15.5604 8.37218 15.5581 8.37638C15.5336 8.42146 15.5029 8.46223 15.4671 8.49796L15.4661 8.49866L13.3813 10.575C13.1723 10.7831 12.8342 10.7824 12.6261 10.5734C12.4369 10.3834 12.4202 10.0867 12.5758 9.87798L12.6276 9.81819L13.7947 8.65373L6.51583 8.65437C6.22089 8.65437 5.9818 8.41528 5.9818 8.12034C5.9818 7.84998 6.1827 7.62655 6.44336 7.59119L6.51583 7.58631L13.7961 7.58567L12.6277 6.42313C12.4377 6.23396 12.4198 5.93731 12.5744 5.72791L12.626 5.66789C12.8152 5.47788 13.1118 5.45998 13.3212 5.61464Z" fill="#3F4042"  stroke-width="0.3"/>
    </symbol>
</svg>
<body>
<div class="wrapper">
    <div class="menu">
        <div class="menu__top">
            <div class="menu__top-title">Меню</div>
            <div class="menu__top-arrow js-top-arrow">
                <img src="{{asset('assets/images/svg/arrow.svg')}}" alt=''>
            </div>
            <div class="menu__top-close js-top-close">
                <img src="{{asset('assets/images/svg/close-i.svg')}}" alt=''>
            </div>
        </div>
        <a class="logo" href="{{ route('home') }}">
            <img src="{{asset('assets/images/svg/logo.svg')}}" alt=''>
            <span>Маркетплейс<br> здорового<br> питания</span>
        </a>
        @include('layouts.vendor.partials.nav')
    </div>
    <header class="header">
        <div class="header__menu-mob">
            <div class="header__menu-icon">
{{--                @auth()--}}
                    <a class="header__menu-icon-item" href="{{route('scores')}}">
                        <img src="{{asset('assets/images/svg/icon-menu3.svg')}}" alt="">
    {{--                    <span class="header__menu-icon-notif">4</span>--}}
                        <span class="header__menu-icon-tit">баллы</span>
                    </a>
{{--                @endauth--}}
                <a class="header__menu-icon-item" href="{{ route('favorite.show') }}">
                    <img src="{{asset('assets/images/svg/icon-menu4.svg')}}" alt="">
                    <span class="header__menu-icon-notif favoriteCount {{ empty($favorites) ? 'd-none' : '' }}">{{ count($favorites) }}</span>
                    <span class="header__menu-icon-tit">избранное</span>
                </a>
            </div>
            <div class="header__menu-btn-catalog js-menu-btn-catalog">каталог товаров</div>
            <ul class="header__menu-main">
{{--                <li><a href="{{ route('provider') }}">Поставщикам</a></li>--}}
                <li><a href="{{ route('about') }}">О нас</a></li>
                <li><a href="{{ route('delivery') }}">Доставка и оплата</a></li>
                <li><a href="{{ route('brand.index') }}">Бренды</a></li>
                <li><a href="{{ route('promotions.index') }}">Акции</a></li>
            </ul>
            <div class="header__menu-info">
                <div class="header__city">
                    <img src="{{asset('assets/images/svg/map-i.svg')}}" alt=""> Краснодар
                </div>
                <div class="header__tel">Центр поддержки клиентов:
                    <a href="tel: 8 800 456 25 14">8 800 456 25 14</a>
                </div>
            </div>
        </div>
        <div class="header__top">
            <div class="container">
                <div class="header__top-inner">
                    <div class="header__top-info">
                        <div class="header__city">
                            <img src="{{asset('assets/images/svg/map-i.svg')}}" alt=""> Краснодар
                        </div>
                        <div class="header__tel">Центр поддержки клиентов:
                            <a href="tel: 8 800 456 25 14">8 800 456 25 14</a>
                        </div>
                    </div>
                    <div class="header__top-menu">
                        <ul>
{{--                            <li><a href="{{ route('provider') }}">Поставщикам</a></li>--}}
                            <li><a href="{{ route('about') }}">О нас</a></li>
                            <li><a href="{{ route('delivery') }}">Доставка и оплата</a></li>
                            <li><a href="{{ route('brand.index') }}">Бренды</a></li>
                            <li><a href="{{ route('promotions.index') }}">Акции</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="container">
                <div class="header__bottom-inner">
                    <div class="header__toggler js-toggler"></div>
                    <a class="header__logo-mob" href="{{ route('home') }}">
                        <img src="{{asset('assets/images/svg/logo-mob.svg')}}" alt="">
                    </a>
                    <div class="header__search">
                        <form>
                            <input type="text" placeholder="Что вы ищете?">
                            <button class="header__search-btn" type="button">
                                <img src="{{asset('assets/images/svg/search.svg')}}" alt="">
                            </button>
                            <div class="header__search-clean">
                                <img src="{{asset('assets/images/svg/close-i.svg')}}" alt="">
                            </div>
                        </form>
                    </div>
                    <div class="header__bottom-info">
                        @if(session()->has('token'))
                            <a class="header__bottom-info-item" href="{{ route('scores') }}">
                                <img src="{{asset('assets/images/svg/icon-header1.svg')}}" alt=""> баллы
    {{--                            <span class="header__bottom-info-notif">4</span>--}}
                            </a>
                        @endif
                        <a class="header__bottom-info-item" href="{{ route('favorite.show') }}">
                            <img src="{{asset('assets/images/svg/icon-header2.svg')}}" alt=""> избранное
                            <span class="header__bottom-info-notif favoriteCount {{ empty($favorites) ? 'd-none' : '' }}">{{ count($favorites) }}</span>
                        </a>
                        <a class="header__bottom-info-item header__bottom-info-item-cart" href="{{ route('basket.show') }}">
                            <img src="{{asset('assets/images/svg/icon-header3.svg')}}" alt=""> корзина
                            <span class="header__bottom-info-notif basketCount {{ empty($basket) ? 'd-none' : '' }}">{{ count($basket) }}</span>
                        </a>

                        @if(session()->has('token'))
                            <a class="header__bottom-info-item header__bottom-info-item-enter" href="{{ route('personal.index') }}">
                                <img src="{{asset('assets/images/svg/icon-header4.svg')}}" alt=""> Профиль
                            </a>
                        @else
                            <a class="header__bottom-info-item header__bottom-info-item-enter" href="{{ route('login.create') }}">
                                <img src="{{asset('assets/images/svg/icon-header4.svg')}}" alt=""> Войти
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <div class="bottom-block">
        <div class="container">
            <div class="bottom-block__inner">
                <div class="bottom-block__info">
                    <div class="bottom-block__title">Заказывайте продукты легко и быстро через наше приложение</div>
                    <div class="bottom-block__btns">
                        <a class="bottom-block__btns-item" href="https://www.apple.com">
                            <img src="{{asset('assets/images/app-store.png')}}" alt="">
                        </a>
                        <a class="bottom-block__btns-item" href="https://play.google.com">
                            <img src="{{asset('assets/images/google-play.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="bottom-block__img">
                    <img class="img-fluid" src="{{asset('assets/images/phone.png')}}" alt="">
                    <div class="bottom-block__img-tx">Наведите камеру<br>на QR-код, чтобы<br>скачать</div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="footer__top">
            <div class="container">
                <div class="footer__top-inner">
                    <ul class="footer__menu">
                        <li><a href="{{ route('about') }}">О нас</a></li>
{{--                        <li><a href="{{ route('provider') }}">Поставщикам</a></li>--}}
                        <li><a href="{{ route('delivery') }}">Доставка и оплата</a></li>
                        <li><a href="{{ route('brand.index') }}">Бренды</a></li>
                    </ul>
                    <div class="footer__top-info">
                        <a class="footer__tel" href="tel:8 800 456 25 14">8 800 456 25 14</a>
                        <a class="footer__mail" href="mailto:markertogo@mail.ru">markertogo@mail.ru</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="footer__bottom-inner">
                    <ul class="footer__bottom-info">
                        <li>© 2020, MARKET TO GO</li>
                        <li><a href="{{ route('policy') }}">Конфиденциальность</a></li>
                        <li><a href="{{ route('public') }}">Публичная оферта</a></li>
                    </ul>
                    <div class="footer__bottom-descr">
                        <ul class="footer__soc">
                            <li>
                                <a href="https://vk.com/" target="_blank">
                                    <svg>
                                        <use xlink:href="#vk"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <svg>
                                        <use xlink:href="#in"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <a class="footer__dev" href="https://affetta.ru/" target="_blank">Сделано в Affetta</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>

<!-- Modal -->
<div class="modal fade" id="modalReviews" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="close" data-dismiss="modal" aria-label="Close">
                <img src="{{ asset('assets/images/svg/close2.svg')}}" alt="">
            </div>
            <div class="modal-reviews">
                <div class="modal-reviews__title">Оставить отзыв</div>
                <div class="modal-reviews__rating">
                    <div class="modal-reviews__rating-title">Оцените товар</div>
                    <div class="modal-reviews__rating-list">
                        <div class="modal-reviews__rating-item">
                            <img src="{{ asset('assets/images/svg/rating-active.svg')}}" alt="">
                        </div>
                        <div class="modal-reviews__rating-item">
                            <img src="{{ asset('assets/images/svg/rating-active.svg')}}" alt="">
                        </div>
                        <div class="modal-reviews__rating-item">
                            <img src="{{ asset('assets/images/svg/rating-active.svg')}}" alt="">
                        </div>
                        <div class="modal-reviews__rating-item">
                            <img src="{{ asset('assets/images/svg/rating-active.svg')}}" alt="">
                        </div>
                        <div class="modal-reviews__rating-item">
                            <img src="{{ asset('assets/images/svg/rating.svg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-reviews__inp">
                    <textarea class="form__input-effect" id="tx"></textarea>
                    <label for="tx">Комментарий</label>
                </div>
                <div class="modal-reviews__upload">
                    <div class="modal-reviews__upload-list">
                        <div class="modal-reviews__upload-item modal-reviews__upload-item-none" style="background-image: url('{{asset('assets/images/img-upload.jpg')}}')"></div>
                    </div>
                    <div class="modal-reviews__upload-tx">
                        <div class="modal-reviews__upload-tx-title">Добавьте фото, нажав на кнопку, или перетащите фото в эту область</div>
                        <div class="modal-reviews__upload-tx-text">До 10 изображений в формате PNG, JPEG</div>
                    </div>
                </div>
                <div class="modal-reviews__bottom">
                    <div class="order__point-check">
                        <input type="checkbox" id="check-modal" name="check-modal">
                        <label for="check-modal">Оставить анонимный отзыв</label>
                    </div>
                    <a class="button button-primary" data-dismiss="modal" aria-label="Close" href="">оставить отзыв</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalReviews2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="close" data-dismiss="modal" aria-label="Close"><img src="{{asset('assets/images/svg/close2.svg')}}" alt=""></div>
            <div class="modal-reviews">
                <div class="modal-reviews__title">Оставить отзыв</div>
                <div class="modal-reviews__rating">
                    <div class="modal-reviews__rating-title">Оцените товар</div>
                    <div class="modal-reviews__rating-list">
                        <div class="modal-reviews__rating-item"><img src="{{asset('assets/images/svg/rating-active.svg')}}" alt=""></div>
                        <div class="modal-reviews__rating-item"><img src="{{asset('assets/images/svg/rating-active.svg')}}" alt=""></div>
                        <div class="modal-reviews__rating-item"><img src="{{asset('assets/images/svg/rating-active.svg')}}" alt=""></div>
                        <div class="modal-reviews__rating-item"><img src="{{asset('assets/images/svg/rating-active.svg')}}" alt=""></div>
                        <div class="modal-reviews__rating-item"><img src="{{asset('assets/images/svg/rating.svg')}}" alt=""></div>
                    </div>
                </div>
                <div class="modal-reviews__inp">
                    <textarea class="form__input-effect" id="tx"></textarea>
                    <label for="tx">Комментарий</label>
                </div>
                <div class="modal-reviews__upload">
                    <div class="modal-reviews__upload-list">
                        <div class="modal-reviews__upload-item" style="background-image: url('{{asset('assets/images/card-img2.jpg')}}')">
                            <span class="close-i"><img src="{{asset('assets/images/svg/close-i.svg')}}" alt=""></span></div>
                        <div class="modal-reviews__upload-item modal-reviews__upload-item-none" style="background-image: url('{{asset('assets/images/img-upload.jpg')}}')"></div>
                    </div>
                </div>
                <div class="modal-reviews__bottom">
                    <div class="order__point-check">
                        <input type="checkbox" id="check-modal" name="check-modal">
                        <label for="check-modal">Оставить анонимный отзыв</label>
                    </div>
                    <a class="button button-primary" data-dismiss="modal" aria-label="Close" href="">оставить отзыв</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalReviews3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="close" data-dismiss="modal" aria-label="Close"><img src="{{asset('assets/images/svg/close2.svg')}}" alt=""></div>
            <div class="modal-reviews">
                <div class="modal-reviews__title">Оставить отзыв</div>
                <p>Вы ещё не покупали этот товар в нашем магазине. Купите его и поделитесь отзывом.</p>
                <div class="modal-reviews__rating">
                    <div class="modal-reviews__rating-list">
                        <div class="modal-reviews__rating-item"><img src="{{asset('assets/images/svg/rating-active.svg')}}" alt=""></div>
                        <div class="modal-reviews__rating-item"><img src="{{asset('assets/images/svg/rating-active.svg')}}" alt=""></div>
                        <div class="modal-reviews__rating-item"><img src="{{asset('assets/images/svg/rating-active.svg')}}" alt=""></div>
                        <div class="modal-reviews__rating-item"><img src="{{asset('assets/images/svg/rating-active.svg')}}" alt=""></div>
                        <div class="modal-reviews__rating-item"><img src="{{asset('assets/images/svg/rating.svg')}}" alt=""></div>
                    </div>
                    <div class="modal-reviews__rating-numb">3,6</div>
                    <div class="modal-reviews__rating-all">(3 отзыва)</div>
                </div>
                <div class="modal-reviews__bottom">
                    <a class="button button-primary" data-dismiss="modal" aria-label="Close" href="">Вернуться</a></div>
            </div>
        </div>
    </div>
</div>

<script type="application/javascript">const log = (...args) => {{ config('app.debug') ? 1 : 0}} && console.log(...args)</script>
<script type="text/javascript" src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/jquery-ui/jquery.ui.touch-punch.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/jquery.maskedinput/dist/jquery.maskedinput.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/select/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/jquery.nicescroll.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/jquery.ui.touch-punch.js')}}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="{{asset('vendors/slick/slick.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/app.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/external.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/auth.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/test.js') }}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/hasget/dist/hasget.min.js"></script>
</html>

