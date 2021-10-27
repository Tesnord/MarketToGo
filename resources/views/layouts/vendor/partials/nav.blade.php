<ul>
    @foreach($menu_categories['data'] as $level_1)
        <li><a href="{{ route('category.index', ['slug_category' => $level_1['slug']]) }}">{{ $level_1['title'] }}</a>
            @if(!empty($level_1['children']))
            <div class="menu__submenu">
                @foreach($level_1['children'] as $level_2)
                    <div class="menu__submenu-list">
                        <a class="menu__submenu-title"
                        href="{{ route('category.index', ['slug_category' => $level_2['slug']]) }}">{{ $level_2['title'] }}</a>
                            <ul>
                                @foreach($level_2['children'] as $level_3)
                                    <li>
                                        <a href="{{ route('category.index', ['slug_category' => $level_3['slug']]) }}">{{ $level_3['title'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                    </div>
                    <div class="menu__submenu-logo">
                        <img src="{{asset('assets/images/logo-menu1.png')}}" alt="">
                        <img src="{{asset('assets/images/logo-menu2.png')}}" alt="">
                        <img src="{{asset('assets/images/logo-menu3.png')}}" alt="">
                        <img src="{{asset('assets/images/logo-menu4.png')}}" alt="">
                        <img src="{{asset('assets/images/logo-menu5.png')}}" alt="">
                        <img src="{{asset('assets/images/logo-menu6.png')}}" alt="">
                        <img src="{{asset('assets/images/logo-menu7.png')}}" alt="">
                    </div>
                @endforeach
            </div>
            @endif
        </li>
    @endforeach
</ul>

