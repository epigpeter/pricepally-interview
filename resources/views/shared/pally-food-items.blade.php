
@foreach($items as $item)
<div class="col-md-6 col-lg-3">
    <div class="pally-inner">
        <div class="products-img-wrapper  mb-3 pointer">
            <a href="#">
                <div class="heart-icon">
                    <span class="material-icons">
                        favorite_border
                    </span>
                </div>
                <img class="mb-3 product-img" src="{{ asset('assets') }}/images/Product-img12.png" alt="Product-img1">
            </a>
        </div>

        <div class="pally-content">
            <a href="#" class="inner-head">
                <h5 class="mb-2">Plantain Big Unripe (Stem of </h5>
            </a>
            <a href="#" class="green-bg"><span class="material-icons-outlined">
                    arrow_right_alt
                </span>3% | In Season</a>
            <h5 class="mb-2 mt-2 font-weight-bold simhead">₦73,000
                <s>(₦78,000)</s>
            </h5>
            <section class='rating-widget'>
                <div class="rating-main pro-detail-star" data-vote="0">
                    <div class="mainstar hidden">
                        <span class="full" data-value="0"></span>
                        <span class="half" data-value="0"></span>
                    </div>
                    <div class="star">
                        <span class="full" data-value="1"></span>
                        <span class="half" data-value="0.5"></span>
                        <span class="selected"></span>

                    </div>
                    <div class="star">
                        <span class="full" data-value="2"></span>
                        <span class="half" data-value="1.5"></span>
                        <span class="selected"></span>

                    </div>

                    <div class="star">
                        <span class="full" data-value="3"></span>
                        <span class="half" data-value="2.5"></span>
                        <span class="selected"></span>
                    </div>

                    <div class="star">
                        <span class="full" data-value="4"></span>
                        <span class="half" data-value="3.5"></span>
                        <span class="selected"></span>
                    </div>

                    <div class="star">
                        <span class="full" data-value="5"></span>
                        <span class="half" data-value="4.5"></span>
                        <span class="selected"></span>
                    </div>
                </div>
                <div class='success-box'>
                    <div class='text-message'>(4.5/5.0)</div>
                </div>
            </section>
            <a href="#">
                <button type="button" class="brown-btn  text-uppercase btn-effects ">SELECT ORDER
                    TYPE</button>
            </a>
        </div>
    </div>
</div>
@endforeach