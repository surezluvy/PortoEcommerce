<?php include 'template/header.php'; ?>
        <main class="main">
            <div class="container pt-1">
                <div class="row">
                    <div class="col-lg-9 main-content">
                        <div class="product-single-container product-single-default">
                            <div class="cart-message d-none">
                                <strong class="single-cart-notice">“Men Black Sports Shoes”</strong>
                                <span>has been added to your cart.</span>
                            </div>

                            <div class="row">
                                <div class="col-md-6 product-single-gallery">
                                    <div class="product-slider-container">

                                        <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                                            <div class="product-item">
                                                <img class="product-single-image"
                                                    src="../assets/images/products/zoom/product-1-big.jpg"
                                                    data-zoom-image="../assets/images/products/zoom/product-1-big.jpg"
                                                    width="468" height="468" alt="product" />
                                            </div>
                                        </div>
                                        <!-- End .product-single-carousel -->
                                        <span class="prod-full-screen">
                                            <i class="icon-plus"></i>
                                        </span>
                                    </div>

                                    <div class="prod-thumbnail owl-dots">
                                        <div class="owl-dot">
                                            <img src="../assets/images/products/zoom/product-1.jpg" width="110"
                                                height="110" alt="product-thumbnail" />
                                        </div>
                                    </div>
                                </div><!-- End .product-single-gallery -->

                                <div class="col-md-6 product-single-details">
                                    <h1 class="product-title">Men Black Sports Shoes</h1>

                                    <hr class="short-divider">

                                    <div class="price-box">
                                        <span class="product-price">$199.00</span>
                                    </div><!-- End .price-box -->

                                    <div class="product-desc">
                                        <p>
                                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                                            ac turpis
                                            egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit
                                            amet,
                                            ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi
                                            vitae est.
                                            Mauris placerat eleifend leo.
                                        </p>
                                    </div><!-- End .product-desc -->

                                    <div class="product-filters-container">
                                        
                                        <div class="product-single-filter flex-column align-items-start">
                                            <label>Size:</label>
                                            <ul class="config-size-list">
                                                <li class=""><a href="javascript:;"
                                                        class="d-flex align-items-center justify-content-center">Medium</a>
                                                </li>
                                                <li class=""><a href="javascript:;"
                                                        class="d-flex align-items-center justify-content-center">Large</a>
                                                </li>
                                                <li class=""><a href="javascript:;"
                                                        class="d-flex align-items-center justify-content-center">Extra
                                                        Large</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="product-single-filter">
                                            <a class="font1 text-uppercase clear-btn ml-0" href="#">Clear</a>
                                        </div>
                                        <!---->
                                    </div>

                                    <div class="product-action">
                                        <div class="price-box product-filtered-price">
                                            <del class="old-price"><span>$286.00</span></del>
                                            <span class="new-price">$245.00</span>
                                        </div>

                                        <div class="product-single-qty">
                                            <input class="horizontal-quantity form-control" type="text">
                                        </div><!-- End .product-single-qty -->

                                        <a href="javascript:;" class="btn btn-dark add-cart mr-2"
                                            title="Add to Cart">Add to
                                            Cart</a>

                                        <a href="cart.html" class="btn btn-gray view-cart d-none">View cart</a>
                                    </div><!-- End .product-action -->

                                    <hr class="divider mb-0 mt-0">

                                </div><!-- End .product-single-details -->
                            </div><!-- End .row -->
                        </div><!-- End .product-single-container -->

                    </div><!-- End .main-content -->

                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="products-section pt-0">
                <div class="container">
                    <h2>Related Products</h2>

                    <div class="products-slider owl-carousel owl-theme 5col dots-top dots-small" data-owl-options="{
                        'dots': true
                    }">

                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="demo3-product.html">
                                    <img src="../assets/images/demoes/demo3/products/product-3.jpg" width="273"
                                        height="273" alt="productr" />
                                </a>
                                <div class="btn-icon-group">
                                    <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                            class="icon-shopping-cart"></i></a>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                    View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="demo3-shop.html" class="product-category">category</a>
                                    </div>
                                </div>
                                <h3 class="product-title">
                                    <a href="demo3-product.html">Ideapad</a>
                                </h3>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">$59.00</span>
                                    <span class="product-price">$49.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                        
                    </div><!-- End .products-slider -->
                </div><!-- End .container -->
            </div><!-- End .products-section -->
        </main><!-- End .main -->
<?php include 'template/footer.php'; ?>