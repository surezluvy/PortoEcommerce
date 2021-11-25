<?php 
	include '../../mysql.php';
    mysqli_query($connect, "DELETE FROM product WHERE id_product='$_GET[id]'") or die(mysqli_error($connect));

    echo "<script>alert('Data berhasil di hapus')</script>";
    echo "<script>location='../product.php';</script>";
 ?>