<?php include 'template/header.php'; ?>
<!--start page wrapper -->
<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Ubah data</div>
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
										<h5 class="mb-0 text-info">Ubah data pengguna</h5>
									</div>
									<hr/>
									<form action="user/edit.php" method="post" enctype="multipart/form">
									<?php 
										include '../mysql.php';
										$data = mysqli_query($connect, "SELECT * FROM user WHERE id_user='$_GET[id]'");
										while($data2 = mysqli_fetch_array($data)){
									?>
										<input type="hidden" value="<?php echo $data2['id_user'] ?>" name="id_user">
										<div class="row mb-3">
											<label for="inputEnterYourName" class="col-sm-3 col-form-label">Masukan nama</label>
											<div class="col-sm-9">
												<input type="text" name="name" class="form-control" id="inputEnterYourName" value="<?php echo $data2['name'] ?>">
											</div>
										</div>
										<div class="row mb-3">
											<label for="inputPhoneNo2" class="col-sm-3 col-form-label">Email</label>
											<div class="col-sm-9">
												<input type="email" name="email" class="form-control" id="inputPhoneNo2" value="<?php echo $data2['email'] ?>">
											</div>
										</div>
										<div class="row mb-3">
											<label for="inputChoosePassword2" class="col-sm-3 col-form-label">Password</label>
											<div class="col-sm-9">
												<input type="text" name="password" class="form-control" id="inputChoosePassword2" value="<?php echo $data2['password'] ?>">
											</div>
										</div>
										<div class="row mb-3">
											<label for="inputAddress4" class="col-sm-3 col-form-label">Alamat</label>
											<div class="col-sm-9">
												<textarea name="address" class="form-control" id="inputAddress4" rows="3"><?php echo $data2['address'] ?></textarea>
											</div>
										</div>
										<div class="row">
											<label class="col-sm-3 col-form-label"></label>
											<div class="col-sm-9">
												<button type="submit" class="btn btn-info px-5">Ubah data</button>
											</div>
										</div>
									<?php } ?>
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