<div class="catalog-min catalog-min-tw">
    <div class="container">
        <h3>Возможно вас заинтересует</h3>
        <div class="row">
            @foreach($offer as $product)
                @include('layouts.catalog.product')
            @endforeach
        </div>
    </div>
</div>
