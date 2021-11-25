<?php include 'template/header.php'; ?>

<?php 
    include 'mysql.php';
    $no = 1;
    $data = mysqli_query($connect, "SELECT * FROM product WHERE id_product='$_GET[id]'");
    $data1 = $data->fetch_assoc();
?>
        <main class="main">
            <div class="container pt-1">
                <div class="row">
                    <div class="col-lg-9 main-content">
                        <div class="product-single-container product-single-default">
                            <div class="cart-message d-none">
                                <strong class="single-cart-notice">“<?php echo $data1['product_name'] ?>”</strong>
                                <span>Berhasil ditambahkan ke keranjang.</span>
                            </div>

                            <div class="row">
                                <div class="col-md-6 product-single-gallery">
                                    <div class="product-slider-container">

                                        <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                                            
                                            <?php 
                                                include 'mysql.php';
                                                $data3 = mysqli_query($connect, "SELECT * FROM image WHERE id_product=$data1[id_product]");
                                                while($data4 = mysqli_fetch_array($data3)){
                                            ?>
                                            <div class="product-item">
                                                <img class="product-single-image"
                                                    src="admin/assets/images/products/<?php echo $data4['image'] ?>"
                                                    data-zoom-image="admin/assets/images/products/<?php echo $data4['image'] ?>"
                                                    width="468" height="468" alt="product" />
                                            </div>
                                            <?php } ?>
                                        </div>
                                        
                                        <!-- End .product-single-carousel -->
                                        <span class="prod-full-screen">
                                            <i class="icon-plus"></i>
                                        </span>
                                    </div>

                                    <div class="prod-thumbnail owl-dots">
                                        <?php 
                                            include 'mysql.php';
                                            $no = 1;
                                            $data4 = mysqli_query($connect, "SELECT * FROM image WHERE id_product=$data1[id_product]");
                                            while($data5 = mysqli_fetch_array($data4)){
                                        ?>
                                        <div class="owl-dot">
                                            <img src="admin/assets/images/products/<?php echo $data5['image'] ?>" width="110"
                                                height="110" alt="product-thumbnail" />
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div><!-- End .product-single-gallery -->

                                <div class="col-md-6 product-single-details">
                                    <h1 class="product-title"><?php echo $data1['product_name'] ?></h1>

                                    <hr class="short-divider">

                                    <div class="price-box">
                                        Rp. <span class="product-price"><?php echo $data1['price'] ?></span>
                                    </div><!-- End .price-box -->

                                    <div class="product-desc">
                                        <p>
                                            <?php echo $data1['description'] ?>
                                        </p>
                                    </div><!-- End .product-desc -->

                                    <div class="product-filters-container" style="display: none">
                                        
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
                                        
                                    </div>

                                    <div class="product-action">
                                        <div class="price-box product-filtered-price">
                                            <del class="old-price"><span>$286.00</span></del>
                                            <span class="new-price">$245.00</span>
                                        </div>
                                        <form action="cart/add.php?id=<?php echo $data1['id_product'] ?>" method="post">
                                            <div class="product-single-qty">
                                                <input class="horizontal-quantity form-control" type="text" name="qt">
                                            </div><!-- End .product-single-qty -->

                                            <!-- <a href="cart/add.php?id=<?php echo $data1['id_product'] ?>" class="btn btn-dark mr-2"
                                                title="Add to Cart">Add to
                                                Cart</a> -->
                                            <button class="btn btn-dark mr-2">Masukan ke keranjang</button>
                                        </form>
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
                        <?php 
                            include 'mysql.php';
                            $no = 1;
                            $data = mysqli_query($connect, "SELECT * FROM product");
                            while($data2 = mysqli_fetch_array($data)){
                        ?>
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
                                <div class="category-wrap">
                                </div>
                                <h3 class="product-title">
                                    <a href="demo3-product.html"><?php echo $data2['product_name'] ?></a>
                                </h3>
                                <div class="price-box">
                                    <span class="product-price">Rp. <?php echo $data2['price'] ?></span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                        <?php } ?>
                        
                    </div><!-- End .products-slider -->
                </div><!-- End .container -->
            </div><!-- End .products-section -->
        </main><!-- End .main -->
<?php include 'template/footer.php'; ?>