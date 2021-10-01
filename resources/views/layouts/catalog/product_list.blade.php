<div class="catalog__list">
    <div class="row">
        @foreach($products as $product)
            @include('layouts.catalog.product')
        @endforeach
    </div>
{{--    {{ $paginator->render('layouts.vendor.pagination.bootstrap-4') }}--}}
</div>
