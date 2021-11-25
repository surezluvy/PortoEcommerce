<?php include 'template/header.php'; ?>

<?php 
    include '../mysql.php';
    $no = 1;
    $data = mysqli_query($connect, "SELECT * FROM product WHERE id_product='$_GET[id]'");
    $data2 = $data->fetch_assoc();
?>
<!--start page wrapper -->
<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Tambah data gambar</div>
				</div>
				<!--end breadcrumb-->
				<!--end row-->
				<div class="row">
					<div class="col-xl-9 mx-auto">
						<hr/>
						<div class="card border-top border-0 border-4 border-info">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<div><i class="bx bxs-user me-1 font-22 text-info"></i>
										</div>
										<h5 class="mb-0 text-info">Tambah data gambar untuk produk <?php echo $data2['product_name'] ?></h5>
									</div>
									<hr/>
									<form action="image/add.php" method="post" enctype="multipart/form-data">
										<div class="row mb-3">
											<label for="inputEnterYourName" class="col-sm-3 col-form-label">Nama produk</label>
											<div class="col-sm-9">
												<input type="hidden" name="id_product" class="form-control" id="inputEnterYourName" value="<?php echo $data2['id_product'] ?>">
												<input type="text" class="form-control" id="inputEnterYourName" value="<?php echo $data2['product_name'] ?>" disabled>
											</div>
										</div>
										<div class="row mb-3">
											<label for="inputChoosePassword2" class="col-sm-3 col-form-label">Gambar</label>
											<div class="col-sm-9">
												<input type="file" name="image" class="form-control" id="inputChoosePassword2" placeholder="Masukan password">
											</div>
										</div>
										<div class="row">
											<label class="col-sm-3 col-form-label"></label>
											<div class="col-sm-9">
												<button type="submit" class="btn btn-info px-5">Tambah data</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
		<!--end page wrapper -->
<?php include 'template/footer.php'; ?>