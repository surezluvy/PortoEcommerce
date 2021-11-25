<?php include 'template/header.php'; ?>

<?php 
    include '../mysql.php';
    $no = 1;
    $data = mysqli_query($connect, "SELECT * FROM product WHERE id_product='$_GET[id]'");
    $data3 = $data->fetch_assoc();
?>
<!--start page wrapper -->
<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Data Gambar Produk <?php echo $data3['product_name']?></div>
					<div class="ms-auto">
						<div class="btn-group">
							<a href="image-add.php?id=<?php echo $_GET['id'] ?>" class="btn btn-primary">Tambah data</a>
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
										<th>Gambar</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
								<?php 
									include '../mysql.php';
									$no = 1;
									$data = mysqli_query($connect, "SELECT * FROM image JOIN product ON image.id_product = product.id_product WHERE image.id_product='$_GET[id]'");
									while($data2 = mysqli_fetch_array($data)){
								?>
									<tr>
										<td><?php echo $no ?></td>
										<td>
                                            <img style="height: 200px; width: 250px;" src="assets/images/products/<?php echo $data2['image'] ?>" alt="<?php echo $data2['image'] ?>">
                                        </td>
										<td>
                                            <a href="image/delete.php?id=<?php echo $data2['id_image'] ?>&id_product=<?php echo $data2['id_product'] ?>" class="btn btn-danger">Hapus</a>
										</td>
									</tr>
                                <?php $no++; } ?>
								</tbody>
								<tfoot>
									<tr>
										<th>No</th>
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