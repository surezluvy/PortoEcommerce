<?php 
	include '../../mysql.php';
    mysqli_query($connect, "DELETE FROM user WHERE id_user='$_GET[id]'") or die(mysqli_error($connect));

    echo "<script>alert('Data berhasil di hapus')</script>";
    echo "<script>location='../index.php';</script>";
 ?>