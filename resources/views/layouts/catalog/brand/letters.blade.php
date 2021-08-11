<div class="brands__list">
    <a class="brands__list-item {{ request()->route()->getName() === 'brand.index' ? 'active' : null }}" href="{{ route('brand.index') }}">Все</a>
    @foreach(array_slice($brands, 0, 27) as $letter)
        @if($letter['avillable'])
            <a class="brands__list-item
               {{request()->route()->parameter('slug_letter') === $letter['slug'] ? 'active' : null}}"
               href="{{ route('brand.show', ['slug_letter' => $letter['slug']])}}">
                {{ $letter['letter'] }}
            </a>
        @else
            <span class="brands__list-item not">{{ $letter['letter'] }}</span>
        @endif
    @endforeach
</div>
<div class="brands__list">
    @foreach(array_slice($brands, 27) as $letter)
        @if($letter['avillable'])
            <a class="brands__list-item
               {{request()->route()->parameter('slug_letter') === $letter['slug'] ? 'active' : null}}"
               href="{{ route('brand.show', ['slug_letter' => $letter['slug']])}}">
                {{ $letter['letter'] }}
            </a>
        @else
            <span class="brands__list-item not">{{ $letter['letter'] }}</span>
        @endif
    @endforeach
</div>
