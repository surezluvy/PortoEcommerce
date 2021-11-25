<?php 
	include '../mysql.php';
    mysqli_query($connect, "DELETE FROM cart WHERE id_product='$_GET[id]'") or die(mysqli_error($connect));

    echo "<script>alert('Produk berhasil di hapus dari keranjang')</script>";
    echo "<script>location='../index.php';</script>";
 ?>