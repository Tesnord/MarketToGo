<div class="card-product__bann">
    <div class="card-product__bann-icon">
        <img src="{{ asset('assets/images/svg/bann-icon2.svg') }}" alt="">
    </div>
    <div class="card-product__bann-tx">Спасибо, что делитесь своим мнением</div>
    @if($product['canReview'] && session()->has('token'))
        <a class="button button-bord2" href="javascript:void(0)" data-toggle="modal" data-target="#modalReviews">Написать отзыв</a>
    @else
        <a class="button button-bord2" href="javascript:void(0)" data-toggle="modal" data-target="#modalReviews3">Написать отзыв</a>
    @endif
</div>
