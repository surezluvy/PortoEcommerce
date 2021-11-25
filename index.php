<?php include 'template/header.php'; ?>
        <main class="main">
            <div class="home-slider slide-animate owl-carousel owl-theme show-nav-hover nav-big">
                <div class="home-slide home-slide1 banner d-flex align-items-center">
                    <img class="slide-bg" src="assets/images/demoes/demo3/slider/slide1.jpg"
                        style="background-color: #ecc;" alt="home banner">
                    <div class="banner-layer appear-animate" data-animation-name="fadeInUpShorter">
                        <h2>Winter Fashion Trends</h2>
                        <h3 class="text-uppercase mb-0">Get up to 30% off</h3>
                        <h4 class="m-b-4">on Jackets</h4>

                        <h5 class="text-uppercase">Starting at<span
                                class="coupon-sale-text"><sup>$</sup>199<sup>99</sup></span></h5>
                        <a href="demo3-shop.html" class="btn btn-dark btn-xl" role="button">Shop Now</a>
                    </div><!-- End .banner-layer -->
                </div><!-- End .home-slide -->

                <div class="home-slide home-slide2 banner d-flex align-items-center">
                    <img class="slide-bg" src="assets/images/demoes/demo3/slider/slide2.jpg"
                        style="background-color: #bfcec9;" alt="home banner">
                    <div class="banner-layer appear-animate" data-animation-name="fadeInUpShorter">
                        <h2>New Season Hats </h2>
                        <h3 class="text-uppercase rotated-upto-text mb-0"><small>Up to</small>20% off</h3>

                        <hr class="short-thick-divider mb-sm-0 mb-1">

                        <h5 class="text-uppercase d-inline-block mb-2 mb-sm-0">Starting at <span>$<em>19</em>99</span>
                        </h5>
                        <a href="demo3-shop.html" class="btn btn-dark btn-xl btn-icon-right" role="button">Shop Now <i
                                class="fas fa-long-arrow-alt-right"></i></a>
                    </div><!-- End .banner-layer -->
                </div><!-- End .home-slide -->
            </div><!-- End .home-slider -->

            <section class="container pb-3 mb-1" id="product">
                <h2 class="section-title ls-n-15 text-center pb-2 m-b-4">Produk kami</h2>

                <div class="row py-4">
                    
                    <?php 
                        include 'mysql.php';
                        $no = 1;
                        $data = mysqli_query($connect, "SELECT * FROM product");
                        while($data2 = mysqli_fetch_array($data)){
                    ?>
                    <div class="col-6 col-sm-4 col-md-3 col-xl-2 appear-animate" data-animation-name="fadeIn"
                        data-animation-delay="300" data-animation-duration="1000">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.php?id=<?php echo $data2['id_product'] ?>">
                                    <img src="admin/assets/images/products/<?php echo $data2['image'] ?>" width="273"
                                        height="273" alt="productr" />
                                </a>
                                <div class="btn-icon-group">
                                    <a href="cart/add.php?id=<?php echo $data2['id_product'] ?>" class="btn-icon"><i
                                            class="fa fa-shopping-cart"></i></a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-title">
                                    <a href="product.php?id=<?php echo $data2['id_product'] ?>"><?php echo $data2['product_name'] ?></a>
                                </h3>
                                <div class="price-box">
                                    <span class="product-price">Rp. <?php echo $data2['price'] ?></span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                    </div>
                    <?php } ?>
                    
                </div>
            </section>
        </main><!-- End .main -->
<?php include 'template/footer.php'; ?>