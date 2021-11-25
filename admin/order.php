<?php include 'template/header.php'; ?>
<!--start page wrapper -->
<!--start page wrapper -->
<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Data Pesanan</div>
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
										<th>Total</th>
										<th>Tanggal</th>
										<th>Status</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
								<?php 
									include '../mysql.php';
									$no = 1;
									$data = mysqli_query($connect, "SELECT * FROM `checkout` 
                                    JOIN user ON checkout.id_users=user.id_user
                                    JOIN product ON checkout.id_product=product.id_product");
									while($data2 = mysqli_fetch_array($data)){
								?>
									<tr>
										<td><?php echo $no ?></td>
										<td><?php echo $data2['name'] ?></td>
										<td>Rp. <?php echo $data2['total'] ?></td>
										<!-- <td>
                                        	<img style="height: 300px; width: 200px;" src="assets/images/bukti/<?php echo $data2['image_check'] ?>" alt="<?php echo $data2['image_check'] ?>">
										</td> -->
										<td><?php echo $data2['date'] ?></td>
										<td><?php echo $data2['status'] ?></td>
										<td>
											<?php if($data2['status'] == 'Proses'){ ?>
												<a href="order-detail.php?id_user=<?php echo $data2['id_user'] ?>&date=<?php echo $data2['date'] ?>" class="btn btn-primary">Lihat</a>
											<?php } else { ?>
												<a href="#" class="btn btn-secondary">Lihat</a>
											<?php } ?>
										</td>
									</tr>
								<?php $no++;} ?>
								</tbody>
								<tfoot>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Total</th>
										<th>Tanggal</th>
										<th>Status</th>
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