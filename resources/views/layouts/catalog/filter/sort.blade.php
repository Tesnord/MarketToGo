<div class="catalog__sorting">
    <div class="catalog__sorting-title">сортировать:</div>
    <ul class="catalog__sorting-list">
        {{--<li class="{{ $sort["sort"] === "discount" ? "active" : "" }}"
            data-sort="{{$sort_param === "discount-asc" ? "discount-desc" : "discount-asc" }}">
            <a href="javascript:void(0)">
                % скидки@if($sort['sort'] === 'discount') {!! $sort["order"] === 'asc' ? '&#8593' : '&#8595' !!} @endif
            </a>
        </li>--}}
        <li class="{{$sort["sort"] === "price" ? "active" : "" }}"
            data-sort="{{$sort_param === "price-asc" ? "price-desc" : "price-asc" }}">
            <a href="javascript:void(0)">
                цене@if($sort['sort'] === 'price') {!! $sort["order"] === 'asc' ? '&#8593' : '&#8595' !!} @endif
            </a>
        </li>
    </ul>
</div>
