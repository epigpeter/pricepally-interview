@foreach ($items as $item)
    <div class="col-md-6 col-lg-3 food-item">
        <div class="pally-inner">
            <div class="products-img-wrapper  mb-3 pointer">
                <a href="#">
                    <div class="heart-icon">
                        <span class="material-icons">
                            favorite_border
                        </span>
                    </div>
                    <img class="mb-3 product-img" src="{{ asset('assets') }}/images/Pre-order3.png" alt="Product-img3">
                </a>
            </div>
            <div class="pally-content">
                <a href="#" class="inner-head">
                    <h5 class="mb-2">Strawberries</h5>
                </a>
                <a href="#" class="red-bg"><span class="material-icons-outlined">
                        arrow_right_alt
                    </span>9% | In Season</a>
                <h6 class="mb-2 mt-2
             font-weight-bold simhead">
                    ₦7,500 per kg</h6>
                <p class="text-red mb-2 text-uppercase">Closed</p>
                <div class="preorder-progress stat-bar mb-2">
                    <span class="stat-bar-rating" role="stat-bar" style="width: 100%;">100%</span>
                </div>
                <p class="mb-2 dgrey-clr">Delivery Date: July 23rd 2021</p>
                <a href="#" class="closed-opacity">
                    <button type="button" class="brown-btn  text-uppercase btn-effects ">Book
                        Now</button>
                </a>
            </div>

        </div>
    </div>
@endforeach
