<?php include 'template/header.php'; ?>
<?php 
	session_start();
	if(isset($_SESSION)){
		if($_SESSION['status'] != 'login'){
			// session_destroy();
			echo "<script>alert('Harap login dahulu')</script>";
			echo "<script>location='login.php';</script>";
		}
	}
?>
<main class="main">
			<div class="container">
				<ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
					<li class="active">
						<a href="#">Keranjang</a>
					</li>
				</ul>

				<div class="row">
					<div class="col-lg-8">
						<div class="cart-table-container">
							<table class="table table-cart">
								<thead>
									<tr>
										<th class="thumbnail-col"></th>
										<th class="product-col">Product</th>
										<th class="price-col">Harga</th>
										<th class="qty-col">Quantity</th>
									</tr>
								</thead>
								<tbody>
									
									<?php 
										include 'mysql.php';
										$no = 1;
										$data = mysqli_query($connect, "SELECT * FROM cart JOIN product ON cart.id_product=product.id_product WHERE id_user='$_SESSION[id_user]'");
										while($data2 = mysqli_fetch_array($data)){
									?>
									<tr class="product-row">
										<td>
											<figure class="product-image-container">
												<a href="product.html" class="product-image">
													<img src="admin/assets/images/products/<?php echo $data2['image'] ?>" alt="product">
												</a>

												<a href="cart/delete.php?id=<?php echo $data2['id_product'] ?>" class="btn-remove icon-cancel" title="Remove Product"></a>
											</figure>
										</td>
										<td class="product-col">
											<h5 class="product-title">
												<a href="product.php?id=<?php echo $data2['id_product'] ?>"><?php echo $data2['product_name'] ?></a>
											</h5>
										</td>
										<td>Rp. <?php echo $data2['price'] ?></td>
										<td>
											<div class="product-single-qty">
												<input readonly="readonly" class="form-control" type="text" value="<?php echo $data2['qt'] ?>">
											</div><!-- End .product-single-qty -->
										</td>
									</tr>
									<?php } ?>

								</tbody>

							</table>
						</div><!-- End .cart-table-container -->
					</div><!-- End .col-lg-8 -->

					<div class="col-lg-4">
						<div class="cart-summary">
							<h3>TOTAL KERANJANG</h3>

							<table class="table table-totals">
								<tbody>
									<?php 
										include 'mysql.php';
										$sub_total = array("0");
										$sub_totals;
										$no = 0;
										$sql = mysqli_query($connect, "SELECT * FROM cart JOIN product ON cart.id_product = product.id_product WHERE id_user='$_SESSION[id_user]'") or die(mysqli_error($connect));
										while($data2 = mysqli_fetch_array($sql)){
											$sub_total[$no+1] = $data2['price'] * $data2['qt'];
											$sub_total[0] += $sub_total[$no+1];
											$no++;
										}
									?>
									<tr>
										<td>Subtotal</td>
										<td>Rp. <?php echo $sub_total[0] ?></td>
									</tr>

									<tr>
										<td colspan="2" class="text-left">
											<h4>Pengiriman</h4>

											<form action="cart/checkout.php" method="post" style="margin-top: 15px;">
												
												<?php 
													include 'mysql.php';
													$data = mysqli_query($connect, "SELECT * FROM user WHERE id_user='$_SESSION[id_user]'");
													$data3 = $data->fetch_assoc();
												?>
												<div class="form-group form-group-sm">
													<input type="text" name="name" class="form-control form-control-sm"
														placeholder="Nama Lengkap" value="<?php echo $data3['name'] ?>" required readonly>
												</div><!-- End .form-group -->

												<div class="form-group form-group-sm">
													<input type="text" name="address" class="form-control form-control-sm"
														placeholder="Alamat Lengkap" value="<?php echo $data3['address'] ?>" required readonly>
												</div><!-- End .form-group -->
										</td>
									</tr>
								</tbody>
							</table>

							<!-- <div class="checkout-methods">
								<button type="submit" class="btn btn-block btn-dark"><i class="fa fa-arrow-right"></i>Checkout</button>
							</div> -->
							</form>
							<!-- Button trigger modal -->
							<button type="button" class="btn btn-block btn-dark" data-toggle="modal" data-target="#exampleModalCenter">
								Checkout
							</button>

							<!-- Modal -->
							<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
								<div class="modal-header">
									<h2 class="modal-title" id="exampleModalLongTitle">Total</h2>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="order-summary">
										<table class="table table-mini-cart">
											<thead>
												<tr>
													<th colspan="2">Produk</th>
												</tr>
											</thead>
											<tbody>
												
												<?php 
													include 'mysql.php';
													$no = 1;
													$data = mysqli_query($connect, "SELECT * FROM cart JOIN product ON cart.id_product=product.id_product WHERE id_user='$_SESSION[id_user]'");
													while($data2 = mysqli_fetch_array($data)){
												?>
												<tr>
													<td class="product-col">
														<h3 class="product-title">
															<?php echo $data2['product_name'] ?>
															<span class="product-qty">x <?php echo $data2['qt'] ?></span>
														</h3>
													</td>

													<td class="price-col">
														<span></span>
													</td>
												</tr>
												<?php } ?>
											</tbody>
											<tfoot>
												<tr class="cart-subtotal">
													<td>
														<h4>Subtotal</h4>
													</td>

													<td class="price-col">
														<span>Rp. <?php echo $sub_total[0] ?></span>
													</td>
												</tr>

												<tr class="order-total">
													<td>
														<h4>Total</h4>
													</td>
													<?php
														$total = $sub_total[0]+50000;
													?>
													<td>
														<b class="total-price"><span>Rp. <?php echo $total ?></span></b>
													</td>

												</tr>
												<tr>
													<td>
														<h3>Silahkan melakukan pembayaran ke rekening berikut:</h3>
														<?php 
															include 'mysql.php';
															$no = 1;
															$data = mysqli_query($connect, "SELECT * FROM rekening");
															while($data2 = mysqli_fetch_array($data)){
														?>
														<p><?php echo $data2['name'] ?> : </p>
														<?php } ?>
														<p>&nbsp;</p>
														<label for="inputChoosePassword2" >Masukan bukti pembayaran</label>
													</td>
													<td>
														<p>&nbsp;</p>
														<?php 
															include 'mysql.php';
															$no = 1;
															$data = mysqli_query($connect, "SELECT * FROM rekening");
															while($data2 = mysqli_fetch_array($data)){
														?>
														<p><?php echo $data2['no'] ?></p>
														<?php } ?>
														<form action="cart/process.php" method="post" enctype="multipart/form-data">
															<input type="hidden" name="total" value="<?php echo $total ?>">
															<input type="file" name="image" class="form-control" required>
													</td>
												</tr>
											</tfoot>
										</table>
										<button type="submit" class="btn btn-dark btn-place-order">Checkout</button>
										</form>
									</div>
								</div>
								</div>
							</div>
							</div>
						</div><!-- End .cart-summary -->
					</div><!-- End .col-lg-4 -->
				</div><!-- End .row -->
			</div><!-- End .container -->

			<div class="mb-6"></div><!-- margin -->
		</main><!-- End .main -->
<?php include 'template/footer.php'; ?>