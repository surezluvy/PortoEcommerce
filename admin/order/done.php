<?php 
	include '../../mysql.php';
    mysqli_query($connect, "UPDATE checkout SET status='Selesai' WHERE id_users='$_GET[id_users]' AND date='$_GET[date]' AND status='Proses'") or die(mysqli_error($connect));

    echo "<script>alert('Pesanan berhasil di konfirmasi')</script>";
    echo "<script>location='../order.php';</script>";
 ?>