<?php 
	include '../../mysql.php';
    mysqli_query($connect, "UPDATE admin SET email='$_POST[email]', password='$_POST[password]' WHERE id='$_POST[id]'") or die(mysqli_error($connect));

    echo "<script>alert('Data berhasil di ubah')</script>";
    echo "<script>location='../admin.php';</script>";
 ?>