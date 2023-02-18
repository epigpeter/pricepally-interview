    <!------ FOOD-ITEMS-WEB-VIEW-SECTION-START ------>
    <section class="d-none d-lg-block webfoodTab-view">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-5">
                    <ul class="nav nav-tabs foodtabs" id="food-tabs" role="tablist">
                        <li class="nav-item ">
                            <a class="nav-link active" id="shop-tab" data-filter-by='all' data-toggle="tab" href="#shop" role="tab"
                                aria-controls="shop" aria-selected="true">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pally-tab" data-filter-by='unique' data-toggle="tab" href="#pally" role="tab"
                                aria-controls="pally" aria-selected="false">Pally</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="recommended-tab" data-filter-by='recommended' data-toggle="tab" href="#recommended"
                                role="tab" aria-controls="recommended" aria-selected="false">Recommended</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-12 col-lg-7">
                    <form class="form-inline select-bg float-right">
                        <div class="form-group mb-0">
                            <select class="form-control border-right-0">
                                <option>Categories</option>
                                @foreach ($categories as $cat)
                                    <option value={{ $cat->name }}>{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-0">
                            <select class="form-control  border-right-0">
                                <option>Sub Categories</option>
                                <option>Grains</option>
                                <option>Tubers & Roots
                                </option>
                            </select>
                        </div>
                        <div class="form-group mb-0">
                            <select class="form-control">
                                <option>Sort By: Price (Low to High)</option>
                                <option>Price (Low to High)</option>
                                <option>Price (High to Low)</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="border-bottom">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="tab-content main" id="foodTabContent">
                        <div class="tab-pane fade show active " id="shop" role="tabpanel"
                            aria-labelledby="shop-tab">
                            <h6 id='total-deals' class="inner-head"></h6>
                            <div class="row item-container">
                                <!-- Shop food items goes here -->
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pally" role="tabpanel" aria-labelledby="pally-tab">
                            <h6 id='total-deals' class="inner-head mb-3 mt-3"></h6>
                            <div class="row item-container">
                                <!-- Pally food items goes here -->
                            </div>
                        </div>

                        <div class="tab-pane fade preorder-bg" id="recommended" role="tabpanel"
                            aria-labelledby="recommended-tab">
                            <h6 id='total-deals' class="inner-head mb-3 mt-3"></h6>
                            <div class="row item-container">
                                <!-- Recommended food items goes here -->
                            </div>
                        </div>
                    </div>
                    <div id='load-btn-wrapper' class="load-bg text-center mb-5 d-none d-lg-block">
                        <a href="javascript:void(0)">
                            <button typ="button" id='load-more-btn' class="load-more text-uppercase ">
                                Load more items
                            </button>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!------ FOOD-ITEMS-WEB-VIEW-SECTION-START ------>
