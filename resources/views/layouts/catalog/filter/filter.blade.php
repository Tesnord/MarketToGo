<div class="filter">
    <div class="filter__btn">
        <svg>
            <use xlink:href="#filter"></use>
        </svg>
        фильтр
    </div>
    <div class="filter__top-close js-filter-close">
        <img src="{{ asset('assets/images/svg/close2.svg') }}" alt="">
    </div>
    <div class="filter-bl">
        <div class="filter__top">
            <div class="filter__top-title">Фильтр</div>
            <div class="filter__top-close js-filter-close">
                <img src="{{ asset('assets/images/svg/close2.svg') }}" alt=""></div>
        </div>
        <div class="filter__item open">
            <div class="filter__title open">цена</div>
            <div class="filter__holder" style="display: block;">
                <div class="filter__container">
                    <div class="filter__range polzunok-container-6">
                        <div class="filter__range-item">
                            <input class="polzunok-input-6-left" type="text" value="@if (isset($_GET['price_min'])){{$_GET['price_min']}}@else{{$filters['price']['min']}}@endif">
                        </div>
                        <div class="filter__range-item">
                            <input class="polzunok-input-6-right" type="text" value="@if (isset($_GET['price_max'])){{$_GET['price_max']}}@else{{$filters['price']['max']}}@endif">
                        </div>
                        <div class="polzunok-6" data-min="{{$filters['price']['min']}}" data-max="{{$filters['price']['max']}}"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="filter__item open"><!--filter__item-list-->
            <div class="filter__title open">бренд</div>
            <div class="filter__holder" style="display: block;">
                <div class="filter__container">
                    @foreach($filters['brands'] as $brand)
                        <div class="filter__group-check">
                            <div class="filter__check">
                                <input class="js_brand" type="checkbox" id="{{$brand['_id']}}" name="equipment-brand" value="{{$brand['_id']}}" @if(isset($_GET['brands']) && in_array($brand['_id'], $_GET['brands'])) checked @endif>
                                <label for="{{$brand['_id']}}">{{$brand['title']}}</label>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="filter__item open">
            <div class="filter__title open">Дополнительно</div>
            <div class="filter__holder" style="display: block;">
                <div class="filter__container">
                    @foreach($filters['tags'] as $tag)
                        <div class="filter__group-check">
                            <div class="filter__check">
                                <input class="js_tag" type="checkbox" id="{{$tag['_id']}}" name="dop" value="{{$tag['_id']}}" @if(isset($_GET['tags']) && in_array($tag['_id'], $_GET['tags'])) checked @endif>
                                <label for="{{$tag['_id']}}">{{$tag['title']}}</label>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="filter__item filter__item-bord open">
            <div class="filter__holder">
                <div class="filter__container">
                    <div class="filter__group-check">
                        <div class="filter__check">
                            <input class="js_active" type="checkbox" id="act2" name="act2" @if(isset($_GET['in_stock']) && $_GET['in_stock'] === '1') checked @endif>
                            <label for="act2">В наличии</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="filter__item filter__item-bord open">
            <div class="filter__holder">
                <div class="filter__container">
                    <div class="filter__group-check">
                        <div class="filter__check">
                            <input class="js_promotion" type="checkbox" id="act1" name="act" @if(isset($_GET['sales']) && $_GET['sales'] === '1') checked @endif>
                            <label for="act1">Акции</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="filter__btn-b">
            <a class="button button-primary" href="javascript:void(0)">Показать товары</a>
            <a class="button button-tx" href="javascript:void(0)">Сбросить</a>
        </div>
    </div>
</div>
