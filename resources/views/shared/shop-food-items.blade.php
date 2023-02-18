@foreach ($items as $item)
    <div class="col-md-6 col-lg-3 food-item">
        <div class="pally-inner">
            <div class="products-img-wrapper  mb-3 pointer">
                <a href="product_detail.html">
                    <div class="heart-icon">
                        <span class="material-icons">
                            favorite_border
                        </span>
                    </div>
                    <img class=" product-img mb-3" src="{{ asset('assets') }}/images/Product-img1.jpg" alt="Product-img1">
                </a>
            </div>

            <div class="pally-content">
                <a href="#" class="inner-head">
                    <h5 class="mb-2">{{ $item['name'] }}
                        ({{ is_numeric($item['quantity']) ? $item['quantity'] . 'kg' : $item['quantity'] }}) </h5>
                </a>
                <a href="#" class="red-bg">
                    <span class="material-icons-outlined">arrow_right_alt</span>
                    9% | <span class="clr-gr">In Season</span>
                </a>
                <h5 class="mb-2 mt-2 font-weight-bold simhead">
                    ₦{{ $item['price'] }}
                    <small>
                        per slot ({{ $item['description'] }})
                    </small>
                </h5>

                <h6 class="mb-2">Time left: {{ $item['time_left'] }}</h6>
                <ul class="list-unstyled pallylist-bg mb-2">
                    @for ($slot = 0; $slot < $item['slots']; $slot++)
                        <li class="d-inline-block pally-left">
                            <img class="list-img" src="{{ asset('assets') }}/images/list-img1.jpg" alt="list-img1">
                        </li>
                    @endfor

                    <li class="d-inline-block">
                        <small class="{{ $item['slots'] === 0 ? 'no-margin' : '' }}">{{ $item['slots'] }} slots
                            left</small>
                    </li>
                </ul>
                <a href="#">
                    <button type="button" class="brown-btn  text-uppercase btn-effects pally-slot-btn">
                        {{ $item['slots'] > 0? 'BUY SLOT' : 'CLOSED' }}
                    </button>
                </a>
            </div>

        </div>
    </div>
@endforeach
