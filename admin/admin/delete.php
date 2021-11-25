<?php 
	include '../../mysql.php';
    mysqli_query($connect, "DELETE FROM admin WHERE id='$_GET[id]'") or die(mysqli_error($connect));

    echo "<script>alert('Data berhasil di hapus')</script>";
    echo "<script>location='../admin.php';</script>";
 ?>