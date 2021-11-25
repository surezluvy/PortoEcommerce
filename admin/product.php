<?php include 'template/header.php'; ?>
<!--start page wrapper -->
<!--start page wrapper -->
<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Data Pengguna</div>
					<div class="ms-auto">
						<div class="btn-group">
							<a href="product-add.php" class="btn btn-primary">Tambah data</a>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Harga</th>
										<th>Deskripsi</th>
										<th>Gambar</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
								<?php 
									include '../mysql.php';
									$no = 1;
									$data = mysqli_query($connect, "SELECT * FROM product");
									while($data2 = mysqli_fetch_array($data)){
								?>
									<tr>
										<td><?php echo $no ?></td>
										<td><?php echo $data2['product_name'] ?></td>
										<td>Rp. <?php echo $data2['price'] ?></td>
										<td><?php echo $data2['description'] ?></td>
										<td>
											<a href="image.php?id=<?php echo $data2['id_product'] ?>" class="btn btn-primary">Lihat</a>
										</td>
										<td>
											<a href="product-edit.php?id=<?php echo $data2['id_product'] ?>" class="btn btn-primary">Ubah</a>
											<a href="product/delete.php?id=<?php echo $data2['id_product'] ?>" class="btn btn-danger">Hapus</a>
										</td>
									</tr>
								<?php } ?>
								</tbody>
								<tfoot>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Harga</th>
										<th>Deskripsi</th>
										<th>Gambar</th>
										<th>Aksi</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end page wrapper -->
<?php include 'template/footer.php'; ?>