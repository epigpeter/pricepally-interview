<!------ FOOD-ITEMS-MOBILE-SECTION-START ------>
<div class="fixed-food">
    <section class="food-items-bg  d-block d-lg-none mobilefoodTab-view">
        <div class="tabs-fixed">
            <div class="container ">
                <div class="d-flex">
                    <div class=" justify-content-start">
                    </div>
                    <div class=" ml-auto justify-content-end">
                        <p class="mb-0" data-toggle="modal" data-target="#fillter-modal"> <span
                                class="material-icons align-top pr-2">
                                filter_list
                            </span class="align-top">Filter</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-5">
                        <ul class="nav nav-tabs foodtabs" id="foodTab" role="tablist">
                            <li class="nav-item ">
                                <a class="nav-link active" id="" data-toggle="tab" href="#mobile-pally"
                                    role="tab" aria-controls="mobilepally" aria-selected="true">Shop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="mobile-recommended-tab" data-toggle="tab"
                                    href="#mobile-recommended" role="tab" aria-controls="mobile-recommended"
                                    aria-selected="false">Pally</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="mobile-pre-orders-tab" data-toggle="tab"
                                    href="#mobile-pre-orders" role="tab" aria-controls="mobile-pre-orders"
                                    aria-selected="false">Recommended</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-12 col-lg-7">
                        <ul class="list-unstyled mb-0 select-bg float-right d-none d-lg-block">
                            <li class="d-inline-block">
                                <div class="form-group mb-0">
                                    <select class="form-control">
                                        <option>Categories</option>
                                        <option>Soup & stew ingredients</option>
                                        <option>Foodstuffs</option>
                                        <option>Meat, Poultry & Seafood</option>
                                    </select>
                                </div>
                            </li>
                            <li class="d-inline-block">
                                <div class="form-group mb-0">
                                    <select class="form-control">
                                        <option>Sub Categories</option>
                                        <option>Grains
                                        </option>
                                        <option>Tubers & Roots
                                        </option>
                                    </select>
                                </div>
                            </li>
                            <li class="d-inline-block">
                                <div class="form-group mb-0">
                                    <select class="form-control">
                                        <option>Sort By: Price (Low to High)</option>
                                        <option>Price (Low to High)</option>
                                        <option>Price (High to Low)</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="border-bottom">
            </div>
        </div>

        <div class="food-bg product_list">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="tab-content mobiletabcontent" id="foodTabContent">
                            <div class="tab-pane fade show active pally-bg" id="mobile-pally" role="tabpanel"
                                aria-labelledby="mobile-pally-tab">
                                <h6 class="inner-head mb-3 mt-3">16 Available Deals</h6>
                                <div class="d-flex mobile-product">
                                    <div class=" justify-content-start">
                                        <div class="pally-inner">
                                            <div class="products-img-wrapper  mb-2 pointer">
                                                <a href="product_detail.html">
                                                    <div class="heart-icon">
                                                        <span class="material-icons">
                                                            favorite_border
                                                        </span>
                                                    </div>
                                                    <img class="product-img"
                                                        src="{{ asset('assets') }}/images/MProducts-img1.png"
                                                        alt="Product-img1">
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class=" ml-2 justify-content-end">
                                        <div class="pally-content">
                                            <a href="#" class="inner-head">
                                                <h5 class="mb-2">Titus 20kg (Full Carton) </h5>
                                            </a>
                                            <a href="#" class="red-bg"><span class="material-icons-outlined">
                                                    arrow_right_alt
                                                </span>9% | In Season</a>
                                            <h5 class="mb-2 mt-2 font-weight-bold simhead">₦7,500 <small>per
                                                    slot (3 available slots)</small></h5>
                                            <h6 class="mb-2">Time left: 68:50:52</h6>
                                            <ul class="list-unstyled pallylist-bg mb-2">
                                                <li class="d-inline-block pally-left">
                                                    <img class="list-img"
                                                        src="{{ asset('assets') }}/images/list-img1.jpg"
                                                        alt="list-img1">
                                                </li>
                                                <li class="d-inline-block pally-left">
                                                    <img class="list-img"
                                                        src="{{ asset('assets') }}/images/list-img3.jpg"
                                                        alt="list-img2">
                                                </li>
                                                <li class="d-inline-block pally-left">
                                                    <img class="list-img"
                                                        src="{{ asset('assets') }}/images/list-img3.jpg"
                                                        alt="list-img3">
                                                </li>
                                                <li class="d-inline-block pally-left">
                                                    <img class="list-img"
                                                        src="{{ asset('assets') }}/images/list-img1.jpg"
                                                        alt="list-img1">
                                                </li>
                                                <li class="d-inline-block">
                                                    <small>2 slots left</small>
                                                </li>
                                            </ul>
                                            <a href="#">
                                                <button type="button"
                                                    class="brown-btn  text-uppercase btn-effects pally-slot-btn">BUY
                                                    SLOT</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mobile-product">
                                    <div class=" justify-content-start">
                                        <div class="pally-inner content">
                                            <div class="products-img-wrapper  mb-2 pointer">
                                                <a href="#">
                                                    <div class="heart-icon">
                                                        <span class="material-icons">
                                                            favorite_border
                                                        </span>
                                                    </div>
                                                    <img class="product-img"
                                                        src="{{ asset('assets') }}/images/MProducts-img2.png"
                                                        alt="Product-img1">
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class=" ml-2 justify-content-end">
                                        <div class="pally-content">
                                            <a href="#" class="inner-head">
                                                <h5 class="mb-2">Croaker Fish (Full Carton)</h5>
                                            </a>
                                            <a href="#" class="red-bg"><span class="material-icons-outlined">
                                                    arrow_right_alt
                                                </span>9% | In Season</a>
                                            <h5 class="mb-2 mt-2 font-weight-bold simhead">₦7,500 <small>per
                                                    slot (3 available slots)</small></h5>
                                            <h6 class="mb-2">Time left: 68:50:52</h6>
                                            <ul class="list-unstyled pallylist-bg mb-2">
                                                <li class="d-inline-block pally-left">
                                                    <img class="list-img"
                                                        src="{{ asset('assets') }}/images/list-img1.jpg"
                                                        alt="list-img1">
                                                </li>
                                                <li class="d-inline-block pally-left">
                                                    <img class="list-img"
                                                        src="{{ asset('assets') }}/images/list-img3.jpg"
                                                        alt="list-img2">
                                                </li>
                                                <li class="d-inline-block pally-left">
                                                    <img class="list-img"
                                                        src="{{ asset('assets') }}/images/list-img3.jpg"
                                                        alt="list-img3">
                                                </li>
                                                <li class="d-inline-block pally-left">
                                                    <img class="list-img"
                                                        src="{{ asset('assets') }}/images/list-img1.jpg"
                                                        alt="list-img1">
                                                </li>
                                                <li class="d-inline-block">
                                                    <small>2 slots left</small>
                                                </li>
                                            </ul>
                                            <a href="#">
                                                <button type="button"
                                                    class="brown-btn  text-uppercase btn-effects pally-slot-btn">BUY
                                                    SLOT</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mobile-product">
                                    <div class=" justify-content-start">
                                        <div class="pally-inner content">
                                            <div class="products-img-wrapper  mb-2 pointer">
                                                <a href="#">
                                                    <div class="heart-icon">
                                                        <span class="material-icons">
                                                            favorite_border
                                                        </span>
                                                    </div>
                                                    <img class="product-img"
                                                        src="{{ asset('assets') }}/images/MProducts-img3.png"
                                                        alt="Product-img1">
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class=" ml-2 justify-content-end">
                                        <div class="pally-content">
                                            <a href="#" class="inner-head">
                                                <h5 class="mb-2">White Onions (40kg)</h5>
                                            </a>
                                            <a href="#" class="red-bg"><span class="material-icons-outlined">
                                                    arrow_right_alt
                                                </span>9% | In Season</a>
                                            <h5 class="mb-2 mt-2 font-weight-bold simhead">₦7,500 <small>per
                                                    slot (3 available slots)</small></h5>
                                            <h6 class="mb-2">Time left: 68:50:52</h6>
                                            <ul class="list-unstyled pallylist-bg mb-2">
                                                <li class="d-inline-block pally-left">
                                                    <img class="list-img"
                                                        src="{{ asset('assets') }}/images/list-img1.jpg"
                                                        alt="list-img1">
                                                </li>
                                                <li class="d-inline-block pally-left">
                                                    <img class="list-img"
                                                        src="{{ asset('assets') }}/images/list-img3.jpg"
                                                        alt="list-img2">
                                                </li>
                                                <li class="d-inline-block pally-left">
                                                    <img class="list-img"
                                                        src="{{ asset('assets') }}/images/list-img3.jpg"
                                                        alt="list-img3">
                                                </li>
                                                <li class="d-inline-block pally-left">
                                                    <img class="list-img"
                                                        src="{{ asset('assets') }}/images/list-img1.jpg"
                                                        alt="list-img1">
                                                </li>
                                                <li class="d-inline-block">
                                                    <small>2 slots left</small>
                                                </li>
                                            </ul>
                                            <a href="#">
                                                <button type="button"
                                                    class="brown-btn  text-uppercase btn-effects pally-slot-btn">BUY
                                                    SLOT</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mobile-product">
                                    <div class=" justify-content-start">
                                        <div class="pally-inner">
                                            <div class="products-img-wrapper  mb-2 pointer">
                                                <a href="#">
                                                    <div class="heart-icon">
                                                        <span class="material-icons">
                                                            favorite_border
                                                        </span>
                                                    </div>
                                                    <img class="product-img"
                                                        src="{{ asset('assets') }}/images/MProducts-img4.png"
                                                        alt="Product-img1">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" ml-2 justify-content-end">
                                        <div class="pally-content">
                                            <a href="#" class="inner-head">
                                                <h5 class="mb-2">Guinea Corn Red (Paint bu...</h5>
                                            </a>
                                            <a href="#" class="red-bg"><span class="material-icons-outlined">
                                                    arrow_right_alt
                                                </span>9% | In Season</a>
                                            <h5 class="mb-2 mt-2 font-weight-bold simhead">₦7,500 <small>per
                                                    slot (3 available slots)</small></h5>
                                            <h6 class="mb-2">Time left: 68:50:52</h6>
                                            <ul class="list-unstyled pallylist-bg mb-2">
                                                <li class="d-inline-block pally-left">
                                                    <img class="list-img"
                                                        src="{{ asset('assets') }}/images/list-img1.jpg"
                                                        alt="list-img1">
                                                </li>
                                                <li class="d-inline-block pally-left">
                                                    <img class="list-img"
                                                        src="{{ asset('assets') }}/images/list-img3.jpg"
                                                        alt="list-img2">
                                                </li>
                                                <li class="d-inline-block pally-left">
                                                    <img class="list-img"
                                                        src="{{ asset('assets') }}/images/list-img3.jpg"
                                                        alt="list-img3">
                                                </li>
                                                <li class="d-inline-block pally-left">
                                                    <img class="list-img"
                                                        src="{{ asset('assets') }}/images/list-img1.jpg"
                                                        alt="list-img1">
                                                </li>
                                                <li class="d-inline-block">
                                                    <small>2 slots left</small>
                                                </li>
                                            </ul>
                                            <a href="#">
                                                <button type="button"
                                                    class="brown-btn  text-uppercase btn-effects pally-slot-btn">BUY
                                                    SLOT</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mobile-product">
                                    <div class=" justify-content-start">
                                        <div class="pally-inner">
                                            <div class="products-img-wrapper  mb-2 pointer">
                                                <a href="#">
                                                    <div class="heart-icon">
                                                        <span class="material-icons">
                                                            favorite_border
                                                        </span>
                                                    </div>
                                                    <img class="product-img"
                                                        src="{{ asset('assets') }}/images/MProducts-img5.png"
                                                        alt="Product-img1">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" ml-2 justify-content-end">
                                        <div class="pally-content">
                                            <a href="#" class="inner-head">
                                                <h5 class="mb-2">Soya Beans (Paint Bucket)</h5>
                                            </a>
                                            <a href="#" class="red-bg"><span class="material-icons-outlined">
                                                    arrow_right_alt
                                                </span>9% | In Season</a>
                                            <h5 class="mb-2 mt-2 font-weight-bold simhead">₦7,500 <small>per
                                                    slot (3 available slots)</small></h5>
                                            <h6 class="mb-2">Time left: 68:50:52</h6>
                                            <ul class="list-unstyled pallylist-bg mb-2">
                                                <li class="d-inline-block pally-left">
                                                    <img class="list-img"
                                                        src="{{ asset('assets') }}/images/list-img1.jpg"
                                                        alt="list-img1">
                                                </li>
                                                <li class="d-inline-block pally-left">
                                                    <img class="list-img"
                                                        src="{{ asset('assets') }}/images/list-img3.jpg"
                                                        alt="list-img2">
                                                </li>
                                                <li class="d-inline-block pally-left">
                                                    <img class="list-img"
                                                        src="{{ asset('assets') }}/images/list-img3.jpg"
                                                        alt="list-img3">
                                                </li>
                                                <li class="d-inline-block pally-left">
                                                    <img class="list-img"
                                                        src="{{ asset('assets') }}/images/list-img1.jpg"
                                                        alt="list-img1">
                                                </li>
                                                <li class="d-inline-block">
                                                    <small>2 slots left</small>
                                                </li>
                                            </ul>
                                            <a href="#">
                                                <button type="button"
                                                    class="brown-btn  text-uppercase btn-effects pally-slot-btn">BUY
                                                    SLOT</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mobile-product">
                                    <div class=" justify-content-start">
                                        <div class="pally-inner">
                                            <div class="products-img-wrapper  mb-2 pointer">
                                                <a href="#">
                                                    <div class="heart-icon">
                                                        <span class="material-icons">
                                                            favorite_border
                                                        </span>
                                                    </div>
                                                    <img class="product-img"
                                                        src="{{ asset('assets') }}/images/MProducts-img6.png"
                                                        alt="Product-img1">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" ml-2 justify-content-end">
                                        <div class="pally-content">
                                            <a href="#" class="inner-head">
                                                <h5 class="mb-2">Soya Beans (100kg)</h5>
                                            </a>
                                            <a href="#" class="red-bg"><span class="material-icons-outlined">
                                                    arrow_right_alt
                                                </span>9% | In Season</a>
                                            <h5 class="mb-2 mt-2 font-weight-bold simhead">₦7,500 <small>per
                                                    slot (3 available slots)</small></h5>
                                            <h6 class="mb-2">Time left: 68:50:52</h6>
                                            <ul class="list-unstyled pallylist-bg mb-2">
                                                <li class="d-inline-block pally-left">
                                                    <img class="list-img"
                                                        src="{{ asset('assets') }}/images/list-img1.jpg"
                                                        alt="list-img1">
                                                </li>
                                                <li class="d-inline-block pally-left">
                                                    <img class="list-img"
                                                        src="{{ asset('assets') }}/images/list-img3.jpg"
                                                        alt="list-img2">
                                                </li>
                                                <li class="d-inline-block pally-left">
                                                    <img class="list-img"
                                                        src="{{ asset('assets') }}/images/list-img3.jpg"
                                                        alt="list-img3">
                                                </li>
                                                <li class="d-inline-block pally-left">
                                                    <img class="list-img"
                                                        src="{{ asset('assets') }}/images/list-img1.jpg"
                                                        alt="list-img1">
                                                </li>
                                                <li class="d-inline-block">
                                                    <small>2 slots left</small>
                                                </li>
                                            </ul>
                                            <a href="#">
                                                <button type="button"
                                                    class="brown-btn  text-uppercase btn-effects pally-slot-btn">BUY
                                                    SLOT</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mobile-product">
                                    <div class=" justify-content-start">
                                        <div class="pally-inner">
                                            <div class="products-img-wrapper  mb-2 pointer">
                                                <a href="#">
                                                    <div class="heart-icon">
                                                        <span class="material-icons">
                                                            favorite_border
                                                        </span>
                                                    </div>
                                                    <img class="product-img"
                                                        src="{{ asset('assets') }}/images/MProducts-img7.png"
                                                        alt="Product-img1">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" ml-2 justify-content-end">
                                        <div class="pally-content">
                                            <a href="#" class="inner-head">
                                                <h5 class="mb-2">Tuwo Rice (50kg)</h5>
                                            </a>
                                            <a href="#" class="red-bg"><span class="material-icons-outlined">
                                                    arrow_right_alt
                                                </span>9% | In Season</a>
                                            <h5 class="mb-2 mt-2 font-weight-bold simhead">₦7,500 <small>per
                                                    slot (3 available slots)</small></h5>
                                            <h6 class="mb-2">Time left: 68:50:52</h6>
                                            <ul class="list-unstyled pallylist-bg mb-2">
                                                <li class="d-inline-block pally-left">
                                                    <img class="list-img"
                                                        src="{{ asset('assets') }}/images/list-img1.jpg"
                                                        alt="list-img1">
                                                </li>
                                                <li class="d-inline-block pally-left">
                                                    <img class="list-img"
                                                        src="{{ asset('assets') }}/images/list-img3.jpg"
                                                        alt="list-img2">
                                                </li>
                                                <li class="d-inline-block pally-left">
                                                    <img class="list-img"
                                                        src="{{ asset('assets') }}/images/list-img3.jpg"
                                                        alt="list-img3">
                                                </li>
                                                <li class="d-inline-block pally-left">
                                                    <img class="list-img"
                                                        src="{{ asset('assets') }}/images/list-img1.jpg"
                                                        alt="list-img1">
                                                </li>
                                                <li class="d-inline-block">
                                                    <small>2 slots left</small>
                                                </li>
                                            </ul>
                                            <a href="#">
                                                <button type="button"
                                                    class="brown-btn  text-uppercase btn-effects pally-slot-btn">BUY
                                                    SLOT</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade recommended-bg" id="mobile-recommended" role="tabpanel"
                                aria-labelledby="mobile-recommended-tab">
                                <h6 class="inner-head mb-3 mt-3">16 Available Deals</h6>
                                <div class="d-flex mobile-product">
                                    <div class=" justify-content-start">
                                        <div class="pally-inner">
                                            <div class="products-img-wrapper  mb-2 pointer">
                                                <a href="#">
                                                    <div class="heart-icon">
                                                        <span class="material-icons">
                                                            favorite_border
                                                        </span>
                                                    </div>
                                                    <img class="product-img"
                                                        src="{{ asset('assets') }}/images/MProducts-img5.png"
                                                        alt="Product-img1">
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class=" ml-2 justify-content-end">
                                        <div class="pally-content">
                                            <a href="#" class="inner-head">
                                                <h5 class="mb-2">Titus 20kg (Full Carton) </h5>
                                            </a>
                                            <a href="#" class="green-bg"><span class="material-icons-outlined">
                                                    arrow_right_alt
                                                </span>3% | In Season</a>
                                            <h5 class="mb-2 mt-2 font-weight-bold simhead">₦73,000
                                                <s>(₦78,000)</s>
                                            </h5>
                                            <section class='rating-widget mb-2'>
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
                                                <button type="button"
                                                    class="brown-btn  text-uppercase btn-effects ">SELECT ORDER
                                                    TYPE</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mobile-product">
                                    <div class=" justify-content-start">
                                        <div class="pally-inner">
                                            <div class="products-img-wrapper  mb-2 pointer">
                                                <a href="#">
                                                    <div class="heart-icon">
                                                        <span class="material-icons">
                                                            favorite_border
                                                        </span>
                                                    </div>
                                                    <img class="product-img"
                                                        src="{{ asset('assets') }}/images/MProducts-img2.png"
                                                        alt="Product-img1">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" ml-2 justify-content-end">
                                        <div class="pally-content">
                                            <a href="#" class="inner-head">
                                                <h5 class="mb-2">Croaker Fish (Full Carton)</h5>
                                            </a>

                                            <a href="#" class="green-bg"><span class="material-icons-outlined">
                                                    arrow_right_alt
                                                </span>3% | In Season</a>
                                            <h5 class="mb-2 mt-2 font-weight-bold simhead">₦73,000
                                                <s>(₦78,000)</s>
                                            </h5>
                                            <section class='rating-widget mb-2'>
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
                                                    <div class='text-message'></div>
                                                </div>
                                            </section>
                                            <a href="#">
                                                <button type="button"
                                                    class="brown-btn  text-uppercase btn-effects ">SELECT ORDER
                                                    TYPE</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mobile-product">
                                    <div class=" justify-content-start">
                                        <div class="pally-inner">
                                            <div class="products-img-wrapper  mb-2 pointer">
                                                <a href="#">
                                                    <div class="heart-icon">
                                                        <span class="material-icons">
                                                            favorite_border
                                                        </span>
                                                    </div>
                                                    <img class="product-img"
                                                        src="{{ asset('assets') }}/images/MProducts-img3.png"
                                                        alt="Product-img1">
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class=" ml-2 justify-content-end">
                                        <div class="pally-content">
                                            <a href="#" class="inner-head">
                                                <h5 class="mb-3 ">White Onions (40kg)</h5>
                                            </a>
                                            <a href="#" class="green-bg"><span class="material-icons-outlined">
                                                    arrow_right_alt
                                                </span>3% | In Season</a>
                                            <h5 class="mb-2 mt-2 font-weight-bold simhead">₦73,000
                                                <s>(₦78,000)</s>
                                            </h5>
                                            <section class='rating-widget '>
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
                                                <button type="button"
                                                    class="brown-btn  text-uppercase btn-effects ">SELECT ORDER
                                                    TYPE</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mobile-product">
                                    <div class=" justify-content-start">
                                        <div class="pally-inner">
                                            <div class="products-img-wrapper  mb-2 pointer">
                                                <a href="#">
                                                    <div class="heart-icon">
                                                        <span class="material-icons">
                                                            favorite_border
                                                        </span>
                                                    </div>
                                                    <img class="product-img"
                                                        src="{{ asset('assets') }}/images/MProducts-img4.png"
                                                        alt="Product-img1">
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class=" ml-2 justify-content-end">
                                        <div class="pally-content">
                                            <a href="#" class="inner-head">
                                                <h5 class="mb-2">Guinea Corn Red (Paint bu...</h5>
                                            </a>
                                            <a href="#" class="green-bg"><span class="material-icons-outlined">
                                                    arrow_right_alt
                                                </span>3% | In Season</a>
                                            <h5 class="mb-2 mt-2 font-weight-bold simhead">₦73,000
                                                <s>(₦78,000)</s>
                                            </h5>
                                            <section class='rating-widget mb-2'>
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
                                                <button type="button"
                                                    class="brown-btn  text-uppercase btn-effects ">SELECT ORDER
                                                    TYPE</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mobile-product">
                                    <div class=" justify-content-start">
                                        <div class="pally-inner">
                                            <div class="products-img-wrapper  mb-2 pointer">
                                                <a href="#">
                                                    <div class="heart-icon">
                                                        <span class="material-icons">
                                                            favorite_border
                                                        </span>
                                                    </div>
                                                    <img class="product-img"
                                                        src="{{ asset('assets') }}/images/MProducts-img5.png"
                                                        alt="Product-img1">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" ml-2 justify-content-end">
                                        <div class="pally-content">
                                            <a href="#" class="inner-head">
                                                <h5 class="mb-2">Soya Beans (Paint Bucket)</h5>
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
                                                <button type="button"
                                                    class="brown-btn  text-uppercase btn-effects ">SELECT ORDER
                                                    TYPE</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mobile-product">
                                    <div class=" justify-content-start">
                                        <div class="pally-inner">
                                            <div class="products-img-wrapper  mb-2 pointer">
                                                <a href="#">
                                                    <div class="heart-icon">
                                                        <span class="material-icons">
                                                            favorite_border
                                                        </span>
                                                    </div>
                                                    <img class="product-img"
                                                        src="{{ asset('assets') }}/images/MProducts-img6.png"
                                                        alt="Product-img1">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" ml-2 justify-content-end">
                                        <div class="pally-content">
                                            <a href="#" class="inner-head">
                                                <h5 class="mb-2">Soya Beans (100kg)</h5>
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
                                                <button type="button"
                                                    class="brown-btn  text-uppercase btn-effects ">SELECT ORDER
                                                    TYPE</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mobile-product">
                                    <div class=" justify-content-start">
                                        <div class="pally-inner">
                                            <div class="products-img-wrapper  mb-2 pointer">
                                                <a href="#">
                                                    <div class="heart-icon">
                                                        <span class="material-icons">
                                                            favorite_border
                                                        </span>
                                                    </div>
                                                    <img class="product-img"
                                                        src="{{ asset('assets') }}/images/MProducts-img7.png"
                                                        alt="Product-img1">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" ml-2 justify-content-end">
                                        <div class="pally-content">
                                            <a href="#" class="inner-head">
                                                <h5 class="mb-2">Tuwo Rice (50kg)</h5>
                                            </a>
                                            <a href="#" class="green-bg"><span class="material-icons-outlined">
                                                    arrow_right_alt
                                                </span>3% | In Season</a>
                                            <h5 class="mb-2 mt-2 font-weight-bold simhead">₦73,000
                                                <s>(₦78,000)</s>
                                            </h5>
                                            <section class='rating-widget mb-2'>
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
                                                <button type="button"
                                                    class="brown-btn  text-uppercase btn-effects ">SELECT ORDER
                                                    TYPE</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade preorder-bg" id="mobile-pre-orders" role="tabpanel"
                                aria-labelledby="mobile-pre-orders-tab">
                                <h6 class="inner-head mb-3 mt-3">3 Available Deals</h6>
                                <div class="">
                                    <div class="d-flex mobile-product">
                                        <div class=" justify-content-start">
                                            <div class="pally-inner">
                                                <div class="products-img-wrapper  mb-2 pointer">
                                                    <a href="#">
                                                        <div class="heart-icon">
                                                            <span class="material-icons">
                                                                favorite_border
                                                            </span>
                                                        </div>
                                                        <img class="mb-3 product-img"
                                                            src="{{ asset('assets') }}/images/MPre-order1.png"
                                                            alt="Pre-order1">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" ml-2 justify-content-end">
                                            <div class="pally-content">

                                                <a href="#" class="inner-head">
                                                    <h5 class="mb-2">Strawberries</h5>
                                                </a>
                                                <a href="#" class="red-bg"><span
                                                        class="material-icons-outlined">
                                                        arrow_right_alt
                                                    </span>9% | In Season</a>
                                                <h6 class="mb-2 mt-2 font-weight-bold simhead">₦7,500 per kg
                                                </h6>
                                                <p class="text-red mb-2">1kg of 50kg left</p>
                                                <div class="preorder-progress stat-bar mb-2">
                                                    <span class="stat-bar-rating" role="stat-bar"
                                                        style="width: 80%;">80%</span>
                                                </div>
                                                <p class="mb-2 dgrey-clr">Delivery Date: July 23rd 2021</p>
                                                <a href="#">
                                                    <button type="button"
                                                        class="brown-btn  text-uppercase btn-effects "
                                                        data-toggle="modal" data-target="#booknowModal">Book
                                                        Now</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mobile-product">
                                        <div class=" justify-content-start">
                                            <div class="pally-inner">
                                                <div class="products-img-wrapper  mb-2 pointer">
                                                    <a href="#">
                                                        <div class="heart-icon">
                                                            <span class="material-icons">
                                                                favorite_border
                                                            </span>
                                                        </div>
                                                        <img class="mb-3 product-img"
                                                            src="{{ asset('assets') }}/images/MPre-order2.png"
                                                            alt="Pre-order1">
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                        <div class=" ml-2 justify-content-end">
                                            <div class="pally-content">
                                                <a href="#" class="inner-head">
                                                    <h5 class="mb-2">Strawberries</h5>
                                                </a>
                                                <a href="#" class="red-bg"><span
                                                        class="material-icons-outlined">
                                                        arrow_right_alt
                                                    </span>9% | In Season</a>
                                                <h6 class="mb-2 mt-2 font-weight-bold simhead">₦7,500 per kg
                                                </h6>
                                                <p class="text-red mb-2">1kg of 50kg left</p>
                                                <div class="preorder-progress stat-bar mb-2">
                                                    <span class="stat-bar-rating" role="stat-bar"
                                                        style="width: 30%;">30%</span>
                                                </div>
                                                <p class="mb-2 dgrey-clr">Delivery Date: July 23rd 2021</p>
                                                <a href="#">
                                                    <button type="button"
                                                        class="brown-btn  text-uppercase btn-effects ">Book
                                                        Now</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mobile-product">
                                        <div class=" justify-content-start ">
                                            <div class="pally-inner">
                                                <div class="products-img-wrapper  mb-2 pointer">
                                                    <a href="#">
                                                        <div class="heart-icon">
                                                            <span class="material-icons">
                                                                favorite_border
                                                            </span>
                                                        </div>
                                                        <img class="mb-3 product-img"
                                                            src="{{ asset('assets') }}/images/MPre-order2.png"
                                                            alt="Pre-order1">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" ml-2 justify-content-end">
                                            <div class="pally-content">
                                                <a href="#" class="inner-head">
                                                    <h5 class="mb-2">Strawberries</h5>
                                                </a>
                                                <a href="#" class="red-bg"><span
                                                        class="material-icons-outlined">
                                                        arrow_right_alt
                                                    </span>9% | In Season</a>
                                                <h6 class="mb-2 mt-2 font-weight-bold simhead">₦7,500 per kg
                                                </h6>
                                                <p class="text-red mb-2">1kg of 50kg left</p>
                                                <div class="preorder-progress stat-bar mb-2">
                                                    <span class="stat-bar-rating" role="stat-bar"
                                                        style="width: 100%;">100%</span>
                                                </div>
                                                <p class="mb-2 dgrey-clr">Delivery Date: July 23rd 2021</p>
                                                <a href="#" class="closed-opacity">
                                                    <button type="button"
                                                        class="brown-btn  text-uppercase btn-effects ">Book
                                                        Now</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="load-bg text-center mb-5 d-none d-lg-block">
                            <a href="#">
                                <button typ="button" class="load-more text-uppercase ">
                                    Load more items
                                </button>
                            </a>
                            @include('shared.loader')
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
<!------ FOOD-ITEMS-MOBILE-SECTION-START ------>
