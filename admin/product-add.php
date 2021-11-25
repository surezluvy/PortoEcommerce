<?php include 'template/header.php'; ?>
<!--start page wrapper -->
<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Tambah data</div>
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
										<h5 class="mb-0 text-info">Tambah data produk</h5>
									</div>
									<hr/>
									<form action="product/add.php" method="post" enctype="multipart/form">
										<div class="row mb-3">
											<label for="inputEnterYourName" class="col-sm-3 col-form-label">Masukan nama</label>
											<div class="col-sm-9">
												<input type="text" name="product_name" class="form-control" id="inputEnterYourName" placeholder="Masukan nama">
											</div>
										</div>
										<div class="row mb-3">
											<label for="inputPhoneNo2" class="col-sm-3 col-form-label">Harga</label>
											<div class="col-sm-9">
												<input type="number" name="price" class="form-control" id="inputPhoneNo2" placeholder="Masukan harga">
											</div>
										</div>
										<div class="row mb-3">
											<label for="inputChoosePassword2" class="col-sm-3 col-form-label">Gambar</label>
											<div class="col-sm-9">
												<input type="file" name="image" class="form-control" id="inputChoosePassword2" placeholder="Masukan password">
											</div>
										</div>
										<div class="row mb-3">
											<label for="inputAddress4" class="col-sm-3 col-form-label">Deskripsi</label>
											<div class="col-sm-9">
												<textarea name="description" class="form-control" id="inputAddress4" rows="3" placeholder="Masukan Deskripsi"></textarea>
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